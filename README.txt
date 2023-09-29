iPress CT - WordPress Theme Framework 
=======================================

=== iPress Child Theme ===
Contributors: tifosi
Requires at least: 5.3
Tested up to: 6.2
Requires PHP: 8.1
Requires WC: 7.0
Stable tag: 2.8.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

iPressCT is a Child Theme based on the iPress Rapid Development Theme Framework for WordPress.
This utilises the iPressPT parent theme.

It contains a basic but functional CSS structure which is based on the normalise.css global reset and a selection of element and component styles and using SCSS. This can be readily replaced, all or in part, by structured framework such as Bootstrap or Tailwind.

== Installation ==

1. Upload the iPressPT Parent Theme folder via FTP to your wp-content/themes/ directory.
2. Upload the iPress Child Theme folder via FTP to your wp-content/themes/ directory.
3. Go to your WordPress dashboard and select Appearance > Themes.
4. Select and activate the iPress Child Theme.

To change the theme name and/or create a unique identifier for development purposes modify settings in the bootstrap.php includes file.

IPRESS_CHILD_THEME_NAME': default 'iPress Child'
IPRESS_CHILD_TEXT_DOMAIN': default 'ipress-child'
IPRESS_CHILD_THEME_NAMESPACE': default 'ipress-child'

The theme is translation ready. Default language files can be found in the /languages directory. Currently it's not possible to change the textdomain identifier to a global variable or PHP define.

The default 'ipress-child' textdomain identifier is present in many of the theme .php files particularly in the template files and includes directory files.

With some editors it's possible to globally modify these. To manually edit them use your favourite code editor and search & replace the 'ipress-child' values.

For a granular search and replace option each of the textdomain references are placed in the dedicated translation function wrappers:

__() _e() _x() _nx()

== User Manual ==

I'll be updating this asap with details of available filters.

== Widget Areas ==

Primary Sidebar - This is the main sidebar used in sidebars of 2 column pages and footer of some single column pages.

== Support ==

Please visit the github page: https://github.com/ontiuk.

== Other Stuff ==

iPress consists of 3 primary themes:
iPressPT - iPress Parent Theme. Designed to work with an iPressCT child theme.
iPressCT - iPress Child Theme. Requires iPressPT. Child themes can be configured and styled as required.
iPressST - iPress Standalone Theme. Integrates iPressPT & iPressCT. Used for standalone theme development.

In Progress
iPressRX - iPress React Theme Framework. Custom theme for use with the React Framework with particular reference to the WP REST API.
iPress Extensions - Additional modular framework functionality 

== Copyright ==

iPress WordPress Child Theme is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Structure: Folders & Files ==

