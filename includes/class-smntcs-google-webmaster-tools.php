<?php
/**
 * Main plugin class
 *
 * @package SMNTCS_Google_Webmaster_Tools
 */

declare( strict_types=1 );
defined( 'ABSPATH' ) || exit;

/**
 * Class SMNTCS_Google_Webmaster_Tools
 */
class SMNTCS_Google_Webmaster_Tools {

	/**
	 * SMNTCS_Google_Webmaster_Tools constructor.
	 */
	public function __construct() {
		add_filter( 'plugin_action_links_' . plugin_basename( SMNTCS_GOOGLE_WEBMASTER_TOOLS_PLUGIN_FILE ), [ $this, 'plugin_settings_link' ] );
		add_action( 'customize_register', [ $this, 'register_customize' ] );
		add_action( 'wp_head', [ $this, 'enqueue' ], 10, 0 );
	}

	/**
	 * Add settings link to plugin list.
	 *
	 * @param array $links Array of plugin action links.
	 * @return array
	 */
	public function plugin_settings_link( array $links ): array {
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
	public function register_customize( WP_Customize_Manager $wp_customize ): void {
		$wp_customize->add_section(
			'smntcs_google_webmaster_tools_section',
			[
				'priority' => 150,
				'title'    => __( 'Google Search Console', 'smntcs-google-webmaster-tools' ),
			]
		);

		$wp_customize->add_setting(
			'smntcs_google_webmaster_tools_tracking_code',
			[
				'type' => 'option',
			]
		);

		$wp_customize->add_control(
			'smntcs_google_webmaster_tools_tracking_code',
			[
				'label'   => __( 'Verification code', 'smntcs-google-webmaster-tools' ),
				'section' => 'smntcs_google_webmaster_tools_section',
				'type'    => 'textarea',
			]
		);
	}

	/**
	 * Output the tracking code in the head section.
	 *
	 * @return void
	 */
	public function enqueue(): void {
		$tracking_code = get_option( 'smntcs_google_webmaster_tools_tracking_code' );
		if ( $tracking_code ) {
			if ( preg_match( '/<meta[^>]+content=["\']([^"\']+)["\'][^>]*>/', $tracking_code, $matches ) ) {
				$verification_code = $matches[1];
				echo '<meta name="google-site-verification" content="' . esc_attr( $verification_code ) . '" />' . "\n";
			} else {
				echo '<meta name="google-site-verification" content="' . esc_attr( $tracking_code ) . '" />' . "\n";
			}
		}
	}
}

// Initialise the plugin.
new SMNTCS_Google_Webmaster_Tools();
