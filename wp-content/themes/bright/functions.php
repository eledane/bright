<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage bright 
 * @since 1.0
 */

/**
 * Enqueues scripts and styles.
 *
 * @since Inbar 1.0
 */
function bright_scripts() {
    
       // Theme stylesheet.
	    wp_enqueue_style( 'general-style', get_stylesheet_uri() );

	    // Load other stylesheet.
	    wp_enqueue_style( 'bright-style', get_template_directory_uri() . '/css/style.css', array(), '' );
	    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '' );
 
    
	    // Load the javascripts
      wp_deregister_script('jquery');
	    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '', true );


	    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
	    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '', true );

	    wp_enqueue_script( 'fakeloader', get_template_directory_uri() . '/js/fakeLoader.min.js', array(), '', true );
	    wp_enqueue_script( 'classie', get_template_directory_uri() . '/js/classie.js', array(), '', true );
	    wp_enqueue_script( 'demo1', get_template_directory_uri() . '/js/demo1.js', array(), '', true );


	    wp_enqueue_script( 'mmenu', get_template_directory_uri() . '/js/jquery.mmenu.min.js', array( 'jquery' ), '', true );
	    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '', true );


	    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array( 'jquery' ), '', true );
	    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '', true );


	    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '', true );
	    wp_enqueue_script( 'toucheffects', get_template_directory_uri() . '/js/toucheffects.js', array(), '', true );


	    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '', true );
	    wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array(), '', true );


	    wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact_me.js', array( 'jquery' ), '', true );
	    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'bright_scripts' );

/*
 * create  new image styles for inbar theme
 */
function bright_new_image_sizes(){

   if ( function_exists( 'add_image_size' ) ) { 

	add_image_size( 'header_background_image', 1600,  988, array( 'center', 'center' ) );

    }
 }
 add_action('after_setup_theme', 'bright_new_image_sizes');
 
 