/
|-404.php
|-archive.php
|-attachment.php
|-author.php
|-category.php
|-CHANGELOG.md
|-comments.php
|-date.php
|-footer.php
|-front-page.php
|-functions.php
|-header.php
|-home.php
|-index.php
|-page.php
|-privacy-policy.php
|-README.md
|-screenshot.jpg
|-search.php
|-searchform.php
|-sidebar.php
|-sidebar-header.php
|-sidebar-shop.php
|-sidebar-shop-category.php
|-sidebar-shop-product.php
|-single.php
|-style.css
|-style.min.css
|-tag.php
|-taxonomy.php
|-template-account.php
|-template-cart.php
|-template-checkout.php
|-template-home.php
|-/assets
| 	|-/css
|		|-editor.css & various sample css files
|		|-/woocommerce
|			|-woocommerce.css
|			|-woocommerce.min.css
|			|-/extensions
|			|-/scss
| 				|-various subfolders and woocommerce.scss
| 	|-/fonts
| 	|-/images
| 		|-various subfolders and example images
| 	|-/js
|		|-admin.js
|		|-admin.min.js
|		|-app.js
|		|-app.minjs
|		|-customize.js
|		|-customize-controls.js
|		|-customize-preview.js
|		|-navigation.js
|		|-navigation.min.js
| 		|-/lib
| 	|-/scss
| 		|-various subfolders and style.scss
|-/inc
|	|-blocks.php
|	|-bootstrap.php
| 	|-config.php
| 	|-functions.php
| 	|-template-functions.php
| 	|-template-hooks.php
| 	|-/admin
| 	|-/blocks
| 	|-/classes
| 		|-class-ipr-acf.php
| 		|-class-ipr-admin.php
| 		|-class-ipr-ajax.php
| 		|-class-ipr-api.php
| 		|-class-ipr-attr.php
| 		|-class-ipr-blocks.php
| 		|-class-ipr-cron.php
| 		|-class-ipr-css.php
| 		|-class-ipr-hero.php
| 		|-class-ipr-hooks.php
| 		|-class-ipr-kirki.php
| 		|-class-ipr-query.php
| 		|-class-ipr-redirect.php
| 		|-class-ipr-registry.php
| 		|-class-ipr-rest.php
| 		|-class-ipr-rules.php
| 		|-class-ipr-settings.php
| 		|-class-ipr-startup.php
| 		|-class-ipr-template.php
| 		|-class-ipr-user.php
| 	|-/functions
|		|-acf.php
|		|-kirki.php
|		|-settings.php
|		|-template.php
| 	|-/lib
|		|-acf-config.php
|		|-/acf
| 	|-/widgets
| 	|-/woocommerce
|		|-class-ipr-woocommerce.php
|		|-class-ipr-woocommerce-adjacent-products.php
|		|-class-ipr-woocommerce-api.php
|		|-class-ipr-woocommerce-customizer.php
|		|-functions.php
|		|-template-functions.php
|		|-template-hooks.php
|-/languages
| 		|-various language based .po/.mo files
|-/templates
| 	|-account.php
| 	|-archive.php
| 	|-attachment.php
| 	|-cart.php
| 	|-checkout.php
| 	|-content.php
| 	|-content-home.php
| 	|-content-page.php
| 	|-content-privacy.php
| 	|-content-search.php
| 	|-content-single.php
| 	|-home.php
| 	|-index.php
| 	|-search.php
| 	|-/block
| 	|-/front
| 		|-edit-link.php
| 		|-hero.php
| 		|-hero_2.php
| 	|-/global
| 		|-404.php
| 		|-404-product.php
| 		|-back-to-top.php
| 		|-content.php
| 		|-content-none.php
| 		|-loader.php
| 		|-page-header-image.php
| 		|-post-image.php
| 		|-post-thumbnail.php
| 		|-skip-links.php
| 		|-/breadcrumbs
| 			|-archive.php
| 			|-archive-cpt.php (dummy CPT file)
| 			|-author.php
| 			|-category.php
| 			|-date.php
| 			|-home.php
| 			|-page.php
| 			|-search.php
| 			|-single.php
| 			|-tag.php
| 			|-taxonomy.php
| 		|-/footer
| 			|-container.php
| 			|-container-close.php
| 			|-footer-widgets.php
| 			|-site-credits.php
| 		|-/header
| 			|-container.php
| 			|-container-close.php
| 			|-site-branding.php
| 			|-site-branding-container.php
| 			|-site-branding-container-close.php
| 			|-site-logo.php
| 			|-site-navigation.php
| 			|-site-navigation-search.php
| 	|-/layout
| 		|-top-bar.php
| 	|-/loop
| 		|-content.php
| 		|-excerpt.php
| 		|-footer.php
| 		|-header.php
| 		|-meta.php
| 		|-sticky.php
| 		|-thumbnail.php
| 	|-/page
| 		|-attachment.php
| 		|-content.php
| 		|-edit-link.php
| 		|-footer.php
| 		|-header.php
| 		|-header-image.php
| 		|-image.php
| 	|-/single
| 		|-content.php
| 		|-edit-link.php
| 		|-footer.php
| 		|-header.php
| 		|-image.php
| 		|-meta.php
| 		|-taxonomy.php
| 	|-/widget
|-/woocommerce
| 	|-header-cart.php
| 	|-header-cart-content.php
| 	|-header-cart-link.php
| 	|-product-search.php
| 	|-single-product.php
| 	|-/admin
| 	|-/auth
| 	|-/cart
| 		|-container-start.php
| 		|-container-end.php
| 		|-header.php
| 	|-/checkout
| 		|-container-start.php
| 		|-container-end.php
| 		|-header.php
| 	|-/emails
| 		|-/plain
| 	|-/global
| 		|-breadcrumb.php
| 		|-container-start.php
| 		|-container-end.php
| 		|-product-container-start.php
| 		|-product-container-end.php
| 		|-quantity-input.php
| 		|-result-container-start.php
| 		|-result-container-end.php
| 		|-wrapper-start.php
| 		|-wrapper-end.php
| 		|-/breadcrumbs
| 			|-account.php
| 			|-cart.php
| 			|-checkout.php
| 			|-default.php
| 			|-product-archive.php
| 			|-product-cat.php
| 			|-product-tag.php
| 			|-single-product.php
| 	|-/loop
| 	|-/myaccount
| 		|-container-start.php
| 		|-container-end.php
| 		|-header.php
| 		|-navigation-container-start.php
| 		|-navigation-container-end.php
| 		|-profile.php
| 	|-/notices
| 	|-/order
| 	|-/reports
| 	|-/single-product
| 		|-pagination.php
| 		|-/add-to-cart
| 		|-/tabs

== Structure: Files & Templates ==

