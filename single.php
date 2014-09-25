<?php
/**
* The template for displaying single posts
*
* @package mbrase
* @since version 1.0
*/
get_header(); ?>

<div id="primary">

	<div class="single-wrapper">

		<?php do_action("mbrase_before_blog"); ?>

		<div class="single-content">

		<?php do_action("mbrase_before_post"); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content/content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) {
					comments_template();
				}
			?>

		<?php endwhile; // end of the loop. ?>

		<?php do_action("mbrase_after_post"); ?>

		</div><!-- end single-content -->

		<?php get_sidebar(); ?>

		<?php do_action("mbrase_after_blog"); ?>

	</div><!-- end single-wrapper -->

</div><!-- end #primary -->

<?php get_footer(); ?>
