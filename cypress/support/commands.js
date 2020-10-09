// ***********************************************
// This example commands.js shows you how to
// create various custom commands and overwrite
// existing commands.
//
// For more comprehensive examples of custom
// commands please read more here:
// https://on.cypress.io/custom-commands
// ***********************************************

Cypress.Commands.add("login", () => {
	cy.viewport(1200, 2000);
	cy.visit('http://localhost:8888/wp-login.php').wait(500);
	cy.get( '#user_login' ).type( 'admin' );
	cy.get( '#user_pass' ).type( 'password' );
	cy.get( '#wp-submit' ).click();
});

Cypress.Commands.add("checkPluginActivation", () => {
	cy.viewport(1200, 2000);
	cy.visit('http://localhost:8888/wp-admin/plugins.php').wait(500);
	cy.get('tr[data-slug="smntcs-google-webmaster-tools"]').then( ($link) => {
		if ( $link.hasClass('inactive') ) {
			cy.get('tr[data-slug="smntcs-custom-logo-link"] .activate a').click();
		}
	});
});

Cypress.Commands.add("checkPluginSettings", () => {
	cy.viewport(1200, 2000);
	cy.visit( 'http://localhost:8888/wp-admin/customize.php' ).wait(500);
	cy.get( '#accordion-section-smntcs_google_webmaster_tools_section' ).click().wait(500);
	cy.get( '#_customize-input-smntcs_google_webmaster_tools_tracking_code' ).clear();
	cy.get( '#_customize-input-smntcs_google_webmaster_tools_tracking_code' ).type( '<meta name="google-site-verification" content="0123456789" />' );
	cy.get( '#save' ).click();
});

Cypress.Commands.add("checkGoogleSearchConsoleCode", (selector) => {
	cy.viewport(1200, 2000);
	cy.visit('http://localhost:8888/' ).wait(500);
	cy.get( 'meta[name="google-site-verification"]' );
});
