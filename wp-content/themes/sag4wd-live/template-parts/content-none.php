<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package SAG4WD_Live
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php _e('Nothing Found', 'sag4wd-live'); ?></h1>
    </header><!-- .page-header -->

    <div class="page-content">
        <?php
        if (is_home() && current_user_can('publish_posts')) :
            ?>
            <p>
                <?php
                printf(
                    wp_kses(
                        __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'sag4wd-live'),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ),
                    esc_url(admin_url('post-new.php'))
                );
                ?>
            </p>
        <?php elseif (is_search()) : ?>
            <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'sag4wd-live'); ?></p>
            <?php
            get_search_form();
        else :
            ?>
            <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sag4wd-live'); ?></p>
            <?php
            get_search_form();
        endif;
        ?>
    </div><!-- .page-content -->
</section><!-- .no-results -->
