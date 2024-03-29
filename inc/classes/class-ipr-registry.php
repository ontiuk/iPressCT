<?php

/**
 * iPress - WordPress Theme Framework
 * ==========================================================
 *
 * Theme initialisation for core WordPress user features.
 *
 * @package iPress\Includes
 * @link    http://ipress.uk
 * @license GPL-2.0+
 */

// Deny unauthorised access
defined( 'ABSPATH' ) ||	exit;

if ( ! class_exists( 'IPR_Registry' ) ) :

	/**
	 * Set up registry features
	 */
	abstract class IPR_Registry {

		/**
		 * Class instances
		 *
		 * @access private
		 * @var array $instances Singleton[]
		 */
		private static $instances = [];

		/**
		 * Initialise child class
		 * 
		 * @return object $instance
		 */
		final public static function Init() {

			// Get classname from inherited class 
			$class = get_called_class();

			// Set class instance if required
			if ( ! isset( self::$instances[$class] ) ) {
				self::$instances[$class] = new static();
			}

			// Return unique class instance
			return self::$instances[$class];
		}
		
		/**
		 * Class constructor, private
		 * 
		 * @access private
		 */
		private function __construct() {}

		/**
		 * Disable the cloning of this class
		 */
		final public function __clone() {
			throw new Exception( __( 'Cloning instance not allowed.', 'ipress-child' ) );
		}

		/**
		 * Disable the serializing of this class
		 */
		final public function __sleep() {
			throw new Exception( __( 'Serialising instance not allowed.', 'ipress-child' ) );
		}

		/**
		 * Disable the unserializing of this class
		 */
		final public function __wakeup() {
			throw new Exception( __( 'Unserializing instance not allowed.', 'ipress-child' ) );
		}
	}

endif;
