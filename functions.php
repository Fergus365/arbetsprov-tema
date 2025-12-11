<?php

// Ladda CSS/JS
function wp_enqueue_assets() {
    wp_enqueue_style('wp-main-css', get_template_directory_uri() . '/assets/css/main.css', [], '1.0');
    wp_enqueue_script('wp-main-js', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'wp_enqueue_assets');

// Support
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

// Meny
register_nav_menus([
    'primary' => 'Primär meny'
]);