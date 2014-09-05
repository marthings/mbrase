<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title><?php wp_title(''); ?></title>
		<link rel="icon" href="favicon.ico">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php do_action("mbrase_before_header"); ?>
		<header>
			<?php get_template_part( 'templateparts/navigation'); ?>
		</header>
		<?php do_action("mbrase_after_header"); ?>
