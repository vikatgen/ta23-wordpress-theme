<?php

function florafauna_scripts() {
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/tailwind.min.css', array(), '1.0.0');
    wp_enqueue_script('alpine-js', 'https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js', array(), '3.13.3', true);
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;display=swap', false);
}

add_action('wp_enqueue_scripts', 'florafauna_scripts');