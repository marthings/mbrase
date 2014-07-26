<?php

// The template for displaying comments. Needed since 3.0

if ( post_password_required() ) {
	return;
}
?>

	<?php if ( have_comments() ) { ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'mbrase' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>
			<nav>
				<?php _e( 'Comment navigation', 'mbrase' ); ?>
				<?php previous_comments_link( __( '&larr; Older Comments', 'mbrase' ) ); ?>
				<?php next_comments_link( __( 'Newer Comments &rarr;', 'mbrase' ) ); ?>
			</nav>
		<?php } ?>

	<?php } // have_comments() ?>

	<?php if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'mbrase' ); ?></p>
	<?php } ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
