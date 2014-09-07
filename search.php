<?php
/**
* The template for displaying search results
*
* @package mbrase
* @since version 1.0
*/
get_header(); ?>

<div class="search-wrapper">

	<?php if ( have_posts() ) { ?>

	<div class="search-content">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content/content', 'search' ); ?>

		<?php endwhile; ?>

		<?php mbrase_paginate(); ?>

	<?php } else { ?>

		<?php get_template_part( 'content/content', 'none' ); ?>

	<?php } ?>

	</div><!-- end search-content -->

	<?php get_sidebar(); ?>

</div><!-- end search-wrapper -->

<?php get_footer(); ?>
