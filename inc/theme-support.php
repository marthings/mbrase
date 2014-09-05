<?php
/**
*
* @package mbrase
* @since version 2.0
*
*/

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 720;

if ( ! function_exists('mbrase_theme_features') ) {

// Register Theme Features
function mbrase_theme_features()  {

	// Add theme support for Post Formats
	$formats = array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat', );
	add_theme_support( 'post-formats', $formats );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// regular size
	// add_image_size( 'regular-thumb', 400, 350, true );

	// medium size
	// add_image_size( 'medium-thumb', 650, 500, true );

	// large thumbnails
	// add_image_size( 'large-thumb', 960, '' );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style( '' );

	// Add theme support for Translation
	load_theme_textdomain( 'mbrase', get_template_directory() . '/language' );
}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'mbrase_theme_features' );

}
?>
