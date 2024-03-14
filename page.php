<?php get_header(); ?>
<?php get_template_part('custom-template/user','info');?>
<?php wp_nav_menu(); ?>
<?php the_title(); ?>
<img src="<?php echo get_theme_file_uri('assets/wood.jpg')?>">
<img src="<?php echo get_theme_file_uri( 'assets/stick.jpg' ); ?>">
<img class= "water-pic" src="<?php echo get_theme_file_uri( 'assets/water.jpg' ); ?>">
<?php the_content(); ?>
<?php get_template_part('custom-template/user','info');?>
<?php get_footer(); ?>