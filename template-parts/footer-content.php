<?php require_once get_stylesheet_directory() . '/constants.php'; ?>

<footer id="footer">
    <div class="g-max-width-wrapper">
        <div class="sections-wrapper">
            <section class="logo">
                <div class="logo-wrapper" style="width: 120px;" aria-label="Tavaci School of Performing Arts">
                    <?php get_template_part('template-parts/logo-registered'); ?>
                </div>
            </section>
            <section class="contact">
                <h2 class="section-title">Contact</h2>
                <address>
                    Megan Owen<br>
                    775 W 2250 S Perry, UT 84302<br>
                    <a href="mailto:meggyowen@gmail.com">meggyowen@gmail.com</a><br>
                    <a href="tel:+14357203069">435-720-3069</a>
                </address>
            </section>
            <section class="social">
                <h2 class="section-title">Follow Us</h2>
                <div class="social-icons">
                    <a title="Instagram" aria-label="Instagram" href="https://www.instagram.com/tavaci_brighamcity_/" style="width: 28px;">
                        <?php get_template_part('template-parts/social-instagram'); ?>
                    </a>
                    <a title="Facebook" aria-label="Facebook" href="https://www.facebook.com/groups/140184772705937" style="width: 28px;">
                        <?php get_template_part('template-parts/social-facebook'); ?>
                    </a>
                </div>
            </section>
        </div>
        <small>&copy; 2023–present Tavaci School of Performing Arts. All Rights Reserved.</small>
    </div>
</footer>