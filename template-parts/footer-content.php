<?php require_once get_stylesheet_directory() . '/constants.php'; ?>

<footer id="footer">
    <div class="logo-wrapper" style="width: 80px;">
        <?php get_template_part('template-parts/logo'); ?>
    </div>
    <small>&copy; Tavaci <?php echo date('Y') ?></small>
    <div class="social-icons">
        <a href="https://www.instagram.com/tavaci_brighamcity_/">
            <?php get_template_part('template-parts/social-instagram'); ?>
        </a>
        <a href="https://www.facebook.com/groups/140184772705937" style="width: 60px;">
            <?php get_template_part('template-parts/social-facebook'); ?>
        </a>
    </div>
</footer>