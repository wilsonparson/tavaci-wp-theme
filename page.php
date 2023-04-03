<?php get_header(); ?>
<?php get_template_part('template-parts/header-content'); ?>

<main>
    <div class="g-max-width-wrapper">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>