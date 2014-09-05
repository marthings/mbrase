<?php
/**
*
* @package mbrase
* @since version 2.0
* Uncomment include in functions.php
*
*/

// Paginate posts / pages / search results

function mbrase_paginate() {
	global $wp_query;
	$big = 99999999;
	echo paginate_links(array(
		'base' => str_replace($big, '%#%', get_pagenum_link($big)),
		'format' => '?paged=%#%',
		'total' => $wp_query->max_num_pages,
		'current' => max(1, get_query_var('paged')),
		'show_all' => false,
		'end_size' => 2,
		'mid_size' => 3,
		'prev_next' => true,
		'prev_text' => '&laquo;',
		'next_text' => '&raquo;',
		'type' => 'list'
	));
}

?>
