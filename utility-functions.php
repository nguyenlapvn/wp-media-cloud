<?php
if (!defined('ABSPATH')) {
	die('No direct script access allowed');
}

if (!function_exists('wpmc_include')) {
	function wpmc_include($file)
	{
		if (file_exists(WPMC_PATH . $file)) {
			include_once WPMC_PATH . $file;
		}
	}
}

if (!function_exists('wpmc_get_option')) {
	function wpmc_get_option($option, $default = '')
	{
		$options = get_option('wpmc_options');
		if (is_array($options) && isset($options[$option])) {
			return $options[$option];
		}
		return $default;
	}
}

if (!function_exists('wpmc_update_option')) {
	function wpmc_update_option($option, $value)
	{
		$options = get_option('wpmc_options');
		if (!is_array($options)) {
			$options = [];
		}
		$options[$option] = $value;
		update_option('wpmc_options', $options);
	}
}

if (!function_exists('wpmc_delete_option')) {
	function wpmc_delete_option($option)
	{
		$options = get_option('wpmc_options');
		if (is_array($options) && isset($options[$option])) {
			unset($options[$option]);
		}
		update_option('wpmc_options', $options);
	}
}

if (!function_exists('wpmc_get_option_field')) {
	function wpmc_vd($var, $die = false)
	{
		echo '<pre style="direction: ltr">';
		var_dump($var);
		echo '</pre>';
		if ($die) {
			die();
		}
	}
}
