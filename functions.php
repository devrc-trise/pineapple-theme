<?php
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
  wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
  wp_enqueue_style('pushmenu-style', get_stylesheet_directory_uri().'/css/push-menu.css');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_script');
function enqueue_custom_script() {
  wp_enqueue_script('pushmenu-script', get_stylesheet_directory_uri().'/js/push-menu.js', array('jquery'));
  wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'));
}

function home_page_sc() {
  wp_enqueue_style('movingbubbles-style', get_stylesheet_directory_uri().'/css/movingbubbles.css');
  wp_enqueue_script('movingbubbles-script', get_stylesheet_directory_uri().'/js/movingbubbles.js');
  wp_enqueue_script('bodymovin-script', get_stylesheet_directory_uri().'/js/bodymovin.js');
  wp_enqueue_script('backgroundvideo-script', get_stylesheet_directory_uri().'/js/backgroundVideo.js');
  wp_enqueue_style('aos-style', get_stylesheet_directory_uri().'/css/aos.css');
  wp_enqueue_script('aos-script', get_stylesheet_directory_uri().'/js/aos.js');
  wp_enqueue_script('home-script', get_stylesheet_directory_uri().'/js/home.js', array('jquery'));
  get_template_part('pages/page', 'home');
}
add_shortcode('home_page', 'home_page_sc');

function work_page_sc() {
  wp_enqueue_script('work-script', get_stylesheet_directory_uri().'/js/work.js', array('jquery'));
  get_template_part('pages/page', 'work');
};
add_shortcode('work_page', 'work_page_sc');

function contact_page_sc() {
  get_template_part('pages/page', 'contact');
};
add_shortcode('contact_page', 'contact_page_sc');

function about_page_sc() {
  wp_enqueue_script('about-script', get_stylesheet_directory_uri().'/js/about.js', array('jquery'));
  get_template_part('pages/page', 'about');
};
add_shortcode('about_page', 'about_page_sc');
?>
