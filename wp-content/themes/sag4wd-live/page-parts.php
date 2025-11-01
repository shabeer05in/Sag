<?php
/**
 * Template Name: Parts Page
 * Template for displaying parts catalog
 *
 * @package SAG4WD_Live
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main parts-page">

        <section class="page-header">
            <div class="wrap">
                <h1><?php the_title(); ?></h1>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="page-featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <section class="parts-catalog">
            <div class="wrap">
                <?php
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
                ?>

                <div class="parts-grid">
                    <!-- Parts will be dynamically loaded here -->
                    <div class="part-card">
                        <div class="part-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-part.jpg" alt="Part">
                        </div>
                        <div class="part-info">
                            <h3><?php _e('Lift Kits', 'sag4wd-live'); ?></h3>
                            <p><?php _e('Complete suspension lift kits for various 4x4 models', 'sag4wd-live'); ?></p>
                            <a href="#" class="btn btn-secondary"><?php _e('View Details', 'sag4wd-live'); ?></a>
                        </div>
                    </div>

                    <div class="part-card">
                        <div class="part-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-part.jpg" alt="Part">
                        </div>
                        <div class="part-info">
                            <h3><?php _e('Bull Bars', 'sag4wd-live'); ?></h3>
                            <p><?php _e('Heavy-duty front protection bars', 'sag4wd-live'); ?></p>
                            <a href="#" class="btn btn-secondary"><?php _e('View Details', 'sag4wd-live'); ?></a>
                        </div>
                    </div>

                    <div class="part-card">
                        <div class="part-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-part.jpg" alt="Part">
                        </div>
                        <div class="part-info">
                            <h3><?php _e('Snorkels', 'sag4wd-live'); ?></h3>
                            <p><?php _e('Air intake snorkels for water crossings', 'sag4wd-live'); ?></p>
                            <a href="#" class="btn btn-secondary"><?php _e('View Details', 'sag4wd-live'); ?></a>
                        </div>
                    </div>

                    <div class="part-card">
                        <div class="part-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-part.jpg" alt="Part">
                        </div>
                        <div class="part-info">
                            <h3><?php _e('LED Light Bars', 'sag4wd-live'); ?></h3>
                            <p><?php _e('High-intensity LED lighting solutions', 'sag4wd-live'); ?></p>
                            <a href="#" class="btn btn-secondary"><?php _e('View Details', 'sag4wd-live'); ?></a>
                        </div>
                    </div>

                    <div class="part-card">
                        <div class="part-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-part.jpg" alt="Part">
                        </div>
                        <div class="part-info">
                            <h3><?php _e('Recovery Gear', 'sag4wd-live'); ?></h3>
                            <p><?php _e('Winches, ropes, and recovery equipment', 'sag4wd-live'); ?></p>
                            <a href="#" class="btn btn-secondary"><?php _e('View Details', 'sag4wd-live'); ?></a>
                        </div>
                    </div>

                    <div class="part-card">
                        <div class="part-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-part.jpg" alt="Part">
                        </div>
                        <div class="part-info">
                            <h3><?php _e('Wheels & Tires', 'sag4wd-live'); ?></h3>
                            <p><?php _e('Off-road tires and alloy wheels', 'sag4wd-live'); ?></p>
                            <a href="#" class="btn btn-secondary"><?php _e('View Details', 'sag4wd-live'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
