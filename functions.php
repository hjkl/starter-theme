<?php

// Check Timber is enabled
if (!class_exists('Timber\Timber')) {
	add_action('admin_notices', function () {
		echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url(admin_url('plugins.php#timber')) . '">' . esc_url(admin_url('plugins.php')) . '</a></p></div>';
	});

	add_filter('template_include', function ($template) {
		throw new Exception('Timber not enabled');
	});

	return;
}

require 'Site.php';

Timber\Timber::$dirname = array('templates', 'views');
Timber\Timber::$autoescape = false;

new Site();
