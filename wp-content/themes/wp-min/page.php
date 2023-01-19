<!-- page.php -->
<?php get_header(); ?>
<main>
    <h2>
        <?php the_title(); ?>
    </h2>
    <?php the_content(); ?>
</main>
<hr>
<aside>
    <?php $barra_lateral = carbon_get_the_post_meta( 'barra_lateral' ); ?>
    <?= $barra_lateral; ?>
</aside>
<?php get_footer(); ?>
