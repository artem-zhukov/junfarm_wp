<?php

function theme_name_scripts(){
    wp_enqueue_style('reset', get_template_directory_uri() . '/styles/reset.css');
    wp_enqueue_style('style', get_stylesheet());
    wp_enqueue_style('icons', get_template_directory_uri() . '/styles/icons.css');
    wp_enqueue_style('pe-icon-social', get_template_directory_uri() . '/styles/pe-icon-social.css');
    wp_enqueue_style('pe-icon-social', get_template_directory_uri() . '/styles/pe-icon-social.css');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/libs/jquery/dist/jquery.min.js');
    wp_enqueue_script('jquery_easing', get_template_directory_uri() . '/js/jquery_easing.min.js');
    wp_enqueue_script('parallax', get_template_directory_uri() . '/libs/parallax.js/parallax.js');
    wp_enqueue_script('carousel', get_template_directory_uri() . '/js/carousel.js');
    wp_enqueue_script('maskedinput.min', get_template_directory_uri() . '/js/maskedinput.min.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
}

add_action('wp_enqueue_scripts', 'theme_name_scripts')

?>
