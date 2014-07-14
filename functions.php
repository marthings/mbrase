<?php

//@ THEME HOOKS
//@ mbrase_after/before_body
//@ mbrase_after/before_header
//@ mbrase_after/before_footer
//@ mbrase_after/before_post

// Include ACF in theme
// Include fields

// include_once( get_template_directory() . '/acf/acf-fields.php' );

include_once( get_template_directory() . '/acf/acf.php' );
add_filter('acf/settings/dir', function( $dir ){
		return get_template_directory_uri() . '/acf/';
});
add_filter('acf/settings/path', function( $path ){
		return get_template_directory() . '/acf/';
});

// Footer options

if( function_exists('acf_add_options_sub_page') )
{
	acf_add_options_sub_page(array(
			'title' => 'Sidfot',
			'parent' => 'options-general.php',
			'capability' => 'manage_options'
	));
}

// Common options

if( function_exists('acf_add_options_sub_page') )
{
	acf_add_options_sub_page(array(
			'title' => 'Varumärke',
			'parent' => 'options-general.php',
			'capability' => 'manage_options'
	));
}


// Menus

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'main_menu' => __( 'Main Menu', 'mbrase-nav' ),
			'secondary_menu' => __( 'Secondary Menu', 'mbrase-nav' ),
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

// Reponsive embeds

function mbrase_embed_html( $html ) {
		return '<div class="embed-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'mbrase_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'mbrase_embed_html' );

// Widgets

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Blog sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Front page',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

?>