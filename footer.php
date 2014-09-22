		<footer>
			<?php do_action("mbrase_before_footer"); ?>
			<div class="footer-content">
				<?php the_field('footer_info', 'option'); ?>
			</div>
			<?php do_action("mbrase_after_footer"); ?>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
