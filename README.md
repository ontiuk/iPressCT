iPress CT - WordPress Theme Framework 
=======================================

http://on.tinternet.co.uk

## About

iPressCT is a Child Theme based on the iPress Rapid Development Theme Framework for WordPress.

This utilises the iPressPT parent theme.

## Install

1. Upload the theme folder via FTP to your wp-content/themes/ directory.
2. Go to your WordPress dashboard and select Appearance.
3. Activate the child theme.

## User Manual

I'll be updating this asap with details of available filters.

## Support

Please visit the github page: https://github.com/ontiuk.

## Folder Structure

Out of the box it works as a standard theme with a very basic template. 
Uses a template restructure to move primary files to the route directory.
See https://core.trac.wordpress.org/ticket/13239 for potential/hopeful changes on template structure.

## Other Stuff

This requires the iPressPT Parent Theme.

## Structure: Folders & Files

/
|-404.php
|-archive.php
|-attachment.php
|-author.php
|-browserconfig.xml
|-category.php
|-comments.php
|-date.php
|-favicon.ico
|-footer.php
|-front-page.php
|-functions.php
|-header.php
|-home.php
|-index.php
|-page.php
|-privacy-policy.php
|-screenshot.jpg
|-search.php
|-searchform.php
|-sidebar.php
|-sidebar-shop.php
|-sidebar-shop-category.php
|-sidebar-shop-product.php
|-single.php
|-style.css
|-tag.php
|-taxonomy.php
|-template-account.php
|-template-cart.php
|-template-checkout.php
|-/assets
| 	|-/css
| 	|-/fonts
| 	|-/images
| 	|-/js
| 	|-/scss
|-/inc
|	|-bootstrap.php
| 	|-config.php
| 	|-customizer.php
| 	|-functions.php
| 	|-shortcodes.php
| 	|-template-functions.php
| 	|-template-hooks.php
| 	|-/admin
| 	|-/classes
| 		|-class-acf.php
| 		|-class-admin.php
| 		|-class-ajax.php
| 		|-class-api.php
| 		|-class-cron.php
| 		|-class-hooks.php
| 		|-class-query.php
| 		|-class-redirect.php
| 		|-class-rules.php
| 		|-class-settings.php
| 		|-class-startup.php
| 		|-class-template.php
| 		|-class-user.php
| 		|-class-woocommerce.php
| 	|-/controls
| 	|-/functions
|		|-product.php
|		|-template.php
| 	|-/languages
| 	|-/lib
|		|-/acf
|		|-acf-config.php
| 	|-/shortcodes
| 	|-/widgets
|-/templates
| 	|-account.php
| 	|-archive.php
| 	|-attachment.php
| 	|-cart.php
| 	|-checkout.php
| 	|-content.php
| 	|-content-page.php
| 	|-content-privacy.php
| 	|-content-search.php
| 	|-content-single.php
| 	|-home.php
| 	|-index.php
| 	|-search.php
| 	|-/front
| 	|-/global
| 		|-/breadcrumbs
| 		|-/footer
| 		|-/header
| 	|-/layout
| 	|-/loop
| 	|-/page
| 	|-/single
| 	|-/widget
|-/woocommerce
| 	|-/admin
| 	|-/auth
| 	|-/cart
| 	|-/checkout
| 	|-/emails
| 	|-/global
| 	|-/loop
| 	|-/myaccount
| 	|-/notices
| 	|-/order
| 	|-/reports
| 	|-/single-product

## Structure: Files & Templates

/
|- 404.php
|	|- templates/global/404.php (alternate: 404-full.php)
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
|	|- templates/global/content-none.php
|- comments.php
|- footer.php
|	|- templates/global/footer/site-credit.php
|	|- templates/global/footer/footer-widgets.php
|- front-page.php
|	|- templates/global/content.php
|- functions.php
|- header.php
|	|- templates/global/header/site-branding.php
|	|- templates/global/site-navigation.php
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
|	|- templates/global/content-none.php
|- page.php
|	|- templates/content-page.php
|		|- templates/page/header.php
|		|- templates/page/image.php
|		|- templates/loop/attachment.php
|		|- templates/loop/edit-link.php
|		|- templates/loop/content.php
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
|	|- templates/global/content-none.php
|- single.php
|	|- templates/single.php
|		|- templates/content-single.php
|			|- templates/single/header.php
|			|- templates/single/image.php
|			|- templates/single/meta.php
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


## Hooks & Classes

404.php
actions: 
	ipress_before_main_content
		ipress_404_before 
		ipress_404_after 
	ipress_after_main_content	
'main' class: error-page

archive.php ( author.php / date.php / category.php / tag.php / taxonomy.php )
actions: 
	ipress_before_main_content
	ipress_archive_before
		ipress_loop_before
			ipress_article_before
			ipress_loop
				ipress_loop_header_before, ipress_loop_header_after
				ipress_loop_content_before
				ipress_loop_content 				ipress_loop_content_after
				ipress_loop_footer
			ipress_article_after
		ipress_loop_after
	ipress_archive_after
	ipress_sidebar
	ipress_after_main_content	
'main' class: archive-page ( author-page, data-page, category-page, tag-page, taconomy-page )

attachment.php
actions: 
	ipress_before_main_content
	ipress_page_before
		ipress_attachment_before, ipress_attachment, ipress_attachment_before
	ipress_page_after
	ipress_after_main_content	
'main' class: attachment-page

comments.php
actions:
	ipress_before_comments
	ipress_before_comment_form
	ipress_after_comments

header.php ( included & called before all other templates via get_header() )
actions:
	wp_body_open ( via wp_body_open() ) 
	ipress_before_header
	ipress_header_top
	ipress_header
	ipress_header_bottom
	ipress_before_content

footer.php ( included and called after all other templates via get_footer() )
actions:
	ipress_before_footer
	ipress_footer_top
	ipress_footer
	ipress_footer_bottom
	ipress_after_footer
	ipress_after

front-page.php
actions:
	ipress_before_main_content
	ipress_homepage
	ipress_homepage_after
	ipress_after_main_content	
'main' class: front-page

home.php
actions:
	ipress_before_main_content
	ipress_archive_before
		ipress_loop_before 
			ipress_article_before
			ipress_loop
				ipress_loop_header_before, ipress_loop_header_after
				ipress_loop_content_before, ipress_loop_content_after
				ipress_loop_footer
			ipress_article_after
		ipress_loop_after
	ipress_archive_after
	ipress_sidebar
	ipress_after_main_content	
'main' class: home-page

index.php
actions:
	ipress_before_main_content
	ipress_archive_before
		ipress_loop_before 
			ipress_article_before
			ipress_loop, ipress_loop_xxx ( allowed post-formats )
				ipress_loop_header_before, ipress_loop_header_after
				ipress_loop_content_before, ipress_loop_content_after
				ipress_loop_footer
			ipress_article_after
		ipress_loop_after
	ipress_archive_after
	ipress_sidebar
	ipress_after_main_content	
'main' class: index-page

page.php
actions:
	ipress_before_main_content
	ipress_page_before
		ipress_article_before
			ipress_page
			ipress_page_header_before
			ipress_page_content_before, ipress_page_content_after						ipress_article_after
	ipress_page_after
	ipress_sidebar
	ipress_after_main_content	
'main' class: content-page

privacy-policy.php
actions:
	ipress_before_main_content
	ipress_page_before
		ipress_privacy_before
			ipress_privacy
			ipress_page_header_before
			ipress_page_content_before, ipress_page_content_after						ipress_privacy_after
	ipress_page_after
	ipress_sidebar
	ipress_after_main_content	
'main' class: privacy-page

search.php
actions:
	ipress_before_main_content
	ipress_search_before
		ipress_loop_before
			ipress_article_before
			ipress_loop, ipress_loop_xxx ( allowed post-formats )
				ipress_loop_header_before, ipress_loop_header_after
				ipress_loop_content_before, ipress_loop_content_after
				ipress_loop_footer
			ipress_article_after
		ipress_loop_after
	ipress_search_after
	ipress_sidebar
	ipress_after_main_content	
'main' class: search-page

single.php
actions:
	ipress_before_main_content
	ipress_single_before
		ipress_article_before
			ipress_single_top
			ipress_single
			ipress_single_bottom
		ipress_article_after
	ipress_single_after
	ipress_sidebar
	ipress_after_main_content	
'main' class: single-page

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

## Custom Hooks - Actions & Filters

class-acf.php
----------------
Advanced Custom Fields Theme Options Page. See class docs for example.
- Requires ACF Pro 5.x to be active and enabled.

'ipress_acf_title'
- filter: Set theme options page title, or turn off - default iPress Child.

ipress_acf_capability'
- filter: Options page capability - default 'manage_options'.

'ipress_acf_pages'
- filter: Options page sub-pages - default [].

class-query.php
-----------------
Initialise and manipulate the post main query.

'ipress_query_post_type_archives'
filter - Customize query for post-type taxonomy terms - default [].

'ipress_query_exclude_category'
- filter - Exclude categories from display - default Uncategorised ['-1'].

'ipress_query_search_include'
- filter - Include post-types in search query - default [].

class-settings.php
------------------
Customizer settings and features. Used in parallel with parent customizer class.

'ipress_add_image_size'
- filter: Add hero image size.

'ipress_custom_background'
- filter: Turn on/off the config driven customizer custom background section, default false/off.

'ipress_custom_header'
- filter: Turn on/off the config driven customizer custom header section, default false/off.

'ipress_custom_js'
- filter: Turn on/off the config driven customizer custom Javascript section, default false/off.

'ipress_default_layout'
- filter: Set the default content & sidebar layout. Default empty for full width layout.

class-woocommerce.php
---------------------
Woocommerce settings and custom features.

'ipress_wc_active'
- filter: Turn on/off cart & checkout functionality. Default true. Set to false to bypass cart, checkout & account, e.g. affiliate site.

'ipress_wc_product_gallery'
- filter: Add woocommerce gallery support (zoom, lightbox, slider) - default true.

'ipress_wc_product_loop'
- filter: Display all products on single page - default false.

'ipress_wc_disable_js_css'
- filter: Disable css & js on non Woocommerce pages - default false.

'ipress_wc_disable_layout'
- filter: Disable layout css
- requires 'ipress_woocommerce_disable_js_css to not be true.

'ipress_wc_disable_css'
- filter: List of registered theme / plugin styles to dequeue - default [ 'wc-block-style', 'wc-bundle-style', 'wc-composite-css' ].
- requires 'ipress_woocommerce_disable_js_css to not be true.

'ipress_wc_disable_cart'
- filter: Disable cart js, default true.
- requires 'ipress_woocommerce_disable_js_css to not be true.

'ipress_wc_disable_js'
- filter: List of registered theme / plugin scripts to dequeue - default [].
- requires 'ipress_woocommerce_disable_js_css to not be true.

'ip_wc_disable_select2'
- filter: Disable the bundled select2 js functionality for Woocommerce select boxes, default false.

'ipress_wc_header_cart'
- filter: Turn on/off the header cart ajax functionality default true/on.

'ipress_related_products_args'
- filter: Set the default related product args for posts and columns, default 3x3.

config.php
-----------

'ipress_scripts'
- filter: Register Scripts, Styles & Fonts: Scripts, default []. See inline documentation for more details.

'ipress_styles'
- filter: Register Scripts, Styles & Fonts: Styles, default []. See inline documentation for more details.

'ipress_fonts'
- filter: Register Scripts, Styles & Fonts: Fonts, default []. See inline documentation for more details.

'ipress_custom_post_types'
- filter: Register Custom Post Types, default [].

'ipress_taxonomies'
- filter: Register taxonomies, default [].

'ipress_nav_menus'
- filter: Register custom menus, default [].

'ipress_add_image_size'
- filter: Register custom image sizes, default [].

'ipress_default_sidebars'
- filter: Register custom sidebars, default [].

'ipress_widgets'
- filter: Register custom widget areas, default [].

template-functions.php
-----------------------

'ipress_breadcrumbs'
- filter: Turn on/off default breadcrumbs on inner non-WC pages. Default off/false.

'ipress_breadcrumbs_custom_template'
- filter: Set a default breadcrumb template, default empty.
- Requires 'ipress_breadcrumbs' to be on/true.

'ipress_breadcrumbs_template'
- filter: Tweak final requested breadcrumb template, default string
- Requires 'ipress_breadcrumbs' to be on/true.

