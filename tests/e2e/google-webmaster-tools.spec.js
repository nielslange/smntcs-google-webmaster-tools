/**
 * The verification setting takes the bare code or the whole meta tag from Google Search Console; either way the
 * front end prints one google-site-verification meta tag with the code.
 */
import { test, expect } from '@wordpress/e2e-test-utils-playwright';

const CODE = '#_customize-input-smntcs_google_webmaster_tools_tracking_code';

async function saveCode( page, code ) {
	await page.goto(
		'/wp-admin/customize.php?autofocus[control]=smntcs_google_webmaster_tools_tracking_code'
	);
	await page.locator( CODE ).fill( code );
	const save = page.locator( '#save' );
	if ( await save.isEnabled() ) {
		await save.click();
		await expect( save ).toHaveValue( 'Published' );
	}
}

async function verificationTags( browser ) {
	const context = await browser.newContext( {
		storageState: { cookies: [], origins: [] },
	} );
	const page = await context.newPage();
	await page.goto( '/' );
	const tags = page.locator( 'head > meta[name="google-site-verification"]' );
	const contents = await tags.evaluateAll( ( nodes ) =>
		nodes.map( ( node ) => node.getAttribute( 'content' ) )
	);
	await context.close();
	return contents;
}

test.describe( 'Google Webmaster Tools', () => {
	test.afterAll( async ( { browser } ) => {
		const page = await browser.newPage();
		await saveCode( page, '' );
		await page.close();
	} );

	test( 'adds a Settings link to the Customizer control', async ( {
		page,
	} ) => {
		await page.goto( '/wp-admin/plugins.php' );
		const link = page
			.locator( 'tr[data-slug="smntcs-google-webmaster-tools"]' )
			.getByRole( 'link', { name: 'Settings' } );
		await expect( link ).toHaveAttribute(
			'href',
			/customize\.php\?autofocus(%5B|\[)control(%5D|\])=smntcs_google_webmaster_tools_tracking_code/
		);
	} );

	test( 'prints the meta tag for a bare verification code', async ( {
		page,
		browser,
	} ) => {
		await saveCode( page, 'bare-code-123' );
		expect( await verificationTags( browser ) ).toEqual( [
			'bare-code-123',
		] );
	} );

	test( 'takes the code out of a pasted meta tag', async ( {
		page,
		browser,
	} ) => {
		await saveCode(
			page,
			'<meta name="google-site-verification" content="pasted-code-456" />'
		);
		expect( await verificationTags( browser ) ).toEqual( [
			'pasted-code-456',
		] );
	} );

	test( 'prints nothing without a code', async ( { page, browser } ) => {
		await saveCode( page, '' );
		expect( await verificationTags( browser ) ).toEqual( [] );
	} );
} );
