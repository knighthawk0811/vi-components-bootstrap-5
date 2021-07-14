<?php
/*
Plugin Name: VI: Components Bootstrap 5
Plugin URI: http://neathawk.com
Description: Just include the Bootstrap Components, on the public facing side of the website, nothing more. NOTE: Bootstrap requires jQuery.
Version: 9.0.210714
Author: Joseph Neathawk
Author URI: http://Neathawk.com
License: GNU General Public License v2 or later
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class vi_components_bootstrap_5
{
    /*--------------------------------------------------------------
    >>> TABLE OF CONTENTS:
    ----------------------------------------------------------------
    # Instructions
    # TODO
    # Attributes
    # Constructive Functions
    # Reusable Functions
    # Shortcode Functions (are plugin territory)
    --------------------------------------------------------------*/


    /*--------------------------------------------------------------
    # TODO
    --------------------------------------------------------------*/
    //

    /*--------------------------------------------------------------
    # Attributes
    --------------------------------------------------------------*/
    private static $error_report = false;

    /*--------------------------------------------------------------
    # Constructive Functions
    --------------------------------------------------------------*/
	/**
	 * ENQUEUE SCRIPTS AND STYLES
	 *
	 * wp_enqueue_style( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all' )
	 * wp_enqueue_script( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
	 *
	 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/#stylesheets
	 * @link https://getbootstrap.com/docs/5.0/getting-started/introduction/
	 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
	 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
	 * @version 9.0.210714
	 * @since 9.0.210714
	 */
	public static function enqueue_scripts() {
	    //extra style for the plugin
	    wp_enqueue_style( 'vi-bc-css', plugins_url( '/style.css', __FILE__ ), NULL , NULL , 'all' );

	    //bootstrap 5 components
	    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2' );

	    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.2', true );
	}


    /*--------------------------------------------------------------
    # Reusable Functions
    --------------------------------------------------------------*/
    //

    /*--------------------------------------------------------------
    # Shortcode Functions (are plugin territory)
    --------------------------------------------------------------*/
    //

}

//enqueue scripts
add_action( 'wp_enqueue_scripts', Array( 'vi_components_bootstrap_5', 'enqueue_scripts' ) );