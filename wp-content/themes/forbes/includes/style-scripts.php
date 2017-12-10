<?php

function forbes_style() {

    wp_enqueue_style('foundation-css', get_template_directory_uri() . '/assets/foundation/css/foundation.css', false);

    wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/foundation/css/app.css', false);

    wp_enqueue_style('main-style', get_stylesheet_uri());

    wp_register_script('foundation_script', get_template_directory_uri() . '/assets/foundation/js/vendor/foundation.js', array());

    wp_register_script('what-input_script', get_template_directory_uri() . '/assets/foundation/js/vendor/what-input.js', array());

    

    wp_register_script('custom_script', get_template_directory_uri() . '/assets/js/script.js', array());

    wp_enqueue_script('foundation_script');

    wp_enqueue_script('what-input_script');
    
   

    wp_enqueue_script('custom_script');
}

add_action('wp_enqueue_scripts', 'forbes_style');

function script_footer() {
//wp_register_script('app_script', get_template_directory_uri() . '/assets/foundation/js/app.js', array());
// wp_enqueue_script('app_script');
    
}

add_action('wp_footer', 'script_footer');
