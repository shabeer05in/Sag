<?php
/**
 * The footer for SAG4WD Live Theme
 *
 * @package SAG4WD_Live
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="wrap">
            <div class="site-info">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> &mdash; <?php _e('Premium 4x4 Customization in Oman', 'sag4wd-live'); ?></p>
                <p>
                    <?php _e('Maabilah Industrial Area, Road #12 — Muscat, Oman', 'sag4wd-live'); ?><br>
                    <strong>+968 9966 9903 / +968 9512 1532</strong><br>
                    <a href="mailto:info@sag4wd.com">info@sag4wd.com</a>
                </p>
            </div><!-- .site-info -->
        </div><!-- .wrap -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