/
|- 404.php
|	|- templates/global/404.php (alternate: 404-product.php)
|- archive.php ( / author.php / date.php / category.php / tag.php / taxonomy.php )
|	|- templates/archive.php
|		|- templates/content.php 
|			|- templates/loop/header.php
|			|- templates/loop/thumbnail.php
|			|- templates/loop/meta.php
|			|- templates/loop/content.php
|			|- templates/loop/excerpt.php
|			|- templates/loop/footer.php
|	|- templates/global/content-none.php
|- attachment.php
|	|- templates/attachment.php
|			|- templates/page/attachment.php
|			|- templates/page/content.php
|	|- templates/global/content-none.php
|- comments.php
|- footer.php
|	|- templates/global/footer/site-credit.php
|	|- templates/global/footer/footer-widgets.php
|- front-page.php
|	|- templates/global/content-home.php
|		|- templates/front/hero.php (optional hero_2.php)
|		|- templates/front-edit-link.php
|- functions.php
|- header.php
|	|- templates/global/header/site-branding.php
|	|- templates/global/site-navigation.php
|- header.php
|	|- templates/global/header/site-branding.php
|	|- templates/global/header/site-navigation.php
|- home.php
|	|- templates/home.php
|		|- templates/content.php
|			|- templates/loop/header.php
|			|- templates/loop/thumbnail.php
|			|- templates/loop/meta.php
|			|- templates/loop/content.php
|			|- templates/loop/excerpt.php
|			|- templates/loop/footer.php
|	|- templates/global/content-none.php
|- index.php
|	|- templates/index.php
|		|- templates/content.php
|			|- templates/loop/header.php
|			|- templates/loop/thumbnail.php
|			|- templates/loop/meta.php
|			|- templates/loop/content.php
|			|- templates/loop/excerpt.php
|			|- templates/loop/footer.php
|			|- templates/loop/sticky.php
|	|- templates/global/content-none.php
|- page.php
|	|- templates/content-page.php
|		|- templates/page/header.php
|		|- templates/page/header-image.php
|		|- templates/page/image.php
|		|- templates/loop/attachment.php
|		|- templates/loop/edit-link.php
|		|- templates/loop/content.php
|		|- templates/loop/footer.php
|	|- templates/global/content-none.php
|- privacy-policy.php
|	|- templates/content-privacy.php
|- search.php
|	|- templates/search.php
|		|- templates/content-search.php
|			|- templates/loop/header.php
|			|- templates/loop/thumbnail.php
|			|- templates/loop/meta.php
|			|- templates/loop/excerpt.php
|			|- templates/loop/footer.php
|			|- templates/loop/sticky.php
|	|- templates/global/content-none.php
|- single.php
|	|- templates/single.php
|		|- templates/content-single.php
|			|- templates/single/header.php
|			|- templates/single/image.php
|			|- templates/single/meta.php
|			|- templates/single/taxonomy.php
|			|- templates/single/footer.php
|			|- templates/single/edit-link.php
|			|- templates/single/content.php
|	|- templates/global/content-none.php
|- template-account.php
|	|- templates/account.php
|- template-cart.php
|	|- templates/cart.php
|- template-checkout.php
|	|- templates/checkout.php
|- template-home.php
|	|- templates/home.php

== Hooks & Classes ==

404.php
actions: 
	ipress_before_main_content
		ipress_before_404 
			ipress_before_404_content 
			(ipress_404_product)
			ipress_404 
			ipress_after_404_content 
		ipress_after_404 
	ipress_after_main_content	
main class: error-page

archive.php ( author.php / date.php / category.php / tag.php / taxonomy.php )
actions: 
	ipress_before_main_content
	ipress_before_archive
	ipress_before_archive_title
	ipress_after_archive_title
		ipress_before_loop
			ipress_before_article
			ipress_loop
				ipress_before_loop_header
				ipress_after_loop_header
				ipress_before_loop_content
				ipress_loop_content
				ipress_after_loop_content
				ipress_before_loop_footer
				ipress_loop_footer
				ipress_after_loop_footer
			ipress_after_article
		ipress_after_loop
	ipress_after_archive
	ipress_sidebar
	ipress_after_main_content	
main class: archive-page ( author-page, data-page, category-page, tag-page, taconomy-page )

attachment.php
actions: 
	ipress_before_main_content
	ipress_before_page
		ipress_before_attachment
		ipress_attachment
		ipress_after_attachment
	ipress_after_page
	ipress_after_main_content	
main class: attachment-page

comments.php
actions:
	ipress_before_comments
	ipress_before_comment_form
	ipress_after_comments

header.php ( included & called before all other templates via get_header() )
actions:
	wp_body_open ( via wp_body_open() ) 
	ipress_before_site
	ipress_before_header
	ipress_before_header_content
	ipress_header
	ipress_after_header_content
	ipress_before_content

footer.php ( included and called after all other templates via get_footer() )
actions:
	ipress_before_footer
	ipress_before_footer_content
	ipress_footer
	ipress_after_footer_content
	ipress_after_footer
	ipress_after

front-page.php
actions:
	ipress_before_main_content
	ipress_before_homepage
		ipress_before_homepage_header
		ipress_before_homepage_content
		ipress_after_homepage_content
		ipress_after_homepage_footer
	ipress_after_homepage
	ipress_homepage
	ipress_after_main_content	
main class: front-page

home.php
actions:
	ipress_before_main_content
	ipress_before_archive
		ipress_before_loop (home) 
			ipress_before_article
			ipress_loop, ipress_loop_xxx ( allowed post-formats )
				ipress_before_loop_header
					ipress_loop_header
					ipress_after_loop_header_title
				ipress_after_loop_header
				ipress_before_loop_content
				ipress_loop_content
				ipress_after_loop_content
				ipress_before_loop_footer
					ipress_before_loop_footer_content
				ipress_loop_footer
				ipress_after_loop_footer
			ipress_after_article
		ipress_after_loop (home)
	ipress_after_archive
	ipress_after_main_content	
	ipress_sidebar
main class: home-page

index.php
actions:
	ipress_before_main_content
	ipress_before_archive
	ipress_before_archive_title
	ipress_after_archive_title
		ipress_before_loop (index) 
			ipress_before_article (index)
			ipress_loop, ipress_loop_xxx ( allowed post-formats )
				ipress_before_loop_header
					ipress_loop_header
					ipress_after_loop_header_title
				ipress_after_loop_header
				ipress_before_loop_content
				ipress_loop_content
				ipress_after_loop_content
				ipress_before_loop_footer
					ipress_before_loop_footer_content
				ipress_loop_footer
				ipress_after_loop_footer
			ipress_after_article
		ipress_after_loop (index)
	ipress_archive_after
	ipress_sidebar
	ipress_after_main_content	
main class: index-page

page.php
actions:
	ipress_before_main_content
	ipress_before_page
		ipress_before_article (page)
			ipress_page
			ipress_before_page_header
			ipress_page_header
			ipress_after_page_header_title
			ipress_before_page_content
			ipress_page_content
			ipress_after_page_content
		ipress_after_article
	ipress_after_page
	ipress_sidebar
	ipress_after_main_content	
main class: content-page

privacy-policy.php
actions:
	ipress_before_main_content
	ipress_before_page
		ipress_before_privacy
			ipress_privacy
			ipress_before_page_header
			ipress_page_header
			ipress_after_page_header_title
			ipress_before_page_content
			ipress_after_page_content							ipress_after_privacy
	ipress_after_page
	ipress_sidebar
	ipress_after_main_content	
main class: privacy-page

search.php
actions:
	ipress_before_main_content
	ipress_before_search
	ipress_before_archive_title
	ipress_after_archive_title
		ipress_before_loop (search) 
			ipress_before_article (search)
			ipress_loop, ipress_loop_xxx ( allowed post-formats )
				ipress_before_loop_header
					ipress_loop_header
					ipress_after_loop_header_title
				ipress_after_loop_header
				ipress_before_loop_content
				ipress_loop_content
				ipress_after_loop_content
				ipress_before_loop_footer
					ipress_before_loop_footer_content
				ipress_loop_footer
				ipress_after_loop_footer
			ipress_after_article
		ipress_after_loop (search)
	ipress_after_search
	ipress_sidebar
	ipress_after_main_content	
main class: search-page

single.php
actions:
	ipress_before_main_content
	ipress_before_single
		ipress_before_article (single)
			ipress_before_single_content
				ipress_before_post_header
				ipress_post_header
				ipress_after_post_header_title
				ipress_after_post_header
				ipress_before_post_content
				ipress_post_content
				ipress_after_post_content
				ipress_before_single_footer
				ipress_post_footer
				ipress_after_single_footer
			ipress_single
			ipress_after_single_content							ipress_after_article (single)
	ipress_after_single
	ipress_sidebar
	ipress_after_main_content	
main class: single-page

template-account.php
actions:
	ipress_before_main_content
	ipress_page_before
		ipress_account_before
			ipress_account
		ipress_account_after
	ipress_page_after, 
	ipress_after_main_content	
main class: account-page

template-cart.php
actions:
	ipress_before_main_content
	ipress_page_before
		ipress_cart_before
			ipress_cart
		ipress_cart_after
	ipress_page_after
	ipress_after_main_content	
main class: cart-page

template-checkout.php
actions:
	ipress_before_main_content
	ipress_page_before
		ipress_checkout_before
			ipress_checkout
		ipress_checkout_after
	ipress_page_after 
	ipress_after_main_content	
main class: checkout-page

template-home.php
actions:
	ipress_before_main_content
	ipress_before_homepage 
		ipress_before_homepage_header
		ipress_before_homepage_content
		ipress_after_homepage_content
		ipress_after_homepage_footer
	ipress_homepage
	ipress_homepage_after 
	ipress_after_main_content	
main class: front-page home-template

== Custom Hooks - Actions & Filters ==

bootstrap.php
----------------

'ipress_child_bootstrap'
Action: Initialise pre-bootstrap functionality in child theme.

'ipress_child_init'
Action: Initialise functionality before loading1G files & after defining constants.

'ipress_child_config'
Action: Initialise functionality before loading config file.

config.php
-----------

'ipress_after_config'
- Action: Initialise functionality after loading config file.

'ipress_scripts'
- Filter: (Add) Register Scripts, Styles & Fonts: Scripts. See inline documentation for more details.
- Default: []
- Return: []
- Uses: filter in theme inc/classes/class-ipr-scripts.php.

'ipress_styles'
- Filter: (Add) Register Scripts, Styles & Fonts: Styles. See inline documentation for more details.
- Default: []
- Return: []
- Uses: filter in theme inc/classes/class-ipr-styles.php.

'ipress_fonts'
- Filter: (Add) Register Scripts, Styles & Fonts: Fonts. See inline documentation for more details.
- Default: []
- Return: []
- Uses: filter in theme inc/classes/class-ipr-fonts.php.

'ipress_post_types'
- Filter: (Add) Register Custom Post Types.
- Default: []
- Return: []
- Uses: filter in theme inc/classes/class-ipr-custom.php.

'ipress_taxonomies'
- Filter: (Add) Register taxonomies.
- Default: []
- Return: []
- Uses: filter in theme inc/classes/class-ipr-custom.php.

'ipress_nav_menus'
- Filter: (Add) Register custom menus.
- Default: []
- Return: []
- Uses: filter in theme inc/classes/class-ipr-theme.php.

