<?php
/**
 * The front page template file
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

        <section class="hero-section">
            <div class="wrap">
                <h1><?php _e('Premium 4x4 Customization & Off-Road Accessories', 'sag4wd-live'); ?></h1>
                <p class="lead">
                    <?php _e('Built for the desert and beyond. Suspension, bumpers, lighting, snorkels, wheels & tires — professionally installed in Muscat, Oman.', 'sag4wd-live'); ?>
                </p>
                <p class="cta-buttons">
                    <a class="btn btn-primary" href="<?php echo esc_url(home_url('/services')); ?>">
                        <?php _e('Explore Services', 'sag4wd-live'); ?>
                    </a>
                </p>
            </div>
        </section>

        <section class="services-section">
            <div class="wrap">
                <h2><?php _e('Our Services', 'sag4wd-live'); ?></h2>
                <div class="services-grid">
                    <div class="service-card">
                        <h3><?php _e('Lift Kits & Suspension', 'sag4wd-live'); ?></h3>
                        <p><?php _e('Professional suspension upgrades for optimal off-road performance.', 'sag4wd-live'); ?></p>
                    </div>
                    <div class="service-card">
                        <h3><?php _e('Armor & Bumpers', 'sag4wd-live'); ?></h3>
                        <p><?php _e('Heavy-duty protection for extreme terrain and adventures.', 'sag4wd-live'); ?></p>
                    </div>
                    <div class="service-card">
                        <h3><?php _e('Snorkels & Air', 'sag4wd-live'); ?></h3>
                        <p><?php _e('Enhanced air intake systems for water crossings and dusty conditions.', 'sag4wd-live'); ?></p>
                    </div>
                    <div class="service-card">
                        <h3><?php _e('Lighting & Electrics', 'sag4wd-live'); ?></h3>
                        <p><?php _e('Advanced lighting solutions for night driving and safety.', 'sag4wd-live'); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
