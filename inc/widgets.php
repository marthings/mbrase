<?php 
// Register Widgets
// Theese should be translatable later on

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

?>