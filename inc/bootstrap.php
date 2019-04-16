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

//----------------------------------------------
//	Theme Defines
//----------------------------------------------

// Theme Name
define( 'IPRESS_CHILD_THEME_NAME', 'iPress Child' );

// Directory Structure
define( 'IPRESS_CHILD_DIR', 			get_theme_file_path() );
define( 'IPRESS_CHILD_ASSETS_DIR',		IPRESS_CHILD_DIR . '/assets' );
define( 'IPRESS_CHILD_INCLUDES_DIR',	IPRESS_CHILD_DIR . '/inc' );
define( 'IPRESS_CHILD_TEMPLATES_DIR', 	IPRESS_CHILD_DIR . '/templates' );
define( 'IPRESS_CHILD_LANG_DIR',		IPRESS_CHILD_DIR . '/languages' );

// Assets Directory Structure
define( 'IPRESS_CHILD_CSS_DIR',			IPRESS_CHILD_ASSETS_DIR . '/css' );
define( 'IPRESS_CHILD_JS_DIR',			IPRESS_CHILD_ASSETS_DIR . '/js' );
define( 'IPRESS_CHILD_IMAGES_DIR',		IPRESS_CHILD_ASSETS_DIR . '/images' );
define( 'IPRESS_CHILD_FONTS_DIR',		IPRESS_CHILD_ASSETS_DIR . '/fonts' );

// Includes Directory Structure
define( 'IPRESS_CHILD_LIB_DIR',			IPRESS_CHILD_INCLUDES_DIR . '/lib' );
define( 'IPRESS_CHILD_ADMIN_DIR',		IPRESS_CHILD_INCLUDES_DIR . '/admin' );
define( 'IPRESS_CHILD_CONTROLS_DIR',	IPRESS_CHILD_INCLUDES_DIR . '/controls' );
define( 'IPRESS_CHILD_SHORTCODES_DIR',	IPRESS_CHILD_INCLUDES_DIR . '/shortcodes' );
define( 'IPRESS_CHILD_WIDGETS_DIR',		IPRESS_CHILD_INCLUDES_DIR . '/widgets' );
define( 'IPRESS_CHILD_CLASSES_DIR',		IPRESS_CHILD_INCLUDES_DIR . '/classes' );

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
require_once IPRESS_CHILD_INCLUDES_DIR . '/functions.php';

// Shortcodes functionality
require_once IPRESS_CHILD_INCLUDES_DIR . '/shortcodes.php';

// Functions: theme template hooks & functions
require_once IPRESS_CHILD_INCLUDES_DIR . '/template-hooks.php';
require_once IPRESS_CHILD_INCLUDES_DIR . '/template-functions.php';
require_once IPRESS_CHILD_INCLUDES_DIR . '/template-tags.php';

//----------------------------------------------
//	Includes - Classes
//----------------------------------------------

// Admin UI functionality
require_once IPRESS_CHILD_CLASSES_DIR . '/class-admin.php';

// Ajax Functionality
require_once IPRESS_CHILD_CLASSES_DIR . '/class-ajax.php';

// REST API functionality
require_once IPRESS_CHILD_CLASSES_DIR . '/class-api.php';

// Scheduled cron tasks
require_once IPRESS_CHILD_CLASSES_DIR . '/class-cron.php';

// Query modification
require_once IPRESS_CHILD_CLASSES_DIR . '/class-query.php';

// Redirect functionality
require_once IPRESS_CHILD_CLASSES_DIR . '/class-redirect.php';

// Rewrite rules & query vars
require_once IPRESS_CHILD_CLASSES_DIR . '/class-rules.php';

// Template includes & redirects
require_once IPRESS_CHILD_CLASSES_DIR . '/class-template.php';

// User functionality
require_once IPRESS_CHILD_CLASSES_DIR . '/class-user.php';

//----------------------------------------------
//	Libraries & Plugins
//----------------------------------------------

// Advanced Custom Fields
require_once IPRESS_CHILD_CLASSES_DIR . '/class-acf.php';

// Woocommerce
if ( ipress_woocommerce_active() ) {
	require_once IPRESS_CHILD_CLASSES_DIR . '/class-woocommerce.php';
}

//----------------------------------------------
//	Theme Settings
//----------------------------------------------

// Theme Setup Configuration: actions, filters etc
include_once IPRESS_CHILD_INCLUDES_DIR . '/config.php';

//end
