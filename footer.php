		<?php do_action("mbrase_before_footer"); ?>
		<footer>
			<?php the_field('footer_info', 'option'); ?>
		</footer>
		<?php do_action("mbrase_after_footer"); ?>
		<?php wp_footer(); ?>
	</body>
</html>
