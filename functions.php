<?php
function banff_website_setup() {
	add_theme_support( 'wp-block-styles' );
}

function enqueue_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri('/css/bootstrap.min.css' ));

wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'),array('jquery'),'', true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );
add_action( 'after_setup_theme', 'banff_website_setup' );

