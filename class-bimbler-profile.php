<?php
/**
 * Bimbler Profile
 *
 * @package   Bimbler_Profile
 * @author    Paul Perkins <paul@paulperkins.net>
 * @license   GPL-2.0+
 * @link      http://www.paulperkins.net
 * @copyright 2014 Paul Perkins
 */

/**
 * Include dependencies necessary... (none at present)
 *
 */

/**
 * Bimbler Profile
 *
 * @package Bimbler_Profile
 * @author  Paul Perkins <paul@paulperkins.net>
 */
class Bimbler_Profile {

        /*--------------------------------------------*
         * Constructor
         *--------------------------------------------*/

        /**
         * Instance of this class.
         *
         * @since    1.0.0
         *
         * @var      object
         */
        protected static $instance = null;

        /**
         * Return an instance of this class.
         *
         * @since     1.0.0
         *
         * @return    object    A single instance of this class.
         */
        public static function get_instance() {

                // If the single instance hasn't been set, set it now.
                if ( null == self::$instance ) {
                        self::$instance = new self;
                } // end if

                return self::$instance;

        } // end get_instance

        /**
         * Initializes the plugin by setting localization, admin styles, and content filters.
         */
        private function __construct() {

        	add_action( 'init', array ($this, 'set_author_base'));
        	         	
		} // End constructor.
	
	/**
	 * Update $author_base.
	 *
	 * @return string
	 */
	function set_author_base () {
		global $wp_rewrite;

		$wp_rewrite->author_base = 'profile';	
	}
	
		
} // End class
