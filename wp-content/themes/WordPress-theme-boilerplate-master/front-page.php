<?php
/* Template Name: Accueil */

get_header(); // Affiche l'entête du site
?>

<div class="section">
    <div class="accueil-container">
        <!-- Afficher le titre de bienvenue -->
        <?php if (get_field('titre_bienvenue')) : ?>
            <h1 class="accueil__title accueil__title--animated"><?php the_field('titre_bienvenue'); ?></h1>
        <?php endif; ?>

        <!-- Afficher la vidéo d'accueil (si c'est un champ de type oEmbed ou URL) -->
        <?php 
        $video_accueil = get_field('video_accueil');
        if ($video_accueil) : ?>
            <div class="accueil__video">
                <?php echo wp_oembed_get($video_accueil); ?>
            </div>
        <?php endif; ?>

        <!-- Afficher la galerie avec le shortcode du plugin -->
        <div class="accueil__gallery">
            <?php echo do_shortcode('[rl_gallery id="26"]'); ?>
        </div>

        <!-- Afficher le titre et texte de prestation -->
        <?php if (get_field('titre_presta')) : ?>
            <h1 class="accueil__title accueil__title--animated"><?php the_field('titre_presta'); ?></h1>
        <?php endif; ?>

        <?php if (get_field('texte_presta')) : ?>
            <p class="accueil__presta-text"><?php the_field('texte_presta'); ?></p>
        <?php endif; ?>

        <!-- Afficher les avis Google -->
        <div class="accueil__avis">
            <h1 class="accueil__title accueil__title--animated">Avis Google</h1>
            <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
        </div>
    </div>
</div>

<?php
get_footer(); // Affiche le pied de page
?>
