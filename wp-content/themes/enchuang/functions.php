<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Enchuang 
 * @since 1.0
 */

/**
 * Enqueues scripts and styles.
 *
 * @since Enchuang 1.0
 */
function enchuang_scripts() {
    
       // Theme stylesheet.
	    wp_enqueue_style( 'general-style', get_stylesheet_uri() );

	    // Load other stylesheet.
	    wp_enqueue_style( 'enchuang-style', get_template_directory_uri() . '/css/style.css', array(), '' );
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

	    // Load the html5 shiv.
	    wp_enqueue_script( 'html5shive', get_theme_file_uri( '/js/html5shiv.min.js' ), array(), '3.7.2' );
    	wp_script_add_data( 'html5shive', 'conditional', 'lt IE 9' );

      wp_enqueue_script( 'respond', get_theme_file_uri( '/js/respond.min.js' ), array(), '1.4.2' );
	    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );


}
add_action( 'wp_enqueue_scripts', 'enchuang_scripts' );

/*
 * create  new image styles for  enchuang theme
 */
function enchuang_new_image_sizes(){

   if ( function_exists( 'add_image_size' ) ) { 

	add_image_size( 'header_background_image', 1600,  988, array( 'center', 'center' ) );

    }
 }
 add_action('after_setup_theme', 'enchuang_new_image_sizes');
 

/*
*
* remove dns prefetch
*
*/

function enchuang_remove_dns_prefetch( $hints, $relation_type ) {

    if ( 'dns-prefetch' === $relation_type ) {
    
    return array_diff( wp_dependencies_unique_hosts(), $hints );
    
    }

return $hints;
}

add_filter( 'wp_resource_hints', 'enchuang_remove_dns_prefetch', 10, 2 );

//remove some unnecessary tags in header generated by wordpress
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'feed_links', 2 ); 
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'rest_output_link_wp_head');

 /*
 * register header menu and footer menu
 */
 function enchuang_register_menus() {
       register_nav_menus(
	       array(
	         'header-menu' => __( 'Header Menu' ),
		       'footer-menu' => __( 'Footer Menu' ),
	            )
          );
        }
 add_action( 'init', 'enchuang_register_menus' );

