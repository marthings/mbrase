<?php

//@ THEME HOOKS
//@ mbrase_after/before_body
//@ mbrase_after/before_header
//@ mbrase_after/before_footer
//@ mbrase_after/before_post

// If using woocommerce
// require( 'inc/woocommerce.php' );

// Include Hooks
require( 'inc/hooks.php' );

// Include Filters
require( 'inc/filters.php' );

// Include Widgets
require( 'inc/widgets.php' );

// Include Custom tags
require( 'inc/template-tags.php' );

// Include ACF in theme
// Change path to ACF when included in theme
include_once( get_template_directory() . '/inc/acf/acf.php' );
include_once( get_template_directory() . '/inc/acf/acf-fields.php' );
add_filter('acf/settings/dir', function( $dir ){
		return get_template_directory_uri() . '/inc/acf/';
});
add_filter('acf/settings/path', function( $path ){
		return get_template_directory() . '/inc/acf/';
});

// Include custom shortcodes
require( 'inc/shortcode.php' );

// Include walker for bootstrap navigation
require( 'inc/wp_bootstrap_navwalker.php' );

// Remove update - theme controls the version support
require( 'inc/disable-wordpress-updates/disable-updates.php' );

// Common options

if( function_exists('acf_add_options_sub_page') )
{
	acf_add_options_sub_page(array(
			'title' => 'Theme options',
			'parent' => 'options-general.php',
			'capability' => 'manage_options'
	));
}

// Theme defaults

// Menus

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'mbrase' ),
			'secondary' => __( 'Secondary Menu', 'mbrase' ),
		)
	);
}

// Enqueue javascript

function mbrase_scripts()  
{
	wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js', array( 'jquery' ),'', '1.0', true );
	wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array( 'jquery' ),'', '1.0', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' ),'', '1.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ),'', '1.0', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),'', '1.0', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ),'', '1.0', true ); // needs activation
	wp_enqueue_script( 'magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array( 'jquery' ),'', '1.0', true ); // needs activation
}
add_action( 'wp_enqueue_scripts', 'mbrase_scripts' );

// Post formats

add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

// Thumbnail support 
// Uncomment if needed

add_theme_support( 'post-thumbnails' );

// regular size
// add_image_size( 'regular-thumb', 400, 350, true );

// medium size
// add_image_size( 'medium-thumb', 650, 500, true );
	
// large thumbnails
// add_image_size( 'large-thumb', 960, '' );

?>