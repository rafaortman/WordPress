<!-- page.php -->
<?php get_header(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
<?php $barra_lateral = carbon_get_the_post_meta( 'barra_lateral' ); ?>
<hr>
<?= $barra_lateral; ?>
<?php get_footer(); ?>
