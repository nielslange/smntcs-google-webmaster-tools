=== SMNTCS Google Webmaster Tools ===
Contributors: nielslange
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=FQTBXW5CCFWTY
Tags: Google Webmaster Tools, Google Search Console  
Requires at least: 4.0
Tested up to: 4.5.3
Stable tag: 1.5.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enables you to integrate Google Webmaster Tools in your site.

== Description ==

Google Webmaster Tools enables you to add the site verification code to your WordPress site, so that you're able to detect any occuring issues via https://www.google.com/webmasters/tools/.  

== Installation ==

1. Upload 'smntcs_google_webmaster_tools' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to https://www.google.com/webmasters/tools/, add a new site and copy the site verification code of the meta tag
3. Click on the new menu item "Settings" » "Webmaster Tools" and enter your site verification code 

== Frequently Asked Questions ==

= Why do I need Google Webmaster Tools in first place? =

Google Webmaster Tools enables webmasters to detect indexing issues, e.g. if the Google Bot cannot access the page or if missing pages occur in the search index.

= How do I add Google Webmaster Tools to my page? =

1. Go to Google Webmaster Tools (https://www.google.com/webmasters/tools/)
2. Log in with your Google account (or create one if you don't have one yet)
3. Click on 'Add property', fill in your URL and click on continue
4. Choose 'Alternative methods', select 'HTML Tag', click on 'Show me an example' and copy the content, e.g. '0Hrzzl6cWlRFHRwnPpmVqChFxZP0W1Whrbu373q5xTu'
5. Go to the backend of your website, navigate to 'Settings' » 'Webmaster Tools' and paste the content you've copied before 

== Screenshots ==

1. Upload and activate the plugin
2. Provide site verification code

== Changelog ==

= 1.5.0 =
* Add donation link

= 1.4.0 =
* Update textdomain

= 1.3.0 =
* Add settings link
* Update Dutch translation
* Update German translation 

= 1.2.0 =
* Store translations outside plugin 

= 1.1.0 =
* Make plugin translation ready
* Add Dutch translation
* Add German translation

= 1.0.1 =
* Fix broken file path
* Add FAQs

= 1.0.0 =
* Initial release