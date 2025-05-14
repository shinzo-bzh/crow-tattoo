<?php
/* Template Name: Hygiène */

get_header(); // Affiche l'entête du site
?>

<div class="section">
    <div class="hygiene-container">
        <?php 
        $titre = get_field('titre_hygiene');
        $texte = get_field('texte_hygiene');
        ?>

        <?php if ($titre) : ?>
            <h1 class="accueil__title accueil__title--animated"><?php echo esc_html($titre); ?></h1>
        <?php endif; ?>

        <?php if ($texte) : ?>
            <div class="hygiene__content">
                <?php echo wpautop(esc_textarea($texte)); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer(); // Affiche le pied de page
?>
