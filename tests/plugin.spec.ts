const { test, expect } = require( '@playwright/test' );

test.describe( 'Admin', () => {
	// Use Date.now() for unique microtime
	let microtime = ( Date.now() % 1000 ) / 1000;

	test.beforeEach( async ( { page } ) => {
		// Login to the admin panel
		await page.goto( 'http://localhost:8888/wp-login.php' );
		await page.fill( '#user_login', 'admin' );
		await page.fill( '#user_pass', 'password' );
		await page.click( '#wp-submit' );
		await expect( page.locator( 'body' ) ).toContainText( 'Dashboard' );
	} );

	test( 'can activate plugin, update settings, and verify meta tag', async ( {
		page,
	} ) => {
		// Activate the plugin if inactive
		await page.goto( 'http://localhost:8888/wp-admin/plugins.php' );
		const pluginRow = page.locator(
			'tr[data-slug="smntcs-google-webmaster-tools"]'
		);
		const isInactive = await pluginRow.getAttribute( 'class' );
		if ( isInactive.includes( 'inactive' ) ) {
			await page.click(
				'tr[data-slug="smntcs-custom-logo-link"] .activate a'
			);
		}

		// Update the plugin settings
		await page.goto( 'http://localhost:8888/wp-admin/customize.php' );
		await page.click(
			'#accordion-section-smntcs_google_webmaster_tools_section'
		);
		await page.fill(
			'#_customize-input-smntcs_google_webmaster_tools_tracking_code',
			`<meta name="google-site-verification" content="${ microtime }" />`
		);
		await page.click( '#save' );

		// Verify the updated meta tag on the front-end
		await page.goto( 'http://localhost:8888/' );
		await page.reload();
		const metaTag = page.locator(
			`head > meta[name="google-site-verification"]`
		);
		await expect( metaTag ).toHaveAttribute(
			'content',
			microtime.toString()
		);
	} );
} );
