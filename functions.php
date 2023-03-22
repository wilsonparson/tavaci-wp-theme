<?php

function enqueue_scripts()
{

    wp_enqueue_style('global-style', get_template_directory_uri() . '/css/styles.css');
    if (is_front_page()) {
        wp_enqueue_script('animate-headline-suffix', get_template_directory_uri() . '/js/animate-headline-suffix.js');
    }
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

// Don't load admin bar styles in front end. They ruin 100% height on html.
add_filter('show_admin_bar', 'is_blog_admin');
