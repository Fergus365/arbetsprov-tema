<?php

// Ladda CSS/JS
function wp_enqueue_assets() {
    wp_enqueue_style('wp-main-css', get_template_directory_uri() . '/assets/css/main.css', [], '1.0');
    wp_enqueue_script('wp-main-js', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'wp_enqueue_assets');

// Meny Support
register_nav_menus([
    'primary' => 'Primär meny'
]);

// Lightbox Support
function enqueue_acf_lightbox() {
    wp_enqueue_style('glightbox-css', 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css');
    wp_enqueue_script('glightbox-js', 'https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js', array(), null, true);
    wp_enqueue_script('acf-lightbox-init', get_template_directory_uri() . '/js/acf-lightbox.js', array('glightbox-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_acf_lightbox');
