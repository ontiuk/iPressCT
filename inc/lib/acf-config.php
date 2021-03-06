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

//--------------------------------------------------
//	Plugin - Woocommerce, add main WC page options
//--------------------------------------------------

if ( ipress_wc_active() ) {
	
	add_filter( 'acf/location/rule_values/page_type', function ( $choices ) {
		$choices['woo_shop_page'] 		= 'WooCommerce Shop Page';
		$choices['woo_cart_page'] 		= 'WooCommerce Cart Page';
		$choices['woo_checkout_page'] 	= 'WooCommerce Checkout Page';
		$choices['woo_account_page'] 	= 'WooCommerce Account Page';

		return $choices;
	});

	add_filter( 'acf/location/rule_match/page_type', function ( $match, $rule, $options ) {
		if ( $rule['value'] == 'woo_shop_page' ) {
			if ( $rule['operator'] == '==' ) {
				$match = ( $options['post_id'] == wc_get_page_id( 'shop' ) );
			}
			if ( $rule['operator'] == '!=' ) {
				$match = ( $options['post_id'] != wc_get_page_id( 'shop' ) );
			}
		}
		if ( $rule['value'] == 'woo_cart_page' ) {
			if ( $rule['operator'] == '==' ) {
				$match = ( $options['post_id'] == wc_get_page_id( 'cart' ) );
			}
			if ( $rule['operator'] == '!=' ) {
				$match = ( $options['post_id'] != wc_get_page_id( 'cart' ) );
			}
		}
		if ( $rule['value'] == 'woo_checkout_page' ) {
			if ( $rule['operator'] == '==' ) {
				$match = ( $options['post_id'] == wc_get_page_id( 'checkout' ) );
			}
			if ( $rule['operator'] == '!=' ) {
				$match = ( $options['post_id'] != wc_get_page_id( 'checkout' ) );
			}
		}
		if ( $rule['value'] == 'woo_account_page' ) {
			if ( $rule['operator'] == '==' ) {
				$match = ( $options['post_id'] == wc_get_page_id( 'myaccount' ) );
			}
			if ( $rule['operator'] == '!=' ) {
				$match = ( $options['post_id'] != wc_get_page_id( 'myaccount' ) );
			}
		}
		return $match;
	}, 10, 3 );
}

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
if ( ! function_exists( 'acf_add_local_field_group' ) ) { return; }

// Include all available meta data files
//include_once IPRESS_CHILD_LIB_DIR . '/acf/sample.php';

// End
