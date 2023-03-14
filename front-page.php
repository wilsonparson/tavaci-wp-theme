<?php get_header(); ?>

<?php
$headline_suffix = get_field('headline_suffix');
$headline_suffix_words = preg_split('/,\s*/', $headline_suffix);
?>

<h1 class="headline">
    <div><?= the_field('headline_prefix'); ?></div>
    <div class="headline__suffix"><span data-js="word-cycler" data-words="<?= $headline_suffix ?>"><?= $headline_suffix_words[0] ?>.</span></div>
</h1>

<p class="blurb">
    We teach kids the performing arts in a way that helps them develop invaluable life skills.
</p>


<?php get_footer(); ?>