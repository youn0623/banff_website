<?php get_header(); ?>
<?php wp_nav_menu(); ?>
<?php the_title(); ?>

<?php if (is_page('Attractions')) : ?>
    <!-- Display images only on 'Attractions' page -->
    <img class="water-pic" src="<?php echo get_theme_file_uri('assets/wood.jpg')?> ">
<?php endif; ?>

<?php if (is_page('About us')) : ?>
    <!-- Display images only on 'About us' page -->
    <img class="water-pic" src="<?php echo get_theme_file_uri('assets/stick.jpg')?> ">
<?php endif; ?>

<?php if (is_page('Contact')) : ?>
    <!-- Display images only on 'Contact' page -->
    <img class="water-pic" src="<?php echo get_theme_file_uri('assets/water.jpg')?> ">
<?php endif; ?>

<?php the_content(); ?>
<?php get_template_part('custom-template/google','map');?>
<?php get_footer(); ?>
