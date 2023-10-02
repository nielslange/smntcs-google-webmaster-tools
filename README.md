# SMNTCS Google Webmaster Tools

![Support Level](https://img.shields.io/badge/support-active-green.svg)
![Build Status](https://github.com/nielslange/smntcs-google-webmaster-tools/actions/workflows/test.yml/badge.svg)
![Deploy Status](https://github.com/nielslange/smntcs-google-webmaster-tools/actions/workflows/deploy.yml/badge.svg)
![GPLv3 License](https://img.shields.io/github/license/nielslange/smntcs-google-webmaster-tools.svg)
![Compatible to WordPress version](https://plugintests.com/plugins/smntcs-google-webmaster-tools/wp-badge.svg)
![Compatible to PHP version](https://plugintests.com/plugins/smntcs-google-webmaster-tools/php-badge.svg)
![Downloads](https://img.shields.io/wordpress/plugin/dt/smntcs-google-webmaster-tools.svg)
![Plugin Version](https://img.shields.io/wordpress/plugin/v/smntcs-google-webmaster-tools.svg)
![Tag Version](https://img.shields.io/github/tag/nielslange/smntcs-google-webmaster-tools.svg)

Adds the verification code of Google Search Console, former Google Webmaster Tools, to your site.

## Installation

1. Upload `smntcs-google-webmaster-tools` to the `/wp-content/plugins/` directory
2. Activate the plugin through the _Plugins_ menu in WordPress
3. Go to <https://search.google.com/search-console/welcome>
4. Provide your URL in the section `URL prefix`, e.g. <https://example.com>, and click on `Continue`
5. Now, open the section `HTML tag` within the section `Other verification methods`
6. Copy the meta tag, e.g. `<meta name="google-site-verification" content="BeFze6w_rrIm1NFPKJ-pDDbkf0oeqrtC5sjqb6WzCoE" />`
7. Go to [Google Webmaster Tools](/wp-admin/customize.php?autofocus[control]=smntcs_google_webmaster_tools_tracking_code) and paste your verification code

## Plugin page

You can find the plugin on <https://wordpress.org/plugins/smntcs-google-webmaster-tools/>.

## Changelog

### 3.2 (2023.10.02)

- Test up to 6.4

### 3.1 (2023.03.11)

- Test up to 6.2

### 3.0 (2022.12.03)

- Test up to 6.1

### 2.9 (2022.05.09)

- Test up to 6.0

### 2.8 (2021.12.19)

- [Replace Travis CI with GitHub Actions](https://github.com/nielslange/smntcs-google-webmaster-tools/issues/62)
- Test up to 5.8

### 2.7 (2021.04.25)

- Test up to 5.7

### 2.6 (2020.10.09)

- Test up to 5.5

### 2.5 (2020.05.02)

- [Add testing](https://github.com/nielslange/smntcs-google-webmaster-tools/issues/3)
- Test up to 5.4

### 2.4 (2019.11.22)

- Test up to 5.3

### 2.3 (2019.06.28)

- Update installation instructions

### 2.2 (2018.03.18)

- Add README.md

### 2.1 (2016.12.24)

- Add FAQ

### 2.0 (2016.09.11)

- Use Customizer instead of options page

### 1.6 (2016.07.20)

- Add donation link

### 1.5 (2016.07.20)

- Update textdomain

### 1.4 (2016.07.20)

- Add settings link
- Update Dutch translation
- Update German translation

### 1.3 (2016.07.20)

- Store translations outside plugin

### 1.2 (2016.07.20)

- Make plugin translation ready
- Add Dutch translation
- Add German translation

### 1.1 (2016.07.20)

- Fix broken file path
- Add FAQs

### 1.0 (2016.07.20)

- Initial release
