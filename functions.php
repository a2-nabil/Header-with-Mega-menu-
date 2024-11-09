<?php
function a2n_header_assets()
{
    // Enqueue header fonts
    wp_enqueue_style("header-fonts", get_stylesheet_directory_uri() . "/assets/fonts/fonts.css", [], time(), 'all');

    // Enqueue header stylesheet
    wp_enqueue_style("header-style", get_stylesheet_directory_uri() . "/assets/css/header.css", [], time(), 'all');

    // Enqueue header script
    wp_enqueue_script("header-script", get_stylesheet_directory_uri() . "/assets/js/header.js", [], time(), true);
}
add_action('wp_enqueue_scripts', 'a2n_header_assets', 20);
