<?php get_header(); ?>

<?php
$headline_suffix = get_field('headline_suffix');
$headline_suffix_words = preg_split('/,\s*/', $headline_suffix);
?>

<div id="hero">
    <h1 class="headline">
        <div><?= the_field('headline_prefix'); ?></div>
        <div class="headline-suffix" data-js="headline-suffix"><span data-js="word-cycler" data-words="<?= $headline_suffix ?>"><?= $headline_suffix_words[0] ?>.</span></div>
    </h1>

    <p class="blurb">
        We teach kids the performing arts in a way that helps them develop invaluable life skills.
    </p>
</div>

<?php the_content(); ?>



<?php get_footer(); ?>