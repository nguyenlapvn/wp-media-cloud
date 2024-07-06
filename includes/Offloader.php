<?php

namespace Advanced_Media_Offloader;

use Advanced_Media_Offloader\Abstracts\S3_Provider;

class Offloader
{
	private static $instance = null;
	public $cloudProvider;

	private function __construct(S3_Provider $cloudProvider)
	{
		$this->cloudProvider = $cloudProvider;
	}

	public static function get_instance(S3_Provider $cloudProvider)
	{
		if (self::$instance === null) {
			self::$instance = new self($cloudProvider);
		}
		return self::$instance;
	}

	public function initializeHooks()
	{
		add_filter('wp_generate_attachment_metadata', [$this, 'handleAttachmentUpload'], 10, 2);
		add_filter('wp_get_attachment_url', [$this, 'modifyAttachmentUrl'], 10, 2);
		add_filter('wp_calculate_image_srcset', [$this, 'modifyImageSrcset'], 10, 5);
	}

	public function modifyAttachmentUrl($url, $post_id)
	{
		if ($this->isOffloaded($post_id)) {
			$subDir = $this->getSubdir($post_id);
			$url = $this->cloudProvider->getDomain() . $subDir . basename($url);
		}
		return $url;
	}

	public function modifyImageSrcset($sources, $size_array, $image_src, $image_meta, $attachment_id)
	{
		if ($this->isOffloaded($attachment_id)) {
			$subDir = $this->getSubdir($attachment_id);
			$cdnUrl = trailingslashit($this->cloudProvider->getDomain());
			foreach ($sources as $key => $source) {
				$sources[$key]['url'] = str_replace(trailingslashit(wp_get_upload_dir()['baseurl']), $cdnUrl, $source['url']);
			}
		}
		return $sources;
	}

	public function handleAttachmentUpload($metadata, $attachment_id)
	{
		if ($this->uploadToCloud($attachment_id)) {
			update_post_meta($attachment_id, 'wpmc_offloaded', true);
			update_post_meta($attachment_id, 'wpmc_offloaded_at', time());
			update_post_meta($attachment_id, 'wpmc_provider', $this->cloudProvider->getProviderName());
			update_post_meta($attachment_id, 'wpmc_bucket', $this->cloudProvider->getBucket());
			update_post_meta($attachment_id, 'wpmc_path', trailingslashit(dirname($metadata['file'])));
		} else {
			wp_delete_attachment($attachment_id, true);
		}
		return $metadata;
	}

	private function uploadToCloud($attachment_id)
	{
		$file = get_attached_file($attachment_id);
		$subdir = $this->getSubdir($attachment_id);
		$uploadResult = $this->cloudProvider->uploadFile($file, $subdir . wp_basename($file));

		if (!$uploadResult) {
			return false;
		}

		$metadata = wp_get_attachment_metadata($attachment_id);
		foreach ($metadata['sizes'] as $size => $data) {
			$file = get_attached_file($attachment_id, true);
			$file = str_replace(wp_basename($file), $data['file'], $file);
			$uploadResult = $this->cloudProvider->uploadFile($file, $subdir . wp_basename($file));
			if (!$uploadResult) {
				return false;
			}
		}
		return true;
	}

	private function isOffloaded($post_id)
	{
		return (bool)get_post_meta($post_id, 'wpmc_offloaded', true);
	}

	private function getSubdir($attachment_id)
	{
		$metadata = wp_get_attachment_metadata($attachment_id);
		return !empty($metadata['file']) ? trailingslashit(dirname($metadata['file'])) : "";
	}
}
