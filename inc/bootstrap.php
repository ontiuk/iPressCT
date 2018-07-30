<?php

/**
 * iPress - WordPress Theme Framework						
 * ==========================================================
 *
 * Set up and load theme requirements
 * 
 * @package		iPress\Bootstrap
 * @link		http://ipress.uk
 * @license		GPL-2.0+
 */

//----------------------------------------------
//	Theme Defines
//----------------------------------------------

// Theme Name
define( 'IPRESS_CHILD_THEME_NAME', 'iPressChild' );

// Directory Structure
define( 'IPRESS_CHILD_DIR', 			get_theme_file_path() );
define( 'IPRESS_CHILD_ASSETS_DIR',		IPRESS_CHILD_DIR . '/assets' );
define( 'IPRESS_CHILD_INCLUDES_DIR',	IPRESS_CHILD_DIR . '/inc' );
define( 'IPRESS_CHILD_TEMPLATES_DIR', 	IPRESS_CHILD_DIR . '/templates' );

// Assets Directory Structure
define( 'IPRESS_CHILD_CSS_DIR',			IPRESS_CHILD_ASSETS_DIR . '/css' );
define( 'IPRESS_CHILD_JS_DIR',			IPRESS_CHILD_ASSETS_DIR . '/js' );
define( 'IPRESS_CHILD_IMAGES_DIR',		IPRESS_CHILD_ASSETS_DIR . '/images' );
define( 'IPRESS_CHILD_FONTS_DIR',		IPRESS_CHILD_ASSETS_DIR . '/fonts' );

// Includes Directory Structure
define( 'IPRESS_CHILD_LANG_DIR',		IPRESS_CHILD_INCLUDES_DIR . '/languages' );
define( 'IPRESS_CHILD_LIB_DIR',			IPRESS_CHILD_INCLUDES_DIR . '/lib' );
define( 'IPRESS_CHILD_ADMIN_DIR',		IPRESS_CHILD_INCLUDES_DIR . '/admin' );
define( 'IPRESS_CHILD_CONTROLS_DIR',	IPRESS_CHILD_INCLUDES_DIR . '/controls' );
define( 'IPRESS_CHILD_SHORTCODES_DIR',	IPRESS_CHILD_INCLUDES_DIR . '/shortcodes' );
define( 'IPRESS_CHILD_WIDGETS_DIR',		IPRESS_CHILD_INCLUDES_DIR . '/widgets' );

// Directory Paths
define( 'IPRESS_CHILD_URL',				get_theme_file_uri() );
define( 'IPRESS_CHILD_ASSETS_URL',		IPRESS_CHILD_URL . '/assets' );
define( 'IPRESS_CHILD_INCLUDES_URL',	IPRESS_CHILD_URL . '/inc' );

// Assets Directory Paths
define( 'IPRESS_CHILD_CSS_URL',			IPRESS_CHILD_ASSETS_URL . '/css' );
define( 'IPRESS_CHILD_JS_URL',			IPRESS_CHILD_ASSETS_URL . '/js' );
define( 'IPRESS_CHILD_IMAGES_URL',		IPRESS_CHILD_ASSETS_URL . '/images' );
define( 'IPRESS_CHILD_FONTS_URL',		IPRESS_CHILD_ASSETS_URL . '/fonts' );

// Includes Directory Paths
define( 'IPRESS_CHILD_LANG_URL',		IPRESS_CHILD_INCLUDES_URL . '/languages' );
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

// Set Up theme
$child_theme			= wp_get_theme( IPRESS_CHILD_THEME_NAME );
$ipress_child_version 	= $child_theme['Version'];

// Initiate Main Registry, Scripts & Styles
$ipress_child = (object)[

	// Set theme
	'theme'		=> $child_theme,
	'version'	=> $ipress_child_version,
];

// Admin functionlity
if ( is_admin() ) {
	$ipress_child->admin = require_once IPRESS_CHILD_INCLUDES_DIR . '/class-admin.php';
}

//----------------------------------------------
//	Libraries & Plugins
//----------------------------------------------

//----------------------------------------------
//	Theme Settings
//----------------------------------------------

// Register theme object
$GLOBALS['ipress_child'] = $ipress_child;

//end
