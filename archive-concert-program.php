<?php get_header(); ?>

<?php
$query = new WP_Query(array('post_type' => 'concert-program'));
?>

<main id="archive-concert-program" class="g-max-width-wrapper">
    <h1 class="g-page-title"><?php post_type_archive_title(); ?></h1>
    <div class="container">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php
            $title = get_field('title');
            $date = get_field('date');
            ?>
            <a href="<?php the_permalink(); ?>" class="concert-program">
                <h2 class="date"><?= $date ?></h2>
                <p class="title">"<?= $title ?>"</p>
            </a>
    </div>
</main>


<?php endwhile; ?>

<?php get_footer(); ?>