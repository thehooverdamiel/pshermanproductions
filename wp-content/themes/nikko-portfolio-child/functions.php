<?php

function enqueue_parent_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/build/theme-style.css' );
}

function enqueue_bootstrap() {
  wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css', array());
  wp_enqueue_script( 'bootstrap-script', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
}

function enqueue_fontawesome() {
  wp_enqueue_script( 'font-awesome-script', get_stylesheet_directory_uri() . '/font-awesome/svg-with-js/js/fontawesome-all.min.js', array(), true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap');
add_action( 'wp_enqueue_scripts', 'enqueue_fontawesome');

?>
