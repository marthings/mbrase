<?php
/**
* Bootstrap navigation with bootstrap navwalker
*
* @package mbrase
* @since version 2.0
*/
?>

<div class="navbar">
	<div class="container">
		<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
			</button>
			<?php
			$has_logo =  get_field('site_logo', 'option');
			if ($has_logo) { ?>
				<a class="navbar-brand has-logo" href="/"><img src="<?php the_field('site_logo', 'option'); ?>"></a>
			<?php } else { ?>
				<a class="navbar-brand" href="/"><?php bloginfo('name'); ?></a>
			<?php } ?>
		</div>
		 <?php
			wp_nav_menu( array(
				'menu'              => 'primary',
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'main-navbar',
				'menu_class'        => 'nav navbar-nav navbar-right',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker())
			);
		?>
	</div><!-- .container -->
</div><!-- .navbar -->
