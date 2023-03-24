<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="flex-container">
        <header id="header">
            <a href="<?php echo get_home_url(); ?>" id="logo" aria-label="Home"><?php get_template_part('template-parts/logo'); ?></a>
            <button type="button" id="hamburger-menu">
                <div></div>
                <div></div>
                <div></div>
            </button>
            <div id="desktop-nav">
                <?php wp_nav_menu(); ?>
            </div>
        </header>