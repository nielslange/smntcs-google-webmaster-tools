<?php
/**
 * Plugin Name:           SMNTCS Google Webmaster Tools
 * Plugin URI:            https://github.com/nielslange/smntcs-google-webmaster-tools
 * Description:           Adds <a href="https://www.google.com/webmasters/tools/">Google Webmaster Tools</a> to your site.
 * Author:                Niels Lange
 * Author URI:            https://nielslange.de
 * Text Domain:           smntcs-google-webmaster-tools
 * Version:               3.4
 * Requires PHP:          5.6
 * Requires at least:     5.5
 * License:               GPL v2 or later
 * License URI:           https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package SMNTCS_Google_Webmaster_Tools
 */

defined( 'ABSPATH' ) || exit;

/**
 * Class SMNTCS_Google_Webmaster_Tools
 */
class SMNTCS_Google_Webmaster_Tools {

	/**
	 * SMNTCS_Google_Webmaster_Tools constructor.
	 */
	public function __construct() {
		add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), array( $this, 'plugin_settings_link' ) );
		add_action( 'customize_register', array( $this, 'register_customize' ) );
		add_action( 'wp_head', array( $this, 'enqueue' ), 10, 0 );
	}

	/**
	 * Add settings link to plugin list.
	 *
	 * @param array $links Array of plugin action links.
	 * @return array
	 */
	public function plugin_settings_link( $links ) {
		$admin_url     = admin_url( 'customize.php?autofocus[control]=smntcs_google_webmaster_tools_tracking_code' );
		$settings_link = '<a href="' . esc_url( $admin_url ) . '">' . __( 'Settings', 'smntcs-google-webmaster-tools' ) . '</a>';
		array_unshift( $links, $settings_link );

		return $links;
	}

	/**
	 * Register customizer settings.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer instance.
	 * @return void
	 */
	public function register_customize( $wp_customize ) {
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

	/**
	 * Output the tracking code in the head section.
	 *
	 * @return void
	 */
	public function enqueue() {
		$tracking_code = get_option( 'smntcs_google_webmaster_tools_tracking_code' );
		if ( $tracking_code ) {
			echo $tracking_code . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
	}
}

new SMNTCS_Google_Webmaster_Tools();
