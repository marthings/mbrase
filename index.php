<?php
/**
* Default post listing
*
* @package mbrase
* @since version 1.0
*/
get_header(); ?>

<div class="blog-wrapper">

	<?php if ( have_posts() ) { ?>

		<div class="blog-content">

		<?php do_action("mbrase_before_post"); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content/content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php do_action("mbrase_after_post"); ?>

		<?php mbrase_paginate(); ?>

	<?php } else { ?>

			<?php get_template_part( 'content/content', 'none' ); ?>

	<?php } ?>

		</div><!-- end archive-content -->

		<?php get_sidebar(); ?>

</div><!-- end blog-wrapper -->

<?php get_footer(); ?>
