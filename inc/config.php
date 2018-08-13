<?php

/**
 * iPress - WordPress Theme Framework						
 * ==========================================================
 *
 * Theme config file: actions, filters etc
 * 
 * @package		iPress\Config
 * @link		http://ipress.uk
 * @license		GPL-2.0+
 */

//----------------------------------------------
//	Theme SetUp & Configuration
//----------------------------------------------

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

// Set up scripts - filterable array. See definitions for structure
$ipress_scripts = [
	'core' 		=> [ 'jquery' ],
	'custom' 	=> [
		'theme' => [ IPRESS_CHILD_JS_URL . '/theme.js', [ 'jquery' ], null ] 
	],
];

// Set up styless - filterable array. See definitions for structure
$ipress_styles = [
	'theme'  	=> [ 
		'theme' => [ IPRESS_CHILD_URL . '/style.css', [], null ]
	]
];

// Set up custom fonts
$ipress_fonts = [ 
	'family' => '', 
	'subset' => '' 
];

//----------------------------------------------
//	Theme Custom Post Types & Taxonomies
//	
//	@see https://codex.wordpress.org/Function_Reference/register_post_type
//	@see https://codex.wordpress.org/Function_Reference/register_taxonomy
//	
//	$post_types = [ 'cpt' => [ 
//		'name'			=> __( 'CPT', 'ipress' ), 
//		'plural'		=> __( 'CPTs', 'ipress' ),
//		'description'	=> __( 'This is the CPT post type', 'ipress' ), 
//		'supports'		=> [ 'title', 'editor', 'thumbnail' ],
//		'taxonomies'	=> [ 'cpt_tax' ],
//		'args'			=> [], 
//	] ];
//
//	$taxonomies = [ 'cpt_tax' => [ 
//		'name'			=> __( 'Tax Name', 'ipress' ), 
//		'plural'		=> __( 'Taxes', 'ipress' ),
//		'description'	=> __( 'This is the Taxonomy name', 'ipress' ), 
//		'post_types'	=> [ 'cpt' ], 
//		'args'			=> [],
//		'column'		=> true, //optional
//		'sortable'		=> true, //optional
//		'filter'		=> true  //optional
//	] ];
//----------------------------------------------

// Set up custom post types & taxonomies
$ipress_post_types = $ipress_taxonomies = [];

//----------------------------------------------
//	Shortcode Configuration
//	- Terms & conditions
//	- Privacy
//	- Cookies
//----------------------------------------------

//----------------------------------------------
//	Sidebars Configuration
//----------------------------------------------

//----------------------------------------------
//	Widgets Configuration
//----------------------------------------------

//----------------------------------------------
//	Custom Hooks & Filters
//----------------------------------------------

//------------------------------
// Plugins
// - Woocommerce
// - ACF 
//------------------------------

//--------------------------------------
// Google 
// - Analytics 
// - Adwords Tracking
//--------------------------------------

//----------------------------------------------
//	Set theme settings transient data
//----------------------------------------------

// Create theme objest
$ipress_config = (object)[
	'scripts' 		=> $ipress_scripts,
	'styles'		=> $ipress_styles,
	'fonts'			=> $ipress_fonts,
	'post_types'	=> $ipress_post_types,
	'taxonomies'	=> $ipress_taxonomies
];

// Create, replace, update, delete
if ( false === ( $ipress_trans = get_transient( 'ipress_config' ) ) ) { 
	set_transient( 'ipress_config', $ipress, DAY_IN_SECONDS );
} else {
	if ( $ipress_config == $ipress_trans ) {
		set_transient( 'ipress_config', $ipress_trans, DAY_IN_SECONDS );
	} else {
		set_transient( 'ipress_config', $ipress_config, DAY_IN_SECONDS );
	}	
}

// Tidy up global data
unset( $ipress_scripts, $ipress_styles, $ipress_fonts, $ipress_post_types, $ipress_taxonomies, $ipress_config, $ipress_trans );

//end
