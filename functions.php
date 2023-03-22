<?php

function enqueue_scripts()
{

    wp_enqueue_style('global-style', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_script('animate-headline-suffix', get_template_directory_uri() . '/js/animate-headline-suffix.js');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');
