<?php

/**
 * iPress - WordPress Theme Framework						
 * ==========================================================
 *
 * Set up and load child theme requirements.
 * 
 * @package		iPress\Bootstrap
 * @link		http://ipress.uk
 * @license		GPL-2.0+
 */

// Initialise hooks
do_action( 'ipress_child_bootstrap' );

//----------------------------------------------
//	Theme Defines
//----------------------------------------------

// Theme Name & Versioning: Change as required.
define( 'IPRESS_CHILD_THEME_NAME', 		'iPress Child' );
define( 'IPRESS_CHILD_THEME_WC', 		4.4 ); // Woocommerce minimum version required

// Development mode
define( 'IPRESS_DEV',					true ); // Dev mode, true/false. Sets minified status on theme css & js files.  

// Directory Structure
define( 'IPRESS_CHILD_DIR',				get_theme_file_path() );
define( 'IPRESS_CHILD_ASSETS_DIR',		IPRESS_CHILD_DIR . '/assets' );
define( 'IPRESS_CHILD_INCLUDES_DIR',	IPRESS_CHILD_DIR . '/inc' );
define( 'IPRESS_CHILD_TEMPLATES_DIR',	IPRESS_CHILD_DIR . '/templates' );
define( 'IPRESS_CHILD_LANG_DIR',		IPRESS_CHILD_DIR . '/languages' );

// Assets Directory Structure
define( 'IPRESS_CHILD_CSS_DIR',			IPRESS_CHILD_ASSETS_DIR . '/css' );
define( 'IPRESS_CHILD_JS_DIR',			IPRESS_CHILD_ASSETS_DIR . '/js' );
define( 'IPRESS_CHILD_IMAGES_DIR',		IPRESS_CHILD_ASSETS_DIR . '/images' );
define( 'IPRESS_CHILD_FONTS_DIR',		IPRESS_CHILD_ASSETS_DIR . '/fonts' );

// Includes Directory Structure
define( 'IPRESS_CHILD_LIB_DIR',			IPRESS_CHILD_INCLUDES_DIR . '/lib' );
define( 'IPRESS_CHILD_ADMIN_DIR',		IPRESS_CHILD_INCLUDES_DIR . '/admin' );
define( 'IPRESS_CHILD_CLASSES_DIR',		IPRESS_CHILD_INCLUDES_DIR . '/classes' );
define( 'IPRESS_CHILD_BLOCKS_DIR',		IPRESS_CHILD_INCLUDES_DIR . '/blocks' );
define( 'IPRESS_CHILD_CONTROLS_DIR',	IPRESS_CHILD_INCLUDES_DIR . '/controls' );
define( 'IPRESS_CHILD_FUNCTIONS_DIR',	IPRESS_CHILD_INCLUDES_DIR . '/functions' );
define( 'IPRESS_CHILD_SHORTCODES_DIR',	IPRESS_CHILD_INCLUDES_DIR . '/shortcodes' );
define( 'IPRESS_CHILD_WIDGETS_DIR',		IPRESS_CHILD_INCLUDES_DIR . '/widgets' );

// Directory Paths
define( 'IPRESS_CHILD_URL',				get_theme_file_uri() );
define( 'IPRESS_CHILD_ASSETS_URL',		IPRESS_CHILD_URL . '/assets' );
define( 'IPRESS_CHILD_INCLUDES_URL',	IPRESS_CHILD_URL . '/inc' );
define( 'IPRESS_CHILD_LANG_URL',		IPRESS_CHILD_URL . '/languages' );

// Assets Directory Paths
define( 'IPRESS_CHILD_CSS_URL',			IPRESS_CHILD_ASSETS_URL . '/css' );
define( 'IPRESS_CHILD_JS_URL',			IPRESS_CHILD_ASSETS_URL . '/js' );
define( 'IPRESS_CHILD_IMAGES_URL',		IPRESS_CHILD_ASSETS_URL . '/images' );
define( 'IPRESS_CHILD_FONTS_URL',		IPRESS_CHILD_ASSETS_URL . '/fonts' );

// Includes Directory Paths
define( 'IPRESS_CHILD_LIB_URL',			IPRESS_CHILD_INCLUDES_URL . '/lib' );

//----------------------------------------------
//	Includes - Functions
//----------------------------------------------

// Functions
require_once IPRESS_CHILD_INCLUDES_DIR . '/functions.php'; 			// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// Shortcodes functionality
require_once IPRESS_CHILD_INCLUDES_DIR . '/shortcodes.php'; 		// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// Customizer: custom controls
require_once IPRESS_CHILD_INCLUDES_DIR . '/customizer.php'; 		// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// Functions: theme template hooks & functions
require_once IPRESS_CHILD_INCLUDES_DIR . '/template-hooks.php'; 	// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require_once IPRESS_CHILD_INCLUDES_DIR . '/template-functions.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

//----------------------------------------------
//	Includes - Classes
//----------------------------------------------

// Initialization
do_action( 'ipress_child_init' );

// Theme hooks & functionality
require_once IPRESS_CHILD_CLASSES_DIR . '/class-hooks.php' 			// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// Ajax Functionality
require_once IPRESS_CHILD_CLASSES_DIR . '/class-ajax.php'; 			// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// REST API functionality
require_once IPRESS_CHILD_CLASSES_DIR . '/class-api.php'; 			// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// Scheduled cron tasks
require_once IPRESS_CHILD_CLASSES_DIR . '/class-cron.php'; 			// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// Query modification
require_once IPRESS_CHILD_CLASSES_DIR . '/class-query.php'; 		// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// Redirect functionality
require_once IPRESS_CHILD_CLASSES_DIR . '/class-redirect.php'; 		// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// Rewrite rules & query vars
require_once IPRESS_CHILD_CLASSES_DIR . '/class-rules.php'; 		// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// Register theme settings via customizer
require_once IPRESS_CHILD_CLASSES_DIR . '/class-settings.php'; 		// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// Register theme setup requirements
require_once IPRESS_CHILD_CLASSES_DIR . '/class-startup.php'; 		// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// Template includes & redirects
require_once IPRESS_CHILD_CLASSES_DIR . '/class-template.php'; 		// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// User functionality
require_once IPRESS_CHILD_CLASSES_DIR . '/class-user.php'; 			// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// Admin UI functionality
if ( is_admin() ) {
	require_once IPRESS_CHILD_CLASSES_DIR . '/class-admin.php'; 	// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
}

//----------------------------------------------
//	Libraries & Plugins
//----------------------------------------------

// Advanced Custom Fields
require_once IPRESS_CHILD_CLASSES_DIR . '/class-acf.php'; 			// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

// Woocommerce
if ( ipress_woocommerce_active() ) {

	// Do versioning check
	if ( ipress_woocommerce_version_check( IPRESS_CHILD_THEME_WC ) ) {
		require_once IPRESS_CHILD_CLASSES_DIR . '/class-woocommerce.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
	} else {
		add_action( 'admin_notices', ipress_woocommerce_version_notice() );
	}
}

//----------------------------------------------
//	Theme Settings & Configuration
//----------------------------------------------

// Configuration
do_action( 'ipress_child_config' );

// Theme Setup Configuration: actions, filters etc
include_once IPRESS_CHILD_INCLUDES_DIR . '/config.php'; 			// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

//end
