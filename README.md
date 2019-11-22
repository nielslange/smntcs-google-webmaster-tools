# SMNTCS Google Webmaster Tools

[![Support Level](https://img.shields.io/badge/support-active-green.svg)](#support-level)
[![Build Status](https://api.travis-ci.com/nielslange/smntcs-google-webmaster-tools.svg?branch=master)](https://api.travis-ci.com/nielslange/smntcs-google-webmaster-tools)
[![GPLv3 License](https://img.shields.io/github/license/nielslange/smntcs-google-webmaster-tools.svg)](https://www.gnu.org/licenses/gpl.html)
[![Compatible to WordPress version](https://plugintests.com/plugins/smntcs-google-webmaster-tools/wp-badge.svg)](https://plugintests.com/plugins/smntcs-google-webmaster-tools/latest)
[![Compatible to PHP version](https://plugintests.com/plugins/smntcs-google-webmaster-tools/php-badge.svg)](https://plugintests.com/plugins/smntcs-google-webmaster-tools/latest)
[![Downloads](https://img.shields.io/wordpress/plugin/dt/smntcs-google-webmaster-tools.svg)](https://wordpress.org/plugins/smntcs-google-webmaster-tools/)
[![Plugin Version](https://img.shields.io/wordpress/plugin/v/smntcs-google-webmaster-tools.svg)](https://wordpress.org/plugins/smntcs-google-webmaster-tools/)
[![Tag Version](https://img.shields.io/github/tag/nielslange/smntcs-google-webmaster-tools.svg)](https://wordpress.org/plugins/smntcs-google-webmaster-tools/)

Adds the verification code of Google Search Console, former Google Webmaster Tools, to your site.

## Installation

1. Upload `smntcs-google-webmaster-tools` to the `/wp-content/plugins/` directory
2. Activate the plugin through the _Plugins_ menu in WordPress
3. Go to https://search.google.com/search-console/welcome
4. Provide your URL in the section `URL prefix`, e.g. https://example.com, and click on `Continue`
5. Now, open the section `HTML tag` within the section `Other verification methods`
6. Copy the meta tag, e.g. `<meta name="google-site-verification" content="BeFze6w_rrIm1NFPKJ-pDDbkf0oeqrtC5sjqb6WzCoE" />`
7. Go to [Google Webmaster Tools](/wp-admin/customize.php?autofocus[control]=smntcs_google_webmaster_tools_tracking_code) and paste your verification code

## Plugin page

You can find the plugin on https://wordpress.org/plugins/smntcs-google-webmaster-tools/.

## Changelog

### 2.4
* Test up to 5.3

### 2.3
* Update installation instructions

### 2.2
* Add README.md

### 2.1
* Add FAQ

### 2.0
* Use Customizer instead of options page

### 1.6
* Add donation link

### 1.5
* Update textdomain

### 1.4
* Add settings link
* Update Dutch translation
* Update German translation

### 1.3
* Store translations outside plugin

### 1.2
* Make plugin translation ready
* Add Dutch translation
* Add German translation

### 1.1
* Fix broken file path
* Add FAQs

### 1.0
* Initial release
