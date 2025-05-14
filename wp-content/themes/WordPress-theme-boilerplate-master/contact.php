<?php
/* Template Name: Contact */

get_header(); // Affiche l'entête du site
?>

<div class="section">
    <div class="container">
        <h1 class="contact__title">Contact</h1>
        
        <div class="card contact-info">
            <ul>
                <li>
                    <strong>Numéro de téléphone:</strong>
                    <div>
                        <?php echo nl2br(get_field('numero_telephone')); ?>
                    </div>
                </li>

                <li>
                    <strong>E-mail:</strong>
                    <div>
                        <?php echo nl2br(get_field('adresse_mail')); ?>
                    </div>
                </li>

                <li>
                    <strong>Horaires:</strong>
                    <div>
                        <?php echo nl2br(get_field('horraires')); ?>
                    </div>
                </li>
            </ul>
        </div>

        <div class="contact-social">
            <?php
            // Récupérer les liens
            $lien_fb = get_field('lien_fb');
            $lien_insta = get_field('lien_insta');

            // Vérifier si les liens existent avant d'afficher les icônes
            if ($lien_fb) : ?>
                <a href="<?php echo esc_url($lien_fb); ?>" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook"></i>
                </a>
            <?php endif; ?>

            <?php if ($lien_insta) : ?>
                <a href="<?php echo esc_url($lien_insta); ?>" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer(); // Affiche le pied de page
?>