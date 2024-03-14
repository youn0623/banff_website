<?php get_header(); ?>
<?php wp_nav_menu(); ?>
<?php get_template_part('part', 'hero'); ?>
<h1>this is my homepage</h1>
<img class="water-pic" src="<?php echo get_theme_file_uri('assets/water.jpg')?>">
<?php get_template_part('custom-template/user','info');?>
<?php get_footer(); ?>