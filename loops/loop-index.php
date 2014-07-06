<?php while (have_posts()) : the_post(); ?>
   	<?php get_template_part( 'templateparts/content', get_post_format() ); ?>
<?php endwhile;?>