<?php 
// Uncomment include in functions.php

// Reponsive embeds
// http://alxmedia.se/code/2013/10/make-wordpress-default-video-embeds-responsive/

function mbrase_embed_html( $html ) {
		return '<div class="embed-container">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'mbrase_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'mbrase_embed_html' );

// Thumbnail upscale
// If a user uploads an image thats smaller than thumbnail size
// http://alxmedia.se/code/2013/10/thumbnail-upscale-correct-crop-in-wordpress/

function mbrase_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
    if ( !$crop ) return null; // let the wordpress default function handle this
 
    $aspect_ratio = $orig_w / $orig_h;
    $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);
 
    $crop_w = round($new_w / $size_ratio);
    $crop_h = round($new_h / $size_ratio);
 
    $s_x = floor( ($orig_w - $crop_w) / 2 );
    $s_y = floor( ($orig_h - $crop_h) / 2 );
 
    return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}
add_filter( 'image_resize_dimensions', 'mbrase_thumbnail_upscale', 10, 6 );

?>