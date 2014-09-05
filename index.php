<?php
/**
* Default post listing
*
* @package mbrase
* @since version 1.0
*/
get_header(); ?>

	<?php if ( have_posts() ) { ?>

		<?php do_action("mbrase_before_post"); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content/content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php do_action("mbrase_after_post"); ?>

		<?php mbrase_paginate(); ?>

	<?php } else { ?>

		<?php get_template_part( 'content/content', 'none' ); ?>

	<?php } ?>

<?php get_footer(); ?>
