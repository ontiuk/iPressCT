<?php

/**
 * iPress - WordPress Theme Framework
 * ==========================================================
 *
 * Theme initialisation for core WordPress child theme features.
 *
 * @package iPress\Includes
 * @link    http://ipress.uk
 * @license GPL-2.0+
 */

// Deny unauthorised access
defined( 'ABSPATH' ) ||	exit;

if ( ! class_exists( 'IPR_Startup' ) ) :

	/**
	 * Set up core child theme features
	 */
	final class IPR_Startup extends IPR_Registry {

		/**
		 * Class constructor, protected, set hooks
		 * 
		 * @access protected
		 */
		protected function __construct() {

			// Core WordPress functionality
			add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
		}

		//----------------------------------------------
		//	Theme SetUp
		//----------------------------------------------

		/**
		 * Set up core theme settings & functionality
		 */
		public function setup_theme() {

			// Enable customisable editor styles? Default, true
			$ip_editor_styles = (bool) apply_filters( 'ipress_editor_styles', false );
			if ( true === $ip_editor_styles ) {

				// Add support for editor styles.
				add_theme_support( 'editor-styles' );

				// Add support for editor font sizes.
				add_theme_support(
					'editor-font-sizes',
					(array) apply_filters(
						'ipress_editor_font_sizes',
						[
							[
								'name' => __( 'Small', 'ipress-child' ),
								'size' => 14,
								'slug' => 'small',
							],
							[
								'name' => __( 'Normal', 'ipress-child' ),
								'size' => 16,
								'slug' => 'normal',
							],
							[
								'name' => __( 'Medium', 'ipress-child' ),
								'size' => 22,
								'slug' => 'medium',
							],
							[
								'name' => __( 'Large', 'ipress-child' ),
								'size' => 28,
								'slug' => 'large',
							],
							[
								'name' => __( 'Big', 'ipress-child' ),
								'size' => 36,
								'slug' => 'big',
							],
						]
					)
				);

				// Set editor styles path
				$ip_editor_styles_url = apply_filters(
					'ipress_editor_styles_url',
					[
						IPRESS_CHILD_ASSETS_URL . '/css/editor.css'
					]
				);

				// Add editor styles
				add_editor_style( $ip_editor_styles_url );
			}

			// Theme initialization
			do_action( 'ipress_startup' );
		}
	}

endif;

// Instantiate Theme Startup Class
return IPR_Startup::Init();
