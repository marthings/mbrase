<?php while (have_posts()) : the_post(); ?>
   	<?php get_template_part( 'templateparts/blog', get_post_format() ); ?>
<?php endwhile;?>