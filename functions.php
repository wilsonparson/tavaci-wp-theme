<?php

function enqueue_scripts()
{

    wp_enqueue_style('global-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');
