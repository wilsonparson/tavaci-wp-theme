<?php

function enqueue_scripts()
{

    wp_enqueue_script('color-scheme', get_template_directory_uri() . '/js/color-scheme.js');

    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('global-style', get_template_directory_uri() . '/css/styles.css', array(), $theme_version);
    if (is_front_page()) {
        wp_enqueue_script('animate-headline-suffix', get_template_directory_uri() . '/js/animate-headline-suffix.js', array(), false, true);
    }
    wp_enqueue_script('mobile-nav', get_template_directory_uri() . '/js/mobile-nav.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

// Don't load admin bar styles in front end. They ruin 100% height on html.
add_filter('show_admin_bar', 'is_blog_admin');

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
