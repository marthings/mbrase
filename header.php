<!doctype html>
<html lang="sv">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title><?php wp_title(''); ?></title>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php wp_head(); ?>
		<style type="text/css">
			html{margin:0 !important;}
		</style>
	</head>
	<body <?php body_class($class); ?>>
		<?php do_action("mbrase_before_header"); ?>	
		<header>
			<div class="navbar">
				<div class="container">
					<div class="navbar-header">
					    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					    	<span class="sr-only">Toggle navigation</span>
					    	<span class="icon-bar"></span>
					    	<span class="icon-bar"></span>
					    	<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">	
					<?php

					$navs = array(
						'theme_location'  => '',
						'menu'            => 'Primary Menu',
						'container'       => 'false',
						'menu_class'      => 'nav navbar-nav',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 1,
						'walker'          => ''
					);
					
					wp_nav_menu( $navs );
					
					?>
					</div><!-- /.navbar-collapse -->
				</div><!-- /. container -->
			</div><!-- /. navbar -->
		</header>
		<?php do_action("mbrase_after_header"); ?>