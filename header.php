<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header">
        <a href="/" class="logo" aria-label="Home"><?php get_template_part('template-parts/logo'); ?></a>
        <?php wp_nav_menu(); ?>
    </header>