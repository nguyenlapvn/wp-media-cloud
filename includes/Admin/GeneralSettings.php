<?php

namespace Advanced_Media_Offloader\Admin;

class GeneralSettings
{
	protected $cloud_providers;

	public function __construct($cloud_providers)
	{
		$this->cloud_providers = $cloud_providers;
		add_action('admin_menu', [$this, 'add_settings_page']);
		add_action('admin_init', [$this, 'initialize']);
		add_action('admin_enqueue_scripts', [$this, 'enqueue_scripts']);
		add_action('wp_ajax_wpmc_test_connection', [$this, 'check_connection_ajax']);
	}

	public function initialize()
	{
		register_setting('wpmc', 'wpmc_options', [$this, 'sanitize']);

		$this->add_settings_section();
		$this->add_provider_field();
		$this->add_credentials_field();
	}

	private function add_settings_section()
	{
		add_settings_section(
			'default',
			__('Settings', 'wp-media-cloud'),
			function () {
				echo '<p>' . esc_attr__('Select a cloud storage provider and provide the necessary credentials.', 'wp-media-cloud') . '</p>';
				echo '<p>' . esc_attr__('Please note that WP Media Cloud will only offload media uploaded from now on and won\'t offload your previously uploaded media.', 'wp-media-cloud') . '</p>';
			},
			'wpmc'
		);
	}

	private function add_provider_field()
	{
		add_settings_field(
			'wpmc_cloud_provider',
			__('Cloud Provider', 'wp-media-cloud'),
			[$this, 'cloud_provider_field'],
			'wpmc',
			'default'
		);
	}

	private function add_credentials_field()
	{
		add_settings_field(
			'wpmc_cloud_provider_credentials',
			__('Credentials', 'wp-media-cloud'),
			[$this, 'cloud_provider_credentials_field'],
			'wpmc',
			'default'
		);
	}

	public function sanitize($options)
	{
		if (!current_user_can('manage_options')) {
			return;
		}

		$options['wpmc_cloud_provider'] = sanitize_text_field($options['wpmc_cloud_provider'] ?? '');

		if (!array_key_exists($options['wpmc_cloud_provider'], $this->cloud_providers)) {
			add_settings_error('wpmc_messages', 'wpmc_message', __('Invalid Cloud Provider!', 'wp-media-cloud'), 'error');
			return $options;
		}

		add_settings_error('wpmc_messages', 'wpmc_message', __('Settings Saved', 'wp-media-cloud'), 'updated');
		return $options;
	}

	public function add_settings_page()
	{
		add_menu_page(
			__('WP Media Cloud', 'wp-media-cloud'),
			__('WP Media Cloud', 'wp-media-cloud'),
			'manage_options',
			'wpmc',
			[$this, 'settings_page_view'],
			'dashicons-cloud-upload',
			100
		);
	}

	public function cloud_provider_field()
	{
		$options = get_option('wpmc_options');
		echo '<select name="wpmc_options[wpmc_cloud_provider]">';
		foreach ($this->cloud_providers as $key => $provider) {
			$disabled = $provider['class'] === null ? 'disabled' : '';
			$selected = selected($options['wpmc_cloud_provider'], $key, false);
			echo '<option value="' . esc_attr($key) . '" ' . esc_attr($selected) . ' ' . esc_attr($disabled) . '>' . esc_html($provider['name']) . '</option>';
		}
		echo '</select>';
	}

	public function cloud_provider_credentials_field()
	{
		$options = get_option('wpmc_options');
		$cloud_provider = $options['wpmc_cloud_provider'] ?? '';
		if (!empty($cloud_provider) && $this->cloud_providers[$cloud_provider]['class'] !== null) {
			$cloud_provider_class = $this->cloud_providers[$cloud_provider]['class'];
			$cloud_provider_instance = new $cloud_provider_class();
			$cloud_provider_instance->credentialsField();
		}
	}

	public function settings_page_view()
	{
		include WPMC_PATH . 'templates/admin/settings.php';
	}

	public function enqueue_scripts()
	{
		wp_enqueue_script('wpmc_settings', WPMC_URL . 'assets/js/wpmc_settings.js', [], WPMC_VERSION, true);
		wp_localize_script('wpmc_settings', 'wpmc_ajax_object', [
			'ajax_url' => admin_url('admin-ajax.php'),
			'nonce' => wp_create_nonce('wpmc_test_connection')
		]);
	}

	public function check_connection_ajax()
	{
		$security_nonce = sanitize_text_field($_POST['security_nonce']) ?? '';
		if (!wp_verify_nonce($security_nonce, 'wpmc_test_connection')) {
			wp_send_json_error(['message' => __('Invalid nonce!', 'wp-media-cloud')]);
		}

		$options = get_option('wpmc_options');
		$cloud_provider = $options['wpmc_cloud_provider'] ?? '';
		if (!empty($cloud_provider) && $this->cloud_providers[$cloud_provider]['class'] !== null) {
			$cloud_provider_class = $this->cloud_providers[$cloud_provider]['class'];
			$cloud_provider_instance = new $cloud_provider_class();
			$result = $cloud_provider_instance->checkConnection();
			if ($result) {
				wp_send_json_success(['message' => __('Connection successful!', 'wp-media-cloud')]);
			} else {
				wp_send_json_error(['message' => __('Connection failed!', 'wp-media-cloud')], 401);
			}
		} else {
			wp_send_json_error(['message' => __('Invalid Cloud Provider!', 'wp-media-cloud')]);
		}
	}
}
