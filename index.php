<?php get_header(); ?>
	<?php do_action("mbrase_before_post"); ?>
	<?php get_template_part( 'loops/loop', 'index' ); ?>
	<?php do_action("mbrase_after_post"); ?>
<?php get_footer(); ?>