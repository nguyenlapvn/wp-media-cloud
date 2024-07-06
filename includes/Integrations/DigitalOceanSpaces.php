<?php

namespace Advanced_Media_Offloader\Integrations;

use Advanced_Media_Offloader\Abstracts\S3_Provider;
use Advanced_Media_Offloader\Vendor\Aws\S3\S3Client;

class DigitalOceanSpaces extends S3_Provider
{
	public $providerName = "DigitalOcean Spaces";

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
			'endpoint' => defined("WPMC_DOS_ENDPOINT") ? WPMC_DOS_ENDPOINT : '',
			'region' => defined("WPMC_DOS_REGION") ? WPMC_DOS_REGION : 'us-east-1',
			'credentials' => [
				'key' => defined("WPMC_DOS_KEY") ? WPMC_DOS_KEY : '',
				'secret' => defined("WPMC_DOS_SECRET") ? WPMC_DOS_SECRET : '',
			]
		]);
	}

	public function getBucket()
	{
		return defined("WPMC_DOS_BUCKET") ? WPMC_DOS_BUCKET : null;
	}

	public function getDomain()
	{
		return defined('WPMC_DOS_DOMAIN') ? trailingslashit(WPMC_DOS_DOMAIN) : '';
	}

	public function credentialsField()
	{
		$requiredConstants = [
			'WPMC_DOS_KEY' => __('WPMC_DOS_KEY', 'wp-media-cloud'),
			'WPMC_DOS_SECRET' => __('WPMC_DOS_SECRET', 'wp-media-cloud'),
			'WPMC_DOS_ENDPOINT' => __('WPMC_DOS_ENDPOINT', 'wp-media-cloud'),
			'WPMC_DOS_BUCKET' => __('WPMC_DOS_BUCKET', 'wp-media-cloud'),
			'WPMC_DOS_DOMAIN' => __('WPMC_DOS_DOMAIN', 'wp-media-cloud'),
		];

		$missingConstants = $this->checkRequiredConstants($requiredConstants);

		if (!empty($missingConstants)) {
			echo '<p>' . esc_html__('Please define the following constants in wp-config.php:', 'wp-media-cloud') . '</p>';
			foreach ($missingConstants as $constant => $message) {
				echo '<p>' . esc_html("$message") . '</p>';
			}
			return;
		}

		echo '<p>' . esc_html__('DigitalOcean Spaces credentials are set in wp-config.php', 'wp-media-cloud') . '</p>';

		echo '<button class="wpmc_js_test_connection">' . esc_html__('Test Connection', 'wp-media-cloud') . '</button>';
	}
}
