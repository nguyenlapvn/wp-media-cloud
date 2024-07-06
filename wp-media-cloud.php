<?php
/*
 * Plugin Name:       WP Media Cloud
 * Plugin URI:        https://nguyenlap.net/plugins/wp-media-cloud/
 * Description:       Offload WordPress media to Idrive E2, DigitalOcean Spaces or Cloudflare R2.
 * Version:           1.0.0
 * Requires at least: 6.5
 * Requires PHP:      7.4
 * Author:            Nguyen Lap
 * Author URI:        https://nguyenlap.net/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-media-cloud
 * Domain Path:       /languages
 */

use Advanced_Media_Offloader\Vendor\Aws\S3\S3Client;

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (!class_exists('WPMC')) {
	/**
	 * The main WPMC class
	 */
	class WPMC
	{

		/**
		 * The plugin version number.
		 *
		 * @var string
		 */
		public $version;

		/**
		 * The plugin settings array.
		 *
		 * @var array
		 */
		public $settings = array();

		/**
		 * The plugin data array.
		 *
		 * @var array
		 */
		public $data = array();

		protected $cloud_providers = [
			'idrive_e2' => [
				'name' => 'Idrive E2',
				'class' => 'Advanced_Media_Offloader\Integrations\IdriveE2',
            ],
			'cloudflare_r2' => [
				'name' => 'Cloudflare R2',
				'class' => 'Advanced_Media_Offloader\Integrations\Cloudflare_R2',
			],
			'dos' => [
				'name' => 'DigitalOcean Spaces',
				'class' => 'Advanced_Media_Offloader\Integrations\DigitalOceanSpaces',
			]
		];

		/**
		 * A dummy constructor to ensure WP Fitter Media Offloader is only setup once.
		 *
		 * @since   1.0.0
		 *
		 * @return  void
		 */
		public function __construct()
		{
			$plugin_data = get_file_data(__FILE__, array('Version' => 'Version'));
			$this->version = $plugin_data['Version'];
		}

		/**
		 * Sets up the Advanced Media Offloader
		 *
		 * @since   1.0.0
		 *
		 * @return  void
		 */
		public function initialize()
		{

			// Define constants.
			$this->define('WPMC', true);
			$this->define('WPMC_PATH', plugin_dir_path(__FILE__));
			$this->define('WPMC_URL', plugin_dir_url(__FILE__));
			$this->define('WPMC_BASENAME', plugin_basename(__FILE__));
			$this->define('WPMC_VERSION', $this->version);
			$this->define('WPMC_API_VERSION', 1);

			// Register activation hook.
			register_activation_hook(__FILE__, array($this, 'plugin_activated'));

			// Define settings.
			$this->settings = array(
				'name'                    => __('Advanced Media Offloader', 'wp-media-cloud'),
				'description'             => __('Offload WordPress media to Amazon S3, DigitalOcean Spaces, Min.io or Cloudflare R2.', 'wp-media-cloud'),
				'slug'                    => dirname(WPMC_BASENAME),
				'version'                 => WPMC_VERSION,
				'basename'                => WPMC_BASENAME,
				'path'                    => WPMC_PATH,
				'file'                    => __FILE__,
				'url'                     => plugin_dir_url(__FILE__),
				'show_admin'              => true,
				'show_updates'            => true,
				'enable_post_types'       => true,
				'enable_options_pages_ui' => true,
				'stripslashes'            => false,
				'local'                   => true,
				'json'                    => true,
				'save_json'               => '',
				'load_json'               => array(),
				'default_language'        => '',
				'current_language'        => '',
				'capability'              => 'manage_options',
				'uploader'                => 'wp',
				'autoload'                => false,
				'offloader'               => '',
			);

			if (get_option('wpmc_options') === false) {
				update_option('wpmc_options', $this->settings);
			}

			# Include Composer autoload.
			if (file_exists(WPMC_PATH . 'vendor/autoload.php')) {
				include_once WPMC_PATH . 'vendor/autoload.php';
			}

			# check if AWS SDK is loaded
			if (!class_exists(S3Client::class)) {
				// Show admin notice if AWS SDK is missing.
				add_action('admin_notices', function () {
					$this->notice(__('AWS SDK for PHP is required to use Advanced Media Offloader. Please install it via Composer.', 'wp-media-cloud'), 'error');
				});
				return;
			}

			# Include admin.
			if (is_admin()) {
				new Advanced_Media_Offloader\Admin\GeneralSettings($this->cloud_providers);
			}

			$this->init();
		}

		/**
		 * Completes the setup process on "init" of earlier.
		 *
		 * @since   1.0.0
		 *
		 * @return  void
		 */
		public function init()
		{
			// Load textdomain file.
			load_plugin_textdomain('wp-media-cloud', false, dirname(plugin_basename(__FILE__)) . '/languages/');

			// Get selected cloud provider in plugin settings page.
			$plugin_settings = get_option('wpmc_options');
			$cloud_provider = $plugin_settings['wpmc_cloud_provider'] ?? null;

			if ($cloud_provider && isset($this->cloud_providers[$cloud_provider])) {
				$offloader_class = $this->cloud_providers[$cloud_provider]['class'];

				// Initiate the class if it exists.
				if (class_exists($offloader_class)) {
					$cloud_provider = new $offloader_class();
					$offloader = Advanced_Media_Offloader\Offloader::get_instance($cloud_provider);
					$offloader->initializeHooks();
				}
			}
		}

		/**
		 * Plugin Activation Hook
		 *
		 * @since 1.0.0
		 */
		public function plugin_activated()
		{
			// Set the first activated version of Advanced Media Offloader.
			if (null === get_option('wpmc_first_activated_version', null)) {
				update_option('wpmc_first_activated_version', WPMC_VERSION, true);
			}
		}

		public function define($name, $value = true)
		{
			if (!defined($name)) {
				define($name, $value);
			}
		}

		public function notice($message, $type = 'info')
		{
			$class = 'notice notice-' . $type;
			printf('<div class="%1$s"><p>%2$s</p></div>', esc_attr($class), esc_attr($message));
		}
	}

	function wpmc()
	{
		global $wpmc;

		// Instantiate only once.
		if (!isset($wpmc)) {
			$wpmc = new WPMC();
			$wpmc->initialize();
		}
		return $wpmc;
	}

	// Instantiate.
	wpmc();
} // class_exists check
