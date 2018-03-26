<?php

function enqueue_parent_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/build/theme-style.css' );
}

function enqueue_bootstrap_styles() {
  wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css', array());
  wp_enqueue_script( 'bootstrap-script', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_styles');

?>
