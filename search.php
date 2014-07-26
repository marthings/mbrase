<?php get_header(); ?>

	<?php if ( have_posts() ) { ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content/content', 'search' ); ?>

		<?php endwhile; ?>

		<?php mbrase_paginate(); ?>

	<?php } else { ?>

		<?php get_template_part( 'content/content', 'none' ); ?>

	<?php } ?>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
