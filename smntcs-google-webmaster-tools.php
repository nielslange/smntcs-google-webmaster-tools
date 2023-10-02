<?php
/**
 * Plugin Name:           SMNTCS Google Webmaster Tools
 * Plugin URI:            https://github.com/nielslange/smntcs-google-webmaster-tools
 * Description:           Adds <a href="https://www.google.com/webmasters/tools/">Google Webmaster Tools</a> to your site
 * Author:                Niels Lange
 * Author URI:            https://nielslange.de
 * Text Domain:           smntcs-google-webmaster-tools
 * Version:               3.2
 * Requires PHP:          5.6
 * Requires at least:     3.4
 * License:               GPL v2 or later
 * License URI:           https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package SMNTCS Google Webmaster Tools
 */

defined( 'ABSPATH' ) || exit;

/**
 * Load textdomain
 *
 * @return void
 */
function smntcs_google_webmaster_tools_load_textdomain() {
	load_plugin_textdomain( 'smntcs-google-webmaster-tools', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'smntcs_google_webmaster_tools_load_textdomain' );

/**
 * Add settings link on plugin page
 *
 * @param array $links The original array with customizer links.
 *
 * @return array The updated array with customizer links.
 */
function smntcs_google_webmaster_tools_settings_link( array $links ) {
	$admin_url     = admin_url( 'customize.php?autofocus[control]=smntcs_google_webmaster_tools_tracking_code' );
	$settings_link = sprintf( '<a href="%s">' . __( 'Settings', 'smntcs-google-webmaster-tools' ) . '</a>', $admin_url );
	array_unshift( $links, $settings_link );

	return $links;
}
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'smntcs_google_webmaster_tools_settings_link' );

/**
 * Add Adobe Typekit Fonts to WordPress Customizer
 *
 * @param WP_Customize_Manager $wp_customize The customizer object.
 *
 * @return void
 */
function smntcs_google_webmaster_tools_register_customize( WP_Customize_Manager $wp_customize ) {
	$wp_customize->add_section(
		'smntcs_google_webmaster_tools_section',
		array(
			'priority' => 150,
			'title'    => __( 'Google Search Console', 'smntcs-google-webmaster-tools' ),
		)
	);

	$wp_customize->add_setting(
		'smntcs_google_webmaster_tools_tracking_code',
		array(
			'type' => 'option',
		)
	);

	$wp_customize->add_control(
		'smntcs_google_webmaster_tools_tracking_code',
		array(
			'label'   => __( 'Verification code', 'smntcs-google-webmaster-tools' ),
			'section' => 'smntcs_google_webmaster_tools_section',

			'type'    => 'textarea',
		)
	);
}
add_action( 'customize_register', 'smntcs_google_webmaster_tools_register_customize' );

/**
 * Add Google Webmaster Tools code to DOM.
 *
 * @return void
 */
function smntcs_google_webmaster_tools_enqueue() {
	if ( get_option( 'smntcs_google_webmaster_tools_tracking_code' ) ) {
		print( get_option( 'smntcs_google_webmaster_tools_tracking_code' ) . "\n" ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
add_action( 'wp_head', 'smntcs_google_webmaster_tools_enqueue' );
