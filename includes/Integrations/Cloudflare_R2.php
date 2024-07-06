<?php

namespace Advanced_Media_Offloader\Integrations;

use Advanced_Media_Offloader\Abstracts\S3_Provider;
use Advanced_Media_Offloader\Vendor\Aws\S3\S3Client;

class Cloudflare_R2 extends S3_Provider
{
	public $providerName = "Cloudflare R2";

	public function __construct()
	{
		// Do nothing.
	}

	public function getProviderName()
	{
		return $this->providerName;
	}

	public function getClient()
	{
		return new S3Client([
			'version' => 'latest',
			'endpoint' => defined("WPMC_CLOUDFLARE_R2_ENDPOINT") ? WPMC_CLOUDFLARE_R2_ENDPOINT : '',
			'region' => defined("WPMC_CLOUDFLARE_R2_REGION") ? WPMC_CLOUDFLARE_R2_REGION : 'us-east-1',
			'credentials' => [
				'key' => defined("WPMC_CLOUDFLARE_R2_KEY") ? WPMC_CLOUDFLARE_R2_KEY : '',
				'secret' => defined("WPMC_CLOUDFLARE_R2_SECRET") ? WPMC_CLOUDFLARE_R2_SECRET : '',
			]
		]);
	}

	public function getBucket()
	{
		return defined("WPMC_CLOUDFLARE_R2_BUCKET") ? WPMC_CLOUDFLARE_R2_BUCKET : null;
	}

	public function getDomain()
	{
		return defined('WPMC_CLOUDFLARE_R2_DOMAIN') ? trailingslashit(WPMC_CLOUDFLARE_R2_DOMAIN) : '';
	}

	public function credentialsField()
	{
		$requiredConstants = [
			'WPMC_CLOUDFLARE_R2_KEY' => __('WPMC_CLOUDFLARE_R2_KEY', 'wp-media-cloud'),
			'WPMC_CLOUDFLARE_R2_SECRET' => __('WPMC_CLOUDFLARE_R2_SECRET', 'wp-media-cloud'),
			'WPMC_CLOUDFLARE_R2_ENDPOINT' => __('WPMC_CLOUDFLARE_R2_ENDPOINT', 'wp-media-cloud'),
			'WPMC_CLOUDFLARE_R2_BUCKET' => __('WPMC_CLOUDFLARE_R2_BUCKET', 'wp-media-cloud'),
			'WPMC_CLOUDFLARE_R2_DOMAIN' => __('WPMC_CLOUDFLARE_R2_DOMAIN', 'wp-media-cloud'),
		];

		$missingConstants = $this->checkRequiredConstants($requiredConstants);

		if (!empty($missingConstants)) {
			echo '<p>' . esc_html__('Please define the following constants in wp-config.php:', 'wp-media-cloud') . '</p>';
			foreach ($missingConstants as $constant => $message) {
				echo '<p>' . esc_html("$message") . '</p>';
			}
			return;
		}

		echo '<p>' . esc_html__('Cloudflare R2 credentials are set in wp-config.php', 'wp-media-cloud') . '</p>';

		echo '<button class="wpmc_js_test_connection">' . esc_html__('Test Connection', 'wp-media-cloud') . '</button>';
	}
}