'ipress_add_image_size'
- Filter: (Add) Register custom image sizes.
- Default: []
- Return: []
- Uses: filter in theme inc/classes/class-ipr-theme.php.

'ipress_media_images'
- Filter: (Add) Register media image options.
- Default: []
- Return: []
- Uses: filter in theme inc/classes/class-ipr-theme.php.

'ipress_post_thumbnails_post_types'
- Filter: (Add) Register post-type post-thumbnail support.
- Default: []
- Return: []
- Uses: filter in theme inc/classes/class-ipr-theme.php.

'ipress_default_sidebars'
- Filter: (Add) Register default theme sidebars.
- Default: [ 'primary', 'header' ]
- Return: []
- Uses: filter in theme inc/classes/class-ipr-sidebars.php.

'ipress_sidebar_defaults'
- Filter: (Add) Register sidebar defaults for wrapping widget & title.
- Default: []
- Return: []
- Uses: filter in theme inc/classes/class-ipr-sidebars.php.

'ipress_footer_sidebars'
- Filter: (Add) Generate footer sidebars.
- Default: []
- Return: []
- Uses: filter in theme inc/classes/class-ipr-sidebars.php.

'ipress_widgets'
- Filter: (Add) Register custom widget areas.
- Default: []
- Return: []
- Uses: filter in theme inc/classes/class-ipr-widgets.php.

'ipress_custom_hero'
- Filter: (Add) Enable or disable front page hero section, use '__return_false'to disable
- Default: true
- Return: boolean
- Uses: filter in theme inc/classes/class-ipr-hero.php.

'ipress_wc_header_cart_dropdown'
- Filter: (Add) Display the header cart as a dropdown
- Default: true
- Return: boolean
- Uses: filter in theme inc/woocommerce/class-ipr-woocommerce.php.

ipress_wc_active'
- Filter: (Add) Is the WooCommerce Cart Active, turn on by default
- Default: true
- Return: boolean
- Uses: filter in theme inc/woocommerce/class-ipr-woocommerce.php.

ipress_login_page'
- Filter: (Add) Redirect login page to my account, for non-admins
- Default: '';
- Return: string
- Uses: filter in parent theme inc/classes/class-ipr-redirect.php.

ipress_logout_page'
- Filter: (Add) Redirect logout page to my account, for non-admins
- Default: '';
- Return: string
- Uses: filter in parent theme inc/classes/class-ipr-redirect.php.

template-functions.php
-----------------------

'ipress_breadcrumbs'
- Filter: Enable default breadcrumbs on inner non-WC pages.
- Default: boolean, false (off)
- Return: boolean

'ipress_breadcrumbs_custom_template'
- Filter: Set a default breadcrumb template. Requires 'ipress_breadcrumbs' to be enabled (true).
- Default: ''
- Return: string

'ipress_breadcrumbs_template'
- Filter: Tweak final requested breadcrumb template. Requires 'ipress_breadcrumbs' to be enabled (true).
- Default: string
- Return: string

'ipress_nav_list_mid_size'
- Filter: Mid size for the nav list args
- Default: 1
- Return: integer

'ipress_homepage_image_inline'
- Filter: Display the homepage image, inline
- Default: false
- Return: boolean

acf.php
--------------

'ipress_acf_field_social'
- Filter: Filterable output for ACF social media field
- Default: []
- Return: []

settings.php
---------------

'ipress_option_defaults'
- Filter: Filterable output for default theme options
- Default: []
- Return: []

'ipress_color_option_defaults'
- Filter: Filterable output for default theme color options
- Default: []
- Return: []

'ipress_default_color_palette'
- Filter: Filterable output for default theme color palette
- Default: []
- Return: []

template.php
--------------

'ipress_get_attr_output'
- Filter: Filterable output for ipress_get_attr()
- Default: '';
- Return: string

'ipress_parse_attr'
- Filter: Filterable output for ipress_parse_attr()
- Default: []
- Return: []

'ipress_{$context}_class'
- Filter: Filterable output for ipress_get_context_classes()
- Default: []
- Return: []

'ipress_header_class'
- Filter: Filterable classlist for ipress_get_header_class()
- Default: []
- Return: []

'ipress_header_style'
- Filter: Filterable output ipress_get_header_style()
- Default: []
- Return: []

'ipress_homepage_image_inline'
- Filter: Use inline image on homepage? ipress_homepage_style()
- Default: true
- Return: boolean

'ipress_homepage_style'
- Filter: Filterable output ipress_homepage_style()
- Default: []
- Return: []

'ipress_header_image_class'
- Filter: Set header image class/es ipress_get_header_image()
- Default: [ 'header-image' ]
- Return: []

'ipress_site_description_args'
- Filter: Filterable site logo & title arguments
- Default: []
- Return: []

'ipress_post_date_prefix'
- Filter: Prefix for post date, ipress_post_date()
- Default: 'Posted On'
- Return: String

'ipress_post_datetime_updated_only'
- Filter: Show all of time string or just updated? ipress_post_date()
- Default: false
- Return: boolean

'ipress_post_date_html'
- Filter: Allowed html tags for this functionality, ipress_post_date()
- Default: []
- Return: []

'ipress_post_author_link'
- Filter: Display author link? ipress_post_author()
- Default: false
- Return: boolean

