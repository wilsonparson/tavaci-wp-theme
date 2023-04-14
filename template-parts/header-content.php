<header id="header">
    <div class="wrapper">
        <div class="content g-max-width-wrapper">
            <a href="<?php echo get_home_url(); ?>" class="logo" aria-label="Home"><?php get_template_part('template-parts/logo'); ?></a>
            <div class="mobile-nav-wrapper">
                <?php get_template_part('template-parts/hamburger-button'); ?>
            </div>
            <nav class="desktop-nav">
                <?php wp_nav_menu(); ?>
            </nav>
        </div>
    </div>
</header>