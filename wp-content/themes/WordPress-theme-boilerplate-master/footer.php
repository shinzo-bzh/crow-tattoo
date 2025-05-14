<?php wp_footer(); ?>

<footer class="site-footer">
    <div class="site-footer__container">
        <a href="<?php echo get_field('contact_'); ?>" class="site-footer__link">Contact</a>
        <a href="<?php echo get_field('mes_realisations_'); ?>" class="site-footer__link">Réalisations</a>
        <div class="site-footer__social">
            <a href="https://www.instagram.com/shinzo.bzh/target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/jahcitybzh/" class="site-footer__social-link" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
        </div>
    </div>
    <div class="site-footer__copyright">
        © <?php echo date('Y'); ?> Crow Tattoo. Tous droits réservés.
    </div>
</footer>

</body>
</html>