'ipress_post_author_meta'
- Filter: Post author meta data, 'ipress_post_author()
- Default: ''
- Return: string

'ipress_post_author_html'
- Filter: Allowed html tags for this functionality, ipress_post_author
- Default: []
- Return: []

'ipress_cat_term_separator',
- Filter: Set category list seperator, ipress_post_categories()
- Default: ', '
- Return: string

'ipress_cat_list_prefix',
- Filter: Set category list prefix, ipress_post_categories()
- Default: 'Posted In'
- Return: string

'ipress_tag_term_separator',
- Filter: Set tag list seperator, ipress_post_tags()
- Default: ', '
- Return: string

'ipress_tag_list_prefix',
- Filter: Set tag list prefix, ipress_post_tags()
- Default: 'Tagged In'
- Return: string

'ipress_comments_link_prefix',
- Filter: Set comments list prefix, ipress_post_comments_links()
- Default: 'Comments'
- Return: string

class-ipr-acf.php
----------------
Advanced Custom Fields Theme Options Page. See class docs for example.
- Requires ACF Pro 5.x to be active and enabled.

'ipress_acf_title'
- Filter: Set theme options page title, or turn off.
- Default: IPRESS_CHILD_THEME_NAME, defined in bootstrap.php
- Return: string

ipress_acf_capability'
- Filter: Options page capability. Uses WP capability options, see Codex.
- Default: 'manage_options'.
- Return: string

'ipress_acf_pages'
- Filter: Options page sub-pages.
- Default: []
- Return: []

'ipress_acf_disable_frontend'
- Filter: Disable ACF on the front-end & reduce loading.
- Default: boolean, false
- Return: boolean

class-ipr-attr.php
-----------------
Theme HTML attributes functionality.

'ipress_parse_attr'
- Filter: (Add) Parse attributes by context
- Default: []
- Return: []

class-ipr-css.php
-----------------
Generate dynamic CSS styles.

'ipress_css_non_zero'
- Filter: List of non-zero css properties.
- Default: [ 'font-size', 'opacity' ]
- Return: []

class-ipr-hero.php
------------------
Theme front-page Hero features.

'ipress_custom_hero'
- Filter: Is the custom hero section active
- Default: true / on
- Return: boolean

'ipress_hero_css_cache'
- Filter: Are we using caching?
- Default: false
- Return: boolean

'ipress_hero_css'
- Filter: Filterable CSS output
- Default: ''
- Return: string

'ipress_hero_image_class'
- Filter: Set hero image class, default none
- Default: []
- Return: []

class-ipr-kirki.php
-------------------
Kirki custom functionality

'ipress_kirki_version'
- Filter: Check version, deprecated for v4+
- Default: 4
- Return: integer

'ipress_kirki_config_id'
- Filter: Filterable config ID
- Default: 'ipress_kirki_ID'
- Return: 

class-ipr-load-scripts.php
--------------------------

'ipress_header_js'
- Filter: Get option & format in <script></script> tag if set
- Default: ''
- Return: string

'ipress_footer_js'
- Filter: Get option & format in <script></script> tag if set
- Default: ''
- Return: string

'ipress_header_admin_js'
- Filter: Get option & format in <script></script> tag if set
- Default: ''
- Return: string

'ipress_footer_admin_js'
- Filter: Get option & format in <script></script> tag if set
- Default: ''
- Return: string

class-ipr-query.php
-------------------
Initialise and manipulate the post main query.

'ipress_query_post_type_archives'
- Filter: List of post-types this query is associated with.
- Default: []
- Return: []
- Hook: 'pre_get_posts'

'ipress_query_exclude_category'
- Filter - Exclude categories from display.
- Default: ['-1'], ( Uncategorised )
- Return: []
- Hook: 'pre_get_posts'

'ipress_query_search_include'
- Filter - Include post-types in search query.
- Default: []
- Return: []
- Hook: 'pre_get_posts'

class-ipr-settings.php
----------------------
Theme customizer settings & enabling theme support via customizer. Used in parallel with parent customizer class.

'ipress_parent_customize_register'
- Action: Additional customizer settings. Uses the current WP Customizer instance. 
- Hook: 'customize_register

'ipress_customize_register_js'
- Action: Additional customizer javascript settings. Uses the current WP Customizer instance. 
- Hook: 'customize_register'

'ipress_customize_register_partials'
- Action: Additional customizer partials settings. Uses the current WP Customizer instance. 
- Hook: 'customize_register'

'ipress_customize_register_theme'
- Action: Additional customizer theme settings. Uses the current WP Customizer instance. 
- Hook: 'customize_register'

'ipress_custom_background'
- Filter: Enable / disable the config driven customizer custom background section.
- Default: boolean, false (off)
- Return: boolean
- Hook: 'ipress_customize_register'

'ipress_custom_header'
- Filter: Enable / disable the config driven customizer custom header section.
- Default: boolean, false (off)
- Return: boolean
- Hook: 'ipress_customize_register'

'ipress_custom_js'
- Filter: Enable /disable additional JavaScript customizer fields.
- Default: boolean, false (off)
- Return: boolean
- Hook: 'customize_register'

