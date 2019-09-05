<?php

/**
 * iPress - WordPress Theme Framework						
 * ==========================================================
 *
 * Theme config file: actions, filters etc.
 * 
 * @package		iPress\Config
 * @link		http://ipress.uk
 * @license		GPL-2.0+
 */

//----------------------------------------------
//	Theme SetUp & Configuration
//----------------------------------------------

// Theme localization i18n - loads wp-content/themes/child-theme-name/languages/xx_XX.mo.
add_action( 'after_setup_theme', function() {
	load_theme_textdomain( 'ipress-child', get_stylesheet_directory() . '/languages' );
} );

//----------------------------------------------
//	Theme Scripts, Styles & Fonts
//
//	$ipress_scripts = [
//
//		// Core scripts: [ 'script-name', 'script-name2' ... ]
//		'undo' => [ 'ipress' ],
//
//		// Core scripts: [ 'script-name', 'script-name2' ... ]
//		'core' => [ 'jquery' ],
//
//		// External scripts: [ 'label' => [ 'path_url', (array)dependencies, 'version', 'locale' ] ... ]
//		'external' => [],
//
//		// Header scripts: [ 'label' => [ 'path_url', (array)dependencies, 'version' ] ... ]
//		'header' => [],
//
//		// Footer scripts: [ 'label' => [ 'path_url', (array)dependencies, 'version' ] ... ]
//		'footer' => [],
//
//		// Plugin scripts: [ 'label' => [ 'path_url', (array)dependencies, 'version' ] ... ]
//		'plugins' => [],
//
//		// Page scripts: [ 'label' => [ 'template', 'path_url', (array)dependencies, 'version' ] ... ];
//		'page' => [],
//
//		// Front page scripts: [ 'label' => [ 'template', 'path_url', (array)dependencies, 'version' ] ... ];
//		'front' => [],
//
//		// Custom scripts: [ 'label' => [ 'path_url', (array)dependencies, 'version' ] ... ];
//		'custom' => [
//			'theme' => [ IPRESS_CHILD_JS_URL . '/theme.js', [ 'jquery' ], NULL ] 
//		],
//
//		// Localize scripts: [ 'label' => [ 'name' => name, trans => function/path_url ] ]
//		'local' => [
//			'theme'		=> [ 
//				'name'	=> 'theme', 
//				'trans' => [ 
//					'home_url' => home_url(), 
//					'ajax_url' => admin_url( 'admin-ajax.php' ),
//					'rest_url' => rest_url( '/' ) 
//				] 
//			]
//		]
//	];
//	
//	// Set up styless - filterable array. See definitions for structure
//	$ipress_styles = [
//
//		// Core scripts: [ 'script-name', 'script-name2' ... ]
//		'undo' => [ 'ipress' ],
//
//		// Core styles: [ 'script-name', 'script-name2' ... ]
//		'core' => [],
//
//		// External styles: [ 'label' => [ 'path_url', (array)dependencies, 'version', 'locale' ] ... ]
//		'external' => [],
//
//		// Header styles: [ 'label' => [ 'path_url', (array)dependencies, 'version' ] ... ] 
//		'header' => [],
//
//		// Plugin styles: [ 'label' => [ 'path_url', (array)dependencies, 'version' ] ... ]
//		'plugins' => [],
//
//		// Page styles: [ 'label' => [ 'template', 'path_url', (array)dependencies, 'version' ] ... ];
//		'page' => [],
//
//		// Theme styles
//		'theme'  => [ 
//			'theme' => [ IPRESS_CHILD_URL . '/style.css', [], NULL ]
//		]
//	];
//
//	// Set up custom fonts
//	$ipress_fonts = [
//	
//		// Font families: 'OpenSans:300,300i,400,400i,600,600i,800,800i|Roboto:500,700';
//		'family' => 'OpenSans:300,300i,400,400i,600,600i,800,800i|Roboto:500,700',
//	
//		// Subset: 'latin,latin-ext'
//		'subset' => 'latin,latin-ext'
//	];
//----------------------------------------------

