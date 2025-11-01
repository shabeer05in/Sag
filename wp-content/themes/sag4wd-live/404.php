<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package SAG4WD_Live
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <section class="error-404 not-found">
            <div class="wrap">
                <header class="page-header">
                    <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'sag4wd-live'); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <p><?php _e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'sag4wd-live'); ?></p>

                    <?php get_search_form(); ?>

                    <div class="not-found-links" style="margin-top: 2rem;">
                        <h2><?php _e('Quick Links', 'sag4wd-live'); ?></h2>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home', 'sag4wd-live'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/garage')); ?>"><?php _e('Garage', 'sag4wd-live'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/parts')); ?>"><?php _e('Parts', 'sag4wd-live'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><?php _e('Contact', 'sag4wd-live'); ?></a></li>
                        </ul>
                    </div>
                </div><!-- .page-content -->
            </div><!-- .wrap -->
        </section><!-- .error-404 -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
