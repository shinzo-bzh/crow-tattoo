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
                        <?php 
                        $tel = get_field('numero_telephone');
                        echo $tel ? nl2br(esc_html($tel)) : 'Non renseigné';
                        ?>
                    </div>
                </li>

                <li>
                    <strong>E-mail:</strong>
                    <div>
                        <?php 
                        $email = get_field('adresse_mail');
                        echo $email ? nl2br(esc_html($email)) : 'Non renseigné';
                        ?>
                    </div>
                </li>

                <li>
                    <strong>Horaires:</strong>
                    <div>
                        <?php 
                        $horaires = get_field('horraires');
                        echo $horaires ? nl2br(esc_html($horaires)) : 'Non renseigné';
                        ?>
                    </div>
                </li>
            </ul>
        </div>

        <div class="contact-social">
            <?php
            $lien_fb = get_field('lien_fb');
            $lien_insta = get_field('lien_insta');
            ?>

            <?php if ($lien_fb) : ?>
                <a href="<?php echo esc_url($lien_fb); ?>" target="_blank" aria-label="Lien vers Facebook">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
            <?php endif; ?>

            <?php if ($lien_insta) : ?>
                <a href="<?php echo esc_url($lien_insta); ?>" target="_blank" aria-label="Lien vers Instagram">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer(); // Affiche le pied de page
?>
