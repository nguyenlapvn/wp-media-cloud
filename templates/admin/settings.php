<?php
/*
** A settings page to configure the plugin.
**  It should ask to select a cloud storage provider and provide the necessary credentials.
*/

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

// check user capabilities
if (!current_user_can('manage_options')) {
	return;
}

// show error/update messages
settings_errors('wpmc_messages');

$options = get_option('wpmc_options');
?>
<div class="wrap">
	<h1><?php esc_attr_e('WP Media Cloud', 'wp-media-cloud'); ?></h1>
	<p><?php esc_attr_e('This plugin allows you to offload your media files to a cloud storage provider.', 'wp-media-cloud'); ?></p>
	<form method="post" action="options.php">
		<?php settings_fields('wpmc'); ?>
		<?php do_settings_sections('wpmc'); ?>
		<?php submit_button(); ?>
	</form>
</div>