class-ipr-startup.php
----------------------
Theme initialisation for core WordPress child theme features. Used in parallel with parent theme class.

'ipress_startup'
- Action: Additional theme initialisation. Uses the current WP Customizer instance. 
- Hook: 'customize_register'

'ipress_editor_styles'
- Filter: Enable / disable editor styles.
- Default: boolean, true
- Return: boolean

'ipress_editor_font_sizes'
- Filter: Set editor font sizes.
- Default: [ 'small', 'normal, 'medium', 'large', 'big' ]
- Return: []

class-ipr-template.php
------------------------

'ipress_parse_attr'
- Filter: (add) Custom template attributes
- Default: []
- Return: []

woocommerce/class-ipr-woocommerce.php
-----------------------------------------
WooCommerce settings and custom features.

'ipress_wc_init'
- Action: Called during WooCommerce setup. Add additional WooCommerce setup actions/filters.

'ipress_wc_setup'
- Action: Called during WooCommerce setup. Add additional WooCommerce setup actions.
- Hook: 'after_theme_setup'

'ipress_wc_custom_styles'
- Action: Called after initialising custom WooCommerce styles.
- Hook: 'wp_enqueue_scripts'

'ipress_wc_custom_scripts'
- Action: Called after initialising custom WooCommerce styles.
- Hook: 'wp_enqueue_scripts'

'ipress_wc_active'
- Filter: Turn on/off core cart functionality, true for active cart
- Default: true, (active)
- Return: boolean

'ipress_wc_args'
- Filter: Construct WooCommerce default arguments for WooCommerce Theme Support
- Default: [ 'single_image_width', 'thumbnail_image_width', 'product_grid[]' ]
- Return: []
- Hook: 'after_theme_setup'

'ipress_wc_product_gallery'
- Filter: Enable / disable woocommerce gallery support (zoom, lightbox, slider)
- Default: boolean, true (on)
- Return: boolean
- Hook: 'after_theme_setup'

'ipress_wc_register_taxonomy_menus'
- Filter: Register product attribute taxonomies to the menus API
- Default: []
- Return: []
- Hook: 'after_theme_setup'

'ipress_wc_background_image_regeneration'
- Filter: Turn on/off automatic thumbnail regeneration on theme change
- Default: true ( active )
- Return: boolean
- Hook: 'woocommerce_background_image_regeneration'

'ipress_wc_body_classes'
- Filter: Load additional classes to body tag when WooCommerce is active.
- Default: [ 'woocommerce-active' ]
- Return: [], classes list
- Hook: 'body_classes'

'ipress_wc_product_loop'
- Filter: Display all products on single page. Disable pagination in product archive listing. Should only be used when a small number of products.
- Default: boolean, false
- Return: boolean
- Hook: 'pre_get_posts'

'ipress_wc_add_to_cart_text'
- Filter: Change default add to cart text depending on context
- Default: ''
- Return: string
- Hook: woocommerce_product_add_to_cart_text

'ipress_wc_breadcrumb_default_args'
- Filter: Change default breadcrumbs display args
- Default: []
- Return: []
- Hook: 'woocommerce_breadcrumb_defaults'

'ipress_wc_disable_css'
- Filter: Disable loading of WooCommerce CSS from custom plugins on front-end non-WC pages when active.
- Default: boolean, false
- Return: boolean
- Hook: wp_enqueue_scripts

'ipress_wc_disable_wc_css'
- Filter: Disable loading of WooCommerce CSS for all non-WC pages.
- Default: boolean, false
- Return: boolean
- Hook: wp_enqueue_scripts

'ipress_wc_disable_core_css'
- Filter: Disable loading of core WooCommerce CSS files.
- Default: []
- Return: []
- Hook: wp_enqueue_scripts

'ipress_wc_plugin_styles'
- Filter: List of CSS style handles to disable loading. Requires 'ipress_wc_disable_css' to be enabled.
- Default [ 'wc-block-vendors-style', 'wc-block-style', 'wp-block-library', 'wc-bundle-style', 'wc-composite-css' ]
- Return: []

'ipress_wc_core_fonts'
- Filter: Load core WooCommerce fonts. Useful when WooCommerce css loading is disabled via woocommerce_enqueue_styles.
- Default: boolean, false (off)
- Return: boolean
- Hook: 'wp_enqueue_scripts'

'ipress_wc_custom_styles'
- Filter: Define location for custom css files loading
- Default: true, all pages
- Return: boolean
- Hook: 'wp_enqueue_scripts'

'ipress_wc_custom_styles_dependency'
- Filter: Default loading dependency
- Default: [ 'woocommerce-general' ]
- Return: []
- Hook: 'wp_enqueue_scripts'

'ipress_wc_disable_js'
- Filter: Disable loading of WooCommerce JS on front-end non-WC pages when active.
- Default: boolean, false (off), WooCommerce JS loaded on all pages
- Return: boolean
- Hook: 'wp_enqueue_scripts'

'ipress_wc_plugin_scripts'
- Filter: List of custom plugin scripts to dequeue. Requires 'ipress_wc_disable_js' to be enabled.
- Default: []
- Return: []
- Hook: wp_enqueue_scripts

'ipress_wc_disable_cart_js'
- Filter: Disable loading of WooCommerce Cart/Checkout JS on front-end non-WC pages. Requires 'ipress_wc_disable_js' to be enabled.
- Default: boolean, true (on)
- Return: boolean
- Hook: wp_enqueue_scripts

'ipress_wc_disable_select2'
- Filter: Disable Select2 JS on front-end if enabled.
- Default: boolean, false (off)
- Return: boolean
- Hook: wp_enqueue_styles

'ipress_wc_generator'
- Filter: Dequeue WC head generator styles
- Default: false
- Return: boolean
- Hook: wp_enqueue_styles

'ipress_wc_custom_scripts'
- Filter: Define location for custom js files loading
- Default: true, all pages
- Return: boolean
- Hook: 'wp_enqueue_scripts'

'ipress_wc_custom_scripts_dependency'
- Filter: Default loading dependency
- Default: []
- Return: []

'ipress_wc_header_cart'
- Filter: Enable / disable header cart fragment for header link & content templates.
- Default: boolean, true (on)
- Return: boolean
- Hook: woocommerce_add_to_cart_fragments

'ipress_product_thumbnail_columns'
- Filter: Default column number for WooCommerce product archive list.
- Default: 4
- Return: integer
- Hook: 'wooCommerce_product_thumbnails_columns'

'ipress_wc_catalog_random_ordering'
- Filter: Add custom pandom ordering to product archives
- Default: false
- Return: boolean

'ipress_related_products_args'
- Filter: Default related products to display. 
- Default: [ 1 row, 3 columns]
- Return: []
- Hook: 'woocommerce_output_related_products_args'

'ipress_upsell_products_args'
- Filter: Default upsell products to display. 
- Default: [ 1 row, 2 columns]
- Return: []
- Hook: 'woocommerce_upsell_display_args''

- 'ipress_wc_active_redirect'
- Filter: Redirect for Cart, Checkout & Account pages when cart inactive
- Default: home_url
- Return: none

'ipress_default_checkout_country'
- Filter: Fix the checkout country value
- Default: GB
- Return: string

'ipress_default_checkout_state'
- Filter: Fix the checkout state value
- Default: ''
- Return: string

woocommerce/class-ipr-adjacent-products.php
-----------------------------------------
WooCommerce adjacent products functionality.

'ipress_woocommerce_adjacent_query_args'
- Filter: Modify args for wc_get_products.
- Default: [ 'limit', 'visibility', 'exclude', 'orderby', 'status' ]
- Return: []

woocommerce/class-ipr-customizer.php
-----------------------------------------
WooCommerce specific customizer settings

'ipress_single_product_pagination'
- Filter: Enable / disable the 'ipress_product_pagination' setting.
- Default: boolean, true (on)
- Return: boolean

woocommerce/template-functions.php
-----------------------------------

'ipress_wc_header_cart'
- Filter: Is the header cart active?
- Default: true
- Return: boolean

'ipress_wc_header_cart_dropdown'
- Filter: Is the header cart dropdown active? If not then use slider
- Default: false
- Return: boolean

'ipress_product_categories_args'
- Filter: Product Categories shortcode args.
- Default: [ limit', 'columns', 'child_categories', 'orderby', 'title' ]
- Return: []

'ipress_product_categories_shortcode_args'
- Filter: Default args to pass to product_categories shortcode.
- Default: [ 'number', 'columns', 'orderby', 'parent' ]
- Return: []

'ipress_recent_products_args'
- Filter: Recent Products shortcode args.
- Default: [ 'limit', 'columns', 'orderby', 'order', 'title' ]
- Return: []

'ipress_recent_products_shortcode_args'
- Filter: Default args to pass to recent_product shortcode.
- Default: [ 'orderby', 'order', 'per_page', 'columns' ]
- Return: []

'ipress_featured_products_args'
- Filter: Recent Products shortcode args.
- Default: [ 'limit', 'columns', 'orderby', 'order', 'visibility', 'title' ]
- Return: []

'ipress_featured_products_shortcode_args'
- Filter: Default args to pass to featured_product shortcode.
- Default: [ 'per_page', 'columns', 'orderby', 'order', 'visibility' ]
- Return: []

'ipress_popular_products_args'
- Filter: Popular Products shortcode args.
- Default: [ 'limit', 'columns', 'orderby', 'order', 'title' ]
- Return: []

'ipress_popular_products_shortcode_args'
- Filter: Default args to pass to popular_products shortcode.
- Default: [ 'per_page', 'columns', 'orderby', 'order' ]
- Return: []

'ipress_on_sale_products_args'
- Filter: On sale Products shortcode args.
- Default: [ 'limit', 'columns', 'orderby', 'order', 'on_sale', 'title' ]
- Return: []

'ipress_on_sale_products_shortcode_args'
- Filter: Default args to pass to on_sale_products shortcode.
- Default: [ 'per_page', 'columns', 'orderby', 'order', 'on_sale' ]
- Return: []

'ipress_best_selling_products_args'
- Filter: Best selling Products shortcode args.
- Default: [ 'limit', 'columns', 'orderby', 'order', 'title' ]
- Return: []

'ipress_best_selling_products_shortcode_args'
- Filter: Default args to pass to best_selling_products shortcode.
- Default: [ 'per_page', 'columns', 'orderby', 'order' ]
- Return: []

