<?php
/**
 * Template Name: Galerie
 */

get_header(); ?>

<div class="section">
    <div class="accueil__gallery">
        <h1 class="accueil__title accueil__title--animated">Galerie</h1>
        <?php echo do_shortcode('[rl_gallery id="26"]'); ?>
    </div>
</div>

<?php get_footer(); ?>
