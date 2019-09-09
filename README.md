iPress PT - WordPress Theme Framework 
=======================================

http://on.tinternet.co.uk

## About

iPressCT is a Parent Theme based on the iPress Rapid Development Theme Framework for WordPress.

This utilises the iPressPT parent theme

## Install

1. Upload the theme folder via FTP to your wp-content/themes/ directory.
2. Go to your WordPress dashboard and select Appearance.
3. Activate the child theme

## User Manual

I'll be updating this asap with details of available filters.

## Support

Please visit the github page: https://github.com/ontiuk.

## Folder Structure

Out of the box it works as a standard theme with a very basic template. 
Uses a template restructure to move primary files to the route directory.
See https://core.trac.wordpress.org/ticket/13239 for potential/hopeful changes on template structure.

## Other Stuff

This requires the iPress-PT	- Parent Theme

## Hooks - Filters

class-acf.php
----------------
Advanced Custom Fields Theme Options Page. See class docs for example
- Requires ACF Pro 5.x to be active and enabled

'ipress_acf_title'
- filter: Set theme options page title, or turn off - default iPress Child

ipress_acf_capability'
- filter: Options page capability - default 'manage_options'

'ipress_acf_pages'
- filter: Options page sub-pages - default []

class-query.php
-----------------
'ipress_query_post_type_archives'
filter - Customize query for post-type taxonomy terms - default []

'ipress_exclude_category'
- filter - Exclude categories from display - default Uncategorised ['-1']

'ipress_query_search_include'
- filter - Include post-types in search query - default []

class-woocommerce.php
------------------
'ipress_woocommerce_gallery'
- filter: Add woocommerce gallery support (zoom, lightbox, slider) - default true

'ipress_product_loop'
- filter: Display all products on single page - default false

'ipress_woocommerce_disable_js_css
- filter: Disable css & js on non Woocommerce pages - default false

'ipress_woocommerce_disable_layout'
- filter: Disable layout css
- requires 'ipress_woocommerce_disable_js_css to be true

'ipress_woocommerce_disable_css'
- filter: List of registered theme / plugin styles to dequeue - default []
- requires 'ipress_woocommerce_disable_js_css to be true

'ipress_woocommerce_disable_cart'
- filter: Disable cart js
- requires 'ipress_woocommerce_disable_js_css to be true

'ipress_woocommerce_disable_js'
- filter: List of registered theme / plugin scripts to dequeue - default []
- requires 'ipress_woocommerce_disable_js_css to be true

