<?php
/**
 * Custom Functions.
 *
 * @package capella
 */

// Constants
if ( ! defined( 'BLANK_THEME_BUILD_URI' ) ) {
	define( 'BLANK_THEME_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

function capella_add_theme_scripts() {

	wp_enqueue_style( 'main', BLANK_THEME_BUILD_URI . '/css/main.css', false, '1.1', 'all' );

}

add_action( 'wp_enqueue_scripts', 'capella_add_theme_scripts' );

function register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu' ),
		'extra-menu' => __( 'Extra Menu' )
	   )
	 );
   }
   add_action( 'init', 'register_my_menus' );
  