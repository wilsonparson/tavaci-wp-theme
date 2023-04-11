<header id="header-content">
    <div class="g-max-width-wrapper">
        <div class="content">
            <a href="<?php echo get_home_url(); ?>" class="logo" aria-label="Home"><?php get_template_part('template-parts/logo'); ?></a>
            <nav class="desktop-nav">
                <?php wp_nav_menu(); ?>
            </nav>
            <?php get_template_part('template-parts/hamburger-button'); ?>
        </div>
    </div>
</header>