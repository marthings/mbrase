<?php
/**
* The template for displaying archive
*
* @package mbrase
* @since version 1.0
*/
get_header(); ?>

<div class="archive-wrapper">

	<?php if ( have_posts() ) { ?>

		<div class="archive-content">

		<h1>
			<?php
				if ( is_category() ) :
					single_cat_title();

				elseif ( is_tag() ) :
					single_tag_title();

				elseif ( is_author() ) :
					printf( __( 'Author: %s', 'mbrase' ), '<span class="vcard">' . get_the_author() . '</span>' );

				elseif ( is_day() ) :
					printf( __( 'Day: %s', 'mbrase' ), '<span>' . get_the_date() . '</span>' );

				elseif ( is_month() ) :
					printf( __( 'Month: %s', 'mbrase' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'mbrase' ) ) . '</span>' );

				elseif ( is_year() ) :
					printf( __( 'Year: %s', 'mbrase' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'mbrase' ) ) . '</span>' );

				else :
					_e( 'Archives', 'mbrase' );

				endif;
			?>
		</h1>

		<?php do_action("mbrase_before_post"); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content/content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php do_action("mbrase_after_post"); ?>

		<?php mbrase_paginate(); ?>


	<?php } else { ?>

		<?php get_template_part( 'content/content', 'none' ); ?>

	<?php } ?>

		</div> <!-- end archive-content -->

		<div class="sidebar">

			<?php get_sidebar(); ?>

		</div><!-- end sidebar -->

</div><!-- end archive-wrapper -->

<?php get_footer(); ?>
