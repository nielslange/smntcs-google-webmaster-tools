<?php
/**
 * Plugin Name:           SMNTCS Google Webmaster Tools
 * Plugin URI:            https://github.com/nielslange/smntcs-google-webmaster-tools
 * Description:           Adds <a href="https://www.google.com/webmasters/tools/">Google Webmaster Tools</a> to your site.
 * Author:                Niels Lange
 * Author URI:            https://nielslange.de
 * Text Domain:           smntcs-google-webmaster-tools
 * Version:               3.6
 * Requires PHP:          7.4
 * Requires at least:     5.5
 * License:               GPL v2 or later
 * License URI:           https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package SMNTCS_Google_Webmaster_Tools
 */

declare( strict_types=1 );
defined( 'ABSPATH' ) || exit;

// Define constants.
define( 'SMNTCS_GOOGLE_WEBMASTER_TOOLS_PLUGIN_FILE', __FILE__ );

// Load plugin classes.
require_once plugin_dir_path( SMNTCS_GOOGLE_WEBMASTER_TOOLS_PLUGIN_FILE ) . '/includes/class-smntcs-google-webmaster-tools.php';
