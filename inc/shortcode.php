<?php
/*
*
* @package mbrase
* @since version 2.0
* Uncomment include in functions.php
*
*/

// Remove the annoying paragraphs

function mbrase_empty_paragraph_fix( $content ) {

	$array = array (
		'<p>[' => '[',
		']</p>' => ']',
		']<br />' => ']'
		);

		$content = strtr( $content, $array );

		return $content;
	}

add_filter( 'the_content', 'mbrase_empty_paragraph_fix' );

// Row shortcode

function mbrase_row_shortcode( $atts , $content = null ) {

return '<div class="row">' . do_shortcode($content) . '</div>';

}
add_shortcode( 'row', 'mbrase_row_shortcode' );

// Grid shortcode

function mbrase_grid_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'md' 	=> '',
			'sm' 	=> '',
			'xs'		=> ''
		), $atts )
	);

	// Code
return '<div class="col-sm-' . $xs . ' col-sm-' . $sm . ' col-sm-' . $md . ' "> ' . do_shortcode($content) . '</div>';

}
add_shortcode( 'column', 'mbrase_grid_shortcode' );

// Antispam
// [cloak email="me@email.com"]

function email_cloaking_shortcode( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'email' => '',
		), $atts )
	);

	// Code
	return antispambot( $email );

}
add_shortcode( 'cloak', 'email_cloaking_shortcode' );

// Button shortcode
function mbrase_button_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'class' => 'btn-default',
			'link'	=> '',
		), $atts )
	);

	// Code
return '<a class="btn ' . $class . '" href="'. $link .'"> ' . do_shortcode($content) . '</a>';

}
add_shortcode( 'button', 'mbrase_button_shortcode' );

?>
