<?php

/**
 * iPress - WordPress Theme Framework
 * ==========================================================
 *
 * Set up and load child theme requirements and bootstrap initialization.
 *
 * @package iPress\Bootstrap
 * @link    http://ipress.uk
 * @license GPL-2.0+
 */

// phpcs:disable

// Initialise hooks
do_action( 'ipress_child_bootstrap' );

//----------------------------------------------
//	Theme Defines
//----------------------------------------------

// Theme Name & Versioning: Change as required.
define( 'IPRESS_CHILD_THEME_NAME', 'iPress Child' );
define( 'IPRESS_CHILD_TEXT_DOMAIN', 'ipress-child' );
define( 'IPRESS_CHILD_THEME_NAMESPACE', 'ipress-child' );
define( 'IPRESS_CHILD_THEME_WC', 7.0 ); // WooCommerce minimum version required.

// Directory Structure
define( 'IPRESS_CHILD_DIR', get_theme_file_path() );
define( 'IPRESS_CHILD_ASSETS_DIR', IPRESS_CHILD_DIR . '/assets' );
define( 'IPRESS_CHILD_INCLUDES_DIR', IPRESS_CHILD_DIR . '/inc' );
define( 'IPRESS_CHILD_TEMPLATES_DIR', IPRESS_CHILD_DIR . '/templates' );
define( 'IPRESS_CHILD_LANG_DIR', IPRESS_CHILD_DIR . '/languages' );
define( 'IPRESS_CHILD_STORE_DIR', IPRESS_CHILD_DIR . '/woocommerce' );

// Directory Paths
define( 'IPRESS_CHILD_URL', get_theme_file_uri() );
define( 'IPRESS_CHILD_ASSETS_URL', IPRESS_CHILD_URL . '/assets' );
define( 'IPRESS_CHILD_INCLUDES_URL', IPRESS_CHILD_URL . '/inc' );
define( 'IPRESS_CHILD_LANG_URL', IPRESS_CHILD_URL . '/languages' );
define( 'IPRESS_CHILD_STORE_URL', IPRESS_CHILD_URL . '/woocommerce' );

//----------------------------------------------
//	Theme SetUp & Configuration
//----------------------------------------------

// Theme localization i18n - loads wp-content/themes/child-theme-name/languages/xx_XX.mo.
add_action( 'after_setup_theme', function() {
	load_child_theme_textdomain( 'ipress-child', get_stylesheet_directory() . '/languages' );
}, 8 );

//------------------------------------------------------
//	Includes - Functions, Blocks, Template
//------------------------------------------------------

// Functions
require_once IPRESS_CHILD_INCLUDES_DIR . '/functions.php';

// Blocks: custom guttenberg blocks
require_once IPRESS_CHILD_INCLUDES_DIR . '/blocks.php';

// Functions: theme template hooks & functions
require_once IPRESS_CHILD_INCLUDES_DIR . '/template-hooks.php';
require_once IPRESS_CHILD_INCLUDES_DIR . '/template-functions.php';

//----------------------------------------------
//	Includes - Classes
//----------------------------------------------

// Registry helper
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-registry.php';

// Core functionality
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-ajax.php';
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-rest.php';
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-api.php';
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-cron.php';
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-query.php';
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-redirect.php';
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-rules.php';
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-startup.php';
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-template.php';
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-user.php';
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-schema.php';

// Theme hooks
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-hooks.php';

// Additional functionality
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-css.php';

// Optional functionality : Hero
require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-hero.php';

//----------------------------------------------
//	Init
//----------------------------------------------

// Initialization
do_action( 'ipress_child_init' );

// Initiate Main Registry, Scripts & Styles
$ipress = (object)[];

// Register theme settings via customizer
$ipress->settings = require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-settings.php';

// Admin UI functionality
if ( is_admin() ) {
	require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-admin.php';
}

//----------------------------------------------
//	Libraries & Plugins
//----------------------------------------------

// Advanced Custom Fields active?
if ( ipress_acf_plugin_active() ) {
	require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-acf.php';
}

// Kirki active?
if ( ipress_kirki_active() ) {
	require_once IPRESS_CHILD_INCLUDES_DIR . '/classes/class-ipr-kirki.php';
}

// WooCommerce active?
if ( ipress_wc_active() ) {

	// Do versioning check
	if ( ipress_wc_version_check( IPRESS_CHILD_THEME_WC ) ) {

		// Main WooCommerce class
		$ipress->woocommerce = require_once IPRESS_CHILD_INCLUDES_DIR . '/woocommerce/class-ipr-woocommerce.php';

		// WooCommerce customizer functionality
		$ipress->woocommerce_customizer = require IPRESS_CHILD_INCLUDES_DIR . '/woocommerce/class-ipr-woocommerce-customizer.php';

		// Include WooCommerce REST API functionality
		require IPRESS_CHILD_INCLUDES_DIR . '/woocommerce/class-ipr-woocommerce-api.php';

		// WooCommerce product pagination functionality
		require IPRESS_CHILD_INCLUDES_DIR . '/woocommerce/class-ipr-woocommerce-adjacent-products.php';
		require IPRESS_CHILD_INCLUDES_DIR . '/woocommerce/functions.php';

		// WooCommerce template hooks & functions
		require IPRESS_CHILD_INCLUDES_DIR . '/woocommerce/template-hooks.php';
		require IPRESS_CHILD_INCLUDES_DIR . '/woocommerce/template-functions.php';
	} else {
		add_action( 'admin_notices', ipress_wc_version_notice() );
	}
}

//----------------------------------------------
//	Theme Settings & Configuration
//----------------------------------------------

// Configuration
do_action( 'ipress_child_config' );

// Theme Setup Configuration: actions, filters etc
include_once IPRESS_CHILD_INCLUDES_DIR . '/config.php';
