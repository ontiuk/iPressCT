<?php

/**
 * iPress - WordPress Theme Framework						
 * ==========================================================
 *
 * Theme initialisation for core WordPress child theme features.
 * 
 * @package		iPress\Includes
 * @link		http://ipress.uk
 * @license		GPL-2.0+
 */

if ( ! class_exists( 'IPR_Startup' ) ) :

	/**
	 * Set up core child theme features
	 */ 
	final class IPR_Startup {

		/**
		 * Class constructor
		 */
		public function __construct() {

			// Core WordPress functionality
			add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
		}

		//----------------------------------------------
		//	Theme SetUp
		//----------------------------------------------

		/**
		 * Set up core theme settings & functionality
		 * - Some such as logo, header and background moved to customizer setup
		 * - todo: move config.php textdomain here
		 */
		public function setup_theme() {

			global $wp_version;

			// Add editor styles
			add_editor_style( IPRESS_CHILD_CSS_URL . '/editor.css' );

			// Theme initialization
			do_action( 'ipress_startup' );
		}
	}

endif;

// Instantiate Theme Class
return new IPR_Startup;

//end