// Register Scripts, Styles & Fonts: Scripts
add_filter( 'ipress_scripts', function( $scripts ) {

	// Set up child theme scripts
	$ipress_scripts = [
		'core' 		=> [ 'jquery' ],
		'custom' 	=> [
			'theme' => [ IPRESS_CHILD_JS_URL . '/theme.js', [ 'jquery' ], null ] 
		],
	];

	return ( empty ( $scripts ) ) ? $ipress_scripts : array_merge( $scripts, $ipress_scripts );
} );

// Register Scripts, Styles & Fonts: Styles
add_filter( 'ipress_styles', function( $styles ) {

	// Set up child theme styles
	$ipress_styles = [
		'theme'  	=> [ 
			'theme' => [ IPRESS_CHILD_URL . '/style.css', [], 'ipress' ]
		]
	];

	return ( empty ( $styles ) ) ? $ipress_styles : array_merge( $styles, $ipress_styles );
} );

// Register Scripts, Styles & Fonts: Fonts
add_filter( 'ipress_fonts', function( $fonts ) {

	// Set up child theme fonts
	$ipress_fonts = [];

	return ( empty ( $fonts ) ) ? $ipress_fonts : array_merge( $fonts, $ipress_fonts );
} );

//----------------------------------------------
//	Theme Custom Post Types & Taxonomies
//	
//	@see https://codex.wordpress.org/Function_Reference/register_post_type
//	@see https://codex.wordpress.org/Function_Reference/register_taxonomy
//	
//	$post_types = [ 'cpt' => [ 
//		'name'			=> __( 'CPT', 'ipress-child' ), 
//		'plural'		=> __( 'CPTs', 'ipress-child' ),
//		'public'		=> false,
//		'description'	=> __( 'This is the CPT post type', 'ipress-child' ), 
//		'supports'		=> [ 'title', 'editor', 'thumbnail' ],
//		'taxonomies'	=> [ 'post_tag', 'category' ],
//		'args'			=> [
//			'has_archive' => true,
//			'show_in_rest' => true
//		], 
//	] ];
//
//	$taxonomies = [ 'cpt_tax' => [ 
//		'name'			=> __( 'Tax Name', 'ipress-child' ), 
//		'plural'		=> __( 'Taxes', 'ipress-child' ),
//		'public'		=> false,
//		'description'	=> __( 'This is the Taxonomy name', 'ipress-child' ), 
//		'post_types'	=> [ 'cpt' ], 
//		'args'			=> [],
//		'column'		=> true, //optional
//		'sortable'		=> true, //optional
//		'filter'		=> true  //optional
//	] ];
//----------------------------------------------

// Register Custom Post Types
add_filter( 'ipress_custom_post_types', function( $post_types ) {

	// Set up custom post types & taxonomies
	$ipress_post_types = [];

	return ( empty( $post_types ) ) ? $ipress_post_types : array_merge( $post_types, $ipress_post_types );
} );

// Register taxonomies
add_filter( 'ipress_taxonomies', function( $taxonomies ) {
	
	// Set up custom taxonomies
	$ipress_taxonomies = [];

	return ( empty( $taxonomies ) ) ? $ipress_taxonomies : array_merge( $taxonomies, $ipress_taxonomies );
} );

//----------------------------------------------
//	Images Configuration
//----------------------------------------------

// Add custom image size
add_filter( 'ipress_add_image_size', function( $images ) {
	return array_merge( $images, [] );
} );

//----------------------------------------------
//	Shortcode Configuration
//	- Terms & conditions
//	- Privacy
//	- Cookies
//----------------------------------------------

//----------------------------------------------
//	Sidebars Configuration
//----------------------------------------------

// Update default sidebars list
add_filter( 'ipress_default_sidebars', function( $sidebars ) {
	return $sidebars;
} );

//----------------------------------------------
//	Widgets Configuration
//----------------------------------------------

// Add custom widget areas
add_filter ( 'ipress_widgets', function() {
	return [];
} );

//----------------------------------------------
//	Custom Hooks & Filters
//----------------------------------------------

//------------------------------
// Plugins
// - Woocommerce
// - ACF 
//------------------------------

// Advanced Custom Fields Admin UI
if ( is_admin() ) {
	require_once IPRESS_CHILD_LIB_DIR . '/acf-config.php';
}

//--------------------------------------
// Google 
// - Analytics 
// - Adwords Tracking
//--------------------------------------

//end
