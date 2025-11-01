<?php
/**
 * Template Name: About Page
 * Template for displaying about page
 *
 * @package SAG4WD_Live
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main about-page">

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

        <section class="about-content">
            <div class="wrap">
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>

                <div class="about-sections">
                    <div class="about-section">
                        <h2><?php _e('Our Mission', 'sag4wd-live'); ?></h2>
                        <p><?php _e('To provide the highest quality 4x4 customization and off-road accessories in Oman, with professional installation and expert advice.', 'sag4wd-live'); ?></p>
                    </div>

                    <div class="about-section">
                        <h2><?php _e('Our Experience', 'sag4wd-live'); ?></h2>
                        <p><?php _e('With years of experience in off-road vehicle customization, SAG 4WD has become Muscat\'s trusted name for premium 4x4 upgrades.', 'sag4wd-live'); ?></p>
                    </div>

                    <div class="about-section">
                        <h2><?php _e('Why Choose Us', 'sag4wd-live'); ?></h2>
                        <ul class="features-list">
                            <li><?php _e('Professional installation by certified technicians', 'sag4wd-live'); ?></li>
                            <li><?php _e('Premium quality parts from trusted brands', 'sag4wd-live'); ?></li>
                            <li><?php _e('Competitive pricing and transparent quotes', 'sag4wd-live'); ?></li>
                            <li><?php _e('Warranty on all installations', 'sag4wd-live'); ?></li>
                            <li><?php _e('Custom solutions for every vehicle', 'sag4wd-live'); ?></li>
                        </ul>
                    </div>
                </div>

                <div class="about-cta">
                    <h2><?php _e('Ready to Upgrade Your 4x4?', 'sag4wd-live'); ?></h2>
                    <p><?php _e('Contact us today for a free consultation and quote.', 'sag4wd-live'); ?></p>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                        <?php _e('Get in Touch', 'sag4wd-live'); ?>
                    </a>
                </div>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
