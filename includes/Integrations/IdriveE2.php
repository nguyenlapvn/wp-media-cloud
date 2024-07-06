<?php

namespace Advanced_Media_Offloader\Integrations;

use Advanced_Media_Offloader\Abstracts\S3_Provider;
use Advanced_Media_Offloader\Vendor\Aws\S3\S3Client;

class IdriveE2 extends S3_Provider
{
	public $providerName = "Idrive E2";

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
			'endpoint' => defined("WPMC_IDRIVEE2_ENDPOINT") ? WPMC_IDRIVEE2_ENDPOINT : '',
			'region' => defined("WPMC_IDRIVEE2_REGION") ? WPMC_IDRIVEE2_REGION : 'us-east-1',
			'credentials' => [
				'key' => defined("WPMC_IDRIVEE2_KEY") ? WPMC_IDRIVEE2_KEY : '',
				'secret' => defined("WPMC_IDRIVEE2_SECRET") ? WPMC_IDRIVEE2_SECRET : '',
			]
		]);
	}

	public function getBucket()
	{
		return defined("WPMC_IDRIVEE2_BUCKET") ? WPMC_IDRIVEE2_BUCKET : null;
	}

	public function getDomain()
	{
		return defined('WPMC_IDRIVEE2_DOMAIN') ? trailingslashit(WPMC_IDRIVEE2_DOMAIN) . trailingslashit($this->getBucket()) : '';
	}

	public function credentialsField()
	{
		$requiredConstants = [
			'WPMC_IDRIVEE2_KEY' => __('WPMC_IDRIVEE2_KEY', 'wp-media-cloud'),
			'WPMC_IDRIVEE2_SECRET' => __('WPMC_IDRIVEE2_SECRET', 'wp-media-cloud'),
			'WPMC_IDRIVEE2_ENDPOINT' => __('WPMC_IDRIVEE2_ENDPOINT', 'wp-media-cloud'),
			'WPMC_IDRIVEE2_BUCKET' => __('WPMC_IDRIVEE2_BUCKET', 'wp-media-cloud'),
			'WPMC_IDRIVEE2_DOMAIN' => __('WPMC_IDRIVEE2_DOMAIN', 'wp-media-cloud'),
		];

		$missingConstants = $this->checkRequiredConstants($requiredConstants);

		if (!empty($missingConstants)) {
			echo '<p>' . esc_html__('Please define the following constants in wp-config.php:', 'wp-media-cloud') . '</p>';
			foreach ($missingConstants as $constant => $message) {
				echo '<p>' . esc_html("$message") . '</p>';
			}
			return;
		}

		echo '<p>' . esc_html__('Idrive E2 credentials are set in wp-config.php', 'wp-media-cloud') . '</p>';

		echo '<button class="wpmc_js_test_connection">' . esc_html__('Test Connection', 'wp-media-cloud') . '</button>';
	}
}
