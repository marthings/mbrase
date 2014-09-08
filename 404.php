<?php
/**
* 404 page
*
* @package mbrase
* @since version 1.0
*/
get_header(); ?>

<div id="primary" class="error-wrapper">

	<?php while ( have_posts() ) : the_post(); ?>

		<h1><?php _e('Sorry the page you are looking for does not exist','mbrase'); ?></h1>

	<?php endwhile; ?>

</div><!-- end error-wrapper -->

<?php get_footer(); ?>
