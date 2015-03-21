<?php 
    /*
    Plugin Name: Bimbler Profile
    Plugin URI: http://www.bimblers.com
    Description: Plugin to change $author_base to 'profile'.
    Author: Paul Perkins
    Version: 0.1
    Author URI: http://www.bimblers.com
    */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
        die;
} // end if

require_once( plugin_dir_path( __FILE__ ) . 'class-bimbler-profile.php' );

Bimbler_Profile::get_instance();
