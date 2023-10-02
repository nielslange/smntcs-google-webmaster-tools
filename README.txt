=== SMNTCS Google Webmaster Tools ===

Contributors:       nielslange
Tags:               Google Webmaster Tools, Google Search Console
Stable tag:         3.2
Tested up to:       6.4
Requires PHP:       5.6
Requires at least:	3.4
License:            GPL v2 or later
License URI:        https://www.gnu.org/licenses/gpl-2.0.html

Adds the verification code of Google Search Console, former Google Webmaster Tools, to your site.

== Description ==

> <strong>Google Search Console</strong><br>
Google Search Console, former Google Webmaster Tools, does a great job when it comes to check the indexing status of your site.

= SMNTCS Google Webmaster Tools =

SMNTCS Google Webmaster Tools enables you to add Google Search Console to your website.

== Installation ==

1. Upload `smntcs-google-webmaster-tools` to the `/wp-content/plugins/` directory
2. Activate the plugin through the _Plugins_ menu in WordPress
3. Go to https://search.google.com/search-console/welcome
4. Provide your URL in the section `URL prefix`, e.g. https://example.com, and click on `Continue`
5. Now, open the section `HTML tag` within the section `Other verification methods`
6. Copy the meta tag, e.g. `<meta name="google-site-verification" content="BeFze6w_rrIm1NFPKJ-pDDbkf0oeqrtC5sjqb6WzCoE" />`
7. Go to [Google Webmaster Tools](/wp-admin/customize.php?autofocus[control]=smntcs_google_webmaster_tools_tracking_code) and paste your verification code

== Frequently Asked Questions ==

= Why do I need Google Webmaster Tools in first place? =

Google Webmaster Tools enables web masters to detect indexing issues, e.g. if the Google Bot cannot access the page or if missing pages occur in the search index.

= How do I add Google Webmaster Tools to my page? =

1. Go to https://search.google.com/search-console/welcome
2. Provide your URL in the section _URL prefix_, e.g. https://example.com, and click on _Continue_
3. Now, open the section _HTML tag_ within the section _Other verification methods_
4. Copy the meta tag, e.g. `<meta name="google-site-verification" content="BeFze6w_rrIm1NFPKJ-pDDbkf0oeqrtC5sjqb6WzCoE" />`
5. Go to [Google Webmaster Tools](/wp-admin/customize.php?autofocus[control]=smntcs_google_webmaster_tools_tracking_code) and paste your verification code

= Why am I not able to save the verification code? =

This issue might be caused by a security plugin. If you use a security plugin, e.g. Wordfence, then disable it so save your verification code and activate it once you’re done.

== Screenshots ==

1. Provide your URL in the section _URL prefix_
2. Copy the meta tag from  the section _HTML tag_
3. Paste you Google Analytics tracking code in the customizer

== Changelog ==

= 3.2 (2023.10.02) =

-   Test up to 6.4

= 3.1 (2023.03.11) =

-   Test up to 6.2

= 3.0 (2022.12.03) =

-   Test up to 6.1

= 2.9 (2022.05.09) =

-   Test up to 6.0

= 2.8 (2021.12.19) =

-   [Replace Travis CI with GitHub Actions](https://github.com/nielslange/smntcs-google-webmaster-tools/issues/62)
-   Test up to 5.8

= 2.7 (2021.04.25) =

-   Test up to 5.7

= 2.6 (2020.10.09) =

-   Test up to 5.5

= 2.5 (2020.05.02) =

-   [Add testing](https://github.com/nielslange/smntcs-google-webmaster-tools/issues/3)
-   Test up to 5.4

= 2.4 (2019.11.22) =

-   Test up to 5.3

= 2.3 (2019.06.28) =

-   Update installation instructions

= 2.2 (2018.03.18) =

-   Add README.md

= 2.1 (2016.12.24) =

-   Add FAQ

= 2.0 (2016.09.11) =

-   Use Customizer instead of options page

= 1.6 (2016.07.20) =

-   Add donation link

= 1.5 (2016.07.20) =

-   Update textdomain

= 1.4 (2016.07.20) =

-   Add settings link
-   Update Dutch translation
-   Update German translation

= 1.3 (2016.07.20) =

-   Store translations outside plugin

= 1.2 (2016.07.20) =

-   Make plugin translation ready
-   Add Dutch translation
-   Add German translation

= 1.1 (2016.07.20) =

-   Fix broken file path
-   Add FAQs

= 1.0 (2016.07.20) =

-   Initial release
