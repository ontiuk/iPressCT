<?php

/**
 * iPress - WordPress Theme Framework						
 * ==========================================================
 *
 * Advanced Custom Fields plugin config file: actions, filters, data etc
 * - Potentially move to ACF config plugin
 * 
 * @package		iPress\Config
 * @link		http://ipress.uk
 * @license		GPL-2.0+
 */

//----------------------------------------------
//	Plugin SetUp & Configuration
//----------------------------------------------

// Set ACF options page title
add_filter( 'ipress_acf_title', function( $title ) {
	return 'iPress-Child';
} ); 

// Set ACF options page subpages
add_filter( 'ipress_acf_pages', function( $pages, $parent ) {
	return [];
}, 10, 2 );

//----------------------------------------------
//	Plugin i18n - Translation Configuration
//----------------------------------------------

// Set ACF Localization & Translations
add_filter('acf/settings/l10n', function( $localization ) {
  return true;
} );

// Set up translation text domain
add_filter('acf/settings/l10n_textdomain', function( $domain ) {
  return 'ipress-child';
} );

//----------------------------------------------
//	Plugin i18n - Translation Configuration
//----------------------------------------------

// Add translatable meta data: CTA Section
if ( ! function_exists('acf_add_local_field_group') ) { return; }

// Include all available meta data files
//include_once IPRESS_CHILD_LIB_DIR . '/acf/sample.php';

// End
