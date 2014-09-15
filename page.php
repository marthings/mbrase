<?php
/**
* The template for displaying page content
*
* @package mbrase
* @since version 1.0
*/
 get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div id="primary" class="page-wrapper">

			<?php get_template_part( 'content/content', 'page' ); ?>

		</div><!-- end page-wrapper -->

	<?php endwhile; ?>

<?php get_footer(); ?>
