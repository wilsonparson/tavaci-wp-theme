<?php /* Template Name: Payments */ ?>

<?php get_header(); ?>

<main id="payments" class="g-max-width-wrapper">
    <h1 class="g-page-title"><?= the_title(); ?></h1>
    <h2>How to Make a Payment</h2>
    <p>You have two options for making payments:</p>
    <div class="g-well">
        <div class="g-well-body">
            <?php get_template_part('template-parts/payment-options'); ?>
        </div>
    </div>

    <?php the_content(); ?>
</main>

<?php get_footer(); ?>