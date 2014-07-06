<?php 
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

if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name' => 'Main Sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

?>