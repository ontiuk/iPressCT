<?php

/**
 * iPress - WordPress Theme Framework						
 * ==========================================================
 *
 * Theme initialisation for core WordPress features
 * 
 * @package		iPress\Includes
 * @link		http://ipress.uk
 * @license		GPL-2.0+
 */

if ( ! class_exists( 'IPR_Child_User' ) ) :

	/**
	 * Set up user features
	 */ 
	final class IPR_Child_User {

		/**
		 * Class constructor
		 */
		public function __construct() {
			
			// Initialize User functionality
			$this->init();
		}

		//----------------------------------------------
		//	User Actions & Filters
		//----------------------------------------------

		/**
		 * Initialise User hooks
		 */
		public function init() {}

		//----------------------------------------------
		//	User Functionality 
		//----------------------------------------------

	}

endif;

// Instantiate User Class
return new IPR_Child_User;

//end
