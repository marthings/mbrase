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

// Custom styles in Wordpress backend editor

add_editor_style('/css/editor-style.css');

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