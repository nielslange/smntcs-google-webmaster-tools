<?php
/*
Plugin Name: SMNTCS Google Webmaster Tools
Description: Adds <a href="https://www.google.com/webmasters/tools/">Google Webmaster Tools</a> to your site
Version: 1.5.0
Author: Niels Lange
Author URI: http://www.nielslange.de
Text Domain: smntcs-google-webmaster-tools
Domain Path: /languages/plugins/smntcs-google-webmaster-tools 
*/

/*  Copyright 2014-2016	Niels Lange (email : info@nielslange.de)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Define WP_CONTENT_URL
if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl') . '/wp-content');

// Define WP_CONTENT_DIR
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH . 'wp-content');

// Define WP_PLUGIN_URL
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins');

// Define WP_PLUGIN_DIR
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins');

// Activate plugin
register_activation_hook(__FILE__, 'activate_google_webmaster_tools');
function activate_google_webmaster_tools() {
	add_option('google_webmaster_tools_code', '');
}

// Deactivate plugin
register_deactivation_hook(__FILE__, 'deactive_google_webmaster_tools');
function deactive_google_webmaster_tools() {
	delete_option('google_webmaster_tools_code');
}

// Initialize plugin
function admin_init_google_webmaster_tools() {
	register_setting('google_webmaster_tools', 'google_webmaster_tools_code');
}

// Add menu item in backend
function admin_menu_google_webmaster_tools() {
	add_options_page('Webmaster Tools', 'Webmaster Tools', 'manage_options', 'google-webmaster-tools', 'options_page_google_webmaster_tools');
}

// Add options page in backend
function options_page_google_webmaster_tools() {
	include(WP_PLUGIN_DIR.'/smntcs-google-webmaster-tools/options.php');
}

// Run main function
function google_webmaster_tools() {
    printf('<meta name="google-site-verification" content="%s" />', get_option('google_webmaster_tools_code'));
}

// Initialize show plugin in backend
if (is_admin()) {
	add_action('admin_init', 'admin_init_google_webmaster_tools');
	add_action('admin_menu', 'admin_menu_google_webmaster_tools');
}

// Show site verification code in frontend
if (!is_admin()) {
	add_action('wp_head', 'google_webmaster_tools');
}

// Load translation(s)
add_action('plugins_loaded', 'smntcs_load_textdomain');
function smntcs_load_textdomain() {
	load_plugin_textdomain( 'smntcs-google-webmaster-tools', false, false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}

// Add settings link on plugin page
$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'smntcs_plugin_settings_link' );
function smntcs_plugin_settings_link($links) {
	$settings_link = '<a href="options-general.php?page=google-webmaster-tools">Settings</a>';
	array_unshift($links, $settings_link);
	return $links;
}
