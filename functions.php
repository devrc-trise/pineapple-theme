<?php
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
  wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_script');
function enqueue_custom_script() {
  wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'));
}

function home_page_sc() {
  wp_enqueue_style('movingbubbles-style', get_stylesheet_directory_uri().'/css/movingbubbles.css');
  wp_enqueue_script('movingbubbles-script', get_stylesheet_directory_uri().'/js/movingbubbles.js');
  get_template_part('pages/page', 'home');
}
add_shortcode('home_page', 'home_page_sc');
?>
