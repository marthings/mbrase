<?php
/**
* The template for displaying page content
*
* @package mbrase
* @since version 1.0
*/
 get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content/content', 'page' ); ?>

	<?php endwhile; ?>

<?php get_footer(); ?>
