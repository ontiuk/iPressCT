<?php

/**
 * iPress - WordPress Theme Framework						
 * ==========================================================
 *
 * Theme initialisation for core Woocommerce features.
 * 
 * @package		iPress\Includes
 * @link		http://ipress.uk
 * @license		GPL-2.0+
 */

if ( ! class_exists( 'IPR_Woocommerce' ) ) :

	/**
	 * iPress Woocommerce Support
	 *
	 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/ 
	 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0 
	 */
	final class IPR_Woocommerce {

		// Class Constructor
		public function __construct() {

			// Include Woocommerce support
			add_action( 'after_setup_theme', [ $this, 'woocommerce_setup' ] );

			// Disable default Woocommerce styles @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/ 
			add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' ); 

			// Woocommerce body class
			add_filter( 'body_class', 		[ $this, 'body_class' ] ); 

	        // Header Cart Hook Modifications
    	    add_action( 'init', 			[ $this, 'header_markup' ] );

			// Product Archive Pages Hook Modifications
			add_action( 'init', 			[ $this, 'product_archive_markup' ] );
			
			// Single Product Page Hook Modifications
			add_action( 'init', 			[ $this, 'single_product_markup' ] );

			// Cart Page Hook Modification
			add_action( 'init', 			[ $this, 'cart_markup' ] );

			// Checkout Page Hook Modification
			add_action( 'init', 			[ $this, 'checkout_markup' ] );

			// Checkout Page Hook Modification
			add_action( 'init', 			[ $this, 'account_markup' ] );

			// Turn off products pagination
			add_action( 'pre_get_posts', 	[ $this, 'pre_get_posts' ] );
		}

		//----------------------------------------------
		//	Core support
		//----------------------------------------------

		/**
		 * Woocommerce theme support
		 */
		public function woocommerce_setup() {
			
			// Add Woocommerce support, inc 3.x features
			add_theme_support( 'woocommerce' ); 

			$woo_gallery = apply_filters( 'ipress_wc_gallery', true );
			if ( $woo_gallery ) {
				add_theme_support( 'wc-product-gallery-zoom' ); 
				add_theme_support( 'wc-product-gallery-lightbox' ); 
				add_theme_support( 'wc-product-gallery-slider' ); 
			}
		}

		/** 
		 * Add 'woocommerce-active' class to the body tag if active
		 * 
		 * @param  array $classes
		 * @return array 
		 */ 
		public function body_class( $classes ) { 

			if ( ipress_woocommerce_active() ) {
				$classes[] = 'woocommerce-active'; 
			}
			return $classes; 
		} 

		/**
		 * Display all products in archive
		 *
		 * @param	object $query WP_Query
		 * @return	object
		 */
		public function pre_get_posts( $query ) {

			// Turn on, off by default
			$product_loop = apply_filters( 'ipress_product_loop', false );

			// Restrict posts
			if ( $product_loop && ! is_admin() && $query->is_main_query() && is_post_type_archive( 'product' ) ) {
				$query->set( 'posts_per_page', -1 );
    		}

		    return $query;
		}

	    //----------------------------------------------
		//  Header Markup
		//
		//	- woocommerce_before_main_content
	    //	- woocommerce_output_related_products_args
		//	- woocommerce_add_to_cart_fragments
		//	- woocommerce_output_related_products_args
		//----------------------------------------------

	    /**
    	 * Header Markup
	     */
    	public function header_markup() {

			// Default WooCommerce wrapper
			remove_action( 'woocommerce_before_main_content', 		'woocommerce_output_content_wrapper', 10 ); 
			remove_action( 'woocommerce_after_main_content', 		'woocommerce_output_content_wrapper_end', 10 ); 

			add_action( 'woocommerce_before_main_content', 			[ $this, 'wrapper_before' ] ); 
			add_action( 'woocommerce_after_main_content',  			[ $this, 'wrapper_after' ] ); 

	        // Remove breadcrumbs
    	    remove_action( 'woocommerce_before_main_content', 		'woocommerce_breadcrumb', 20 );
        	add_action( 'woocommerce_before_main_content', 			[ $this, 'header_breadcrumb' ], 5 );
	
	        // Cart fragments
    	    add_filter( 'woocommerce_add_to_cart_fragments', 		[ $this, 'header_cart_link_fragment' ], 10, 1 ); 
			add_filter( 'woocommerce_add_to_cart_fragments', 		[ $this, 'header_cart_content_fragment' ], 10, 1 ); 

	        // Related product settings
    	    add_filter( 'woocommerce_output_related_products_args', [ $this, 'related_products_args' ] ); 
		}
		
		//----------------------------------------------
		//	Product Archive Page Markup
		//----------------------------------------------

		/**
		 * Product Archive Page Markup
		 *
		 * @return void
		 */
		public function product_archive_markup() {}

		//----------------------------------------------
		//	Single Product Page Markup
		//----------------------------------------------
		
		/**
		 * Single Product Page Markup
		 *
		 * @return void
		 */
		public function single_product_markup() {}

		//----------------------------------------------
		//	Cart Page Markup
		//----------------------------------------------
		
		/**
		 * Cart Page Markup
		 *
		 * @return void
		 */
		public function cart_markup() {}

		//----------------------------------------------
		//	Chackout Page Markup
		//----------------------------------------------
		
		/**
		 * Checkout Page Markup
		 *
		 * @return void
		 */
		public function checkout_markup() {}

		//----------------------------------------------
		//	Account Page Markup
		//----------------------------------------------
		
		/**
		 * Account Page Markup
		 *
		 * @return void
		 */
		public function account_markup() {}

		//----------------------------------------------
		//	Header Markup Functions
		//----------------------------------------------

		/** 
		 * Before Content Woocommerce wrapper
		 * 
		 * @return void 
		 */ 
		public function wrapper_before() {
		   echo '<main id="main" class="site-main archive-page product-archive">';
		} 
		
		/** 
		 * After Content Woocommerce wrapper
		 * 
		 * @return void 
		 */ 
		public function wrapper_after() { 
			echo '</main><!-- #main -->';
		} 

	   /**
		* Header breadcrumbs
		* - Override the default breadcrumbs with custom which takes into account custom page templates
		* - page_cart, page_checkout, page_account
		*/
		public function header_breadcrumb() {

			$template = '';

			if ( is_page_template('page_cart.php') || is_cart() ) {

				$template = 'archive-cart';

			} elseif ( is_page_template('page_checkout.php') || is_checkout() ) {

				$template = 'archive-checkout';

			} elseif ( is_page_template('page_account.php') || is_account_page() ) {

				$template = 'archive-account';

			} elseif ( is_singular( 'product' ) ) {

				$template = 'single-product';

			} elseif ( is_shop() || is_post_type_archive( 'product' ) ) {

				$template = 'archive-product';

			} elseif ( is_product_taxonomy() ) {

				if ( is_tax( 'product_cat' ) ) {

					$template = 'taxonomy-product-cat';         

				} elseif ( is_tax( 'product_tag' ) ) {

					$template = 'taxonomy-product-tag'; 

				}

			} elseif ( is_woocommerce() ) {

				$template = 'archive-shop';
			}

			// Load breadcrumbs template?
			if ( ! empty( $template ) ) {
				wc_get_template_part( 'global/breadcrumbs/' . $template );
			} else {
				echo sprintf( 'No Breadcrumbs for this type [%s] yet!', $template );
			}
		}

		/** 
		 * Keep cart contents update when products are added to the cart via AJAX 
		 * 
		 * @param	array $fragments Fragments to refresh via AJAX
		 * @return	array
		 * @todo	This is template specific but use css attribute
		 * @uses	/woocommerce theme overwrite directory
		 */ 
		public function header_cart_link_fragment( $fragments ) { 

			$header_cart = apply_filters( 'ipress_wc_header_cart', false );
			if ( ! $header_cart ) { return $fragments; }

			ob_start(); 
			wc_get_template_part( 'header-cart-link' );
			$fragments['a.header-cart-link'] = ob_get_clean(); 
		 
			return $fragments; 
		} 

		/** 
		 * Keep cart contents update when products are added to the cart via AJAX 
		 * 
		 * @param	array $fragments Fragments to refresh via AJAX
		 * @return	array
		 * @todo	This is template specific but use css attribute
		 * @uses	/woocommerce theme overwrite directory
		 */ 
		public function header_cart_content_fragment( $fragments ) { 

			$header_cart = apply_filters( 'ipress_wc_header_cart', false );
			if ( ! $header_cart ) { return $fragments; }

			ob_start(); 
			wc_get_template_part( 'header-cart-content' );
			$fragments['div.header-cart-content'] = ob_get_clean(); 

			return $fragments; 
		} 

		/** 
		 * Related Products Args. 
		 * 
		 * @param array $args related products args. 
		 * @return array $args related products args. 
		 */ 
		public function related_products_args( $args ) { 
			$defaults = [ 
				'posts_per_page' => 3, 
				'columns'		 => 3 
			]; 
	 
			$args = wp_parse_args( $defaults, $args ); 
			return $args; 
		} 

		//----------------------------------------------
		//	Product Archive Page Markup Functions
		//----------------------------------------------

		/** 
		 * Product columns wrapper
		 * 
		 * @return	void 
		 */ 
		public function product_columns_wrapper() { 
			echo sprintf( '<div class="columns-%s">', absint( $this->loop_columns() ) ); 
		} 

		/** 
		 * Product columns wrapper close. 
		 * 
		 * @return	void 
		 */ 
		public function product_columns_wrapper_close() { 
			echo '</div>'; 
		} 

		//----------------------------------------------
		//	Single Product Markup Functions
		//----------------------------------------------

		//----------------------------------------------
		//	Cart Markup Functions
		//----------------------------------------------

		//----------------------------------------------
		//	Checkout Markup Functions
		//----------------------------------------------

		//----------------------------------------------
		//	Account Markup Functions
		//----------------------------------------------
	}

endif;

// Initialize WC class
return new IPR_Woocommerce();

// End
