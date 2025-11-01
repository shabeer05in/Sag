<?php
/**
 * Template Name: Garage Page
 * Template for displaying garage/gallery
 *
 * @package SAG4WD_Live
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main garage-page">

        <section class="page-header">
            <div class="wrap">
                <h1><?php the_title(); ?></h1>
                <p class="lead"><?php _e('Explore our latest 4x4 customization projects and builds', 'sag4wd-live'); ?></p>
            </div>
        </section>

        <section class="garage-content">
            <div class="wrap">
                <?php
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
                ?>

                <div class="garage-grid">
                    <!-- Garage vehicles will be dynamically loaded here -->
                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-vehicle.jpg" alt="Vehicle">
                        </div>
                        <div class="vehicle-info">
                            <h3><?php _e('Toyota Land Cruiser 200', 'sag4wd-live'); ?></h3>
                            <p><?php _e('Full suspension upgrade with 3" lift kit, steel bumpers, and LED lighting', 'sag4wd-live'); ?></p>
                            <a href="#" class="btn btn-secondary"><?php _e('View Build', 'sag4wd-live'); ?></a>
                        </div>
                    </div>

                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-vehicle.jpg" alt="Vehicle">
                        </div>
                        <div class="vehicle-info">
                            <h3><?php _e('Nissan Patrol Y62', 'sag4wd-live'); ?></h3>
                            <p><?php _e('Custom armor package with rock sliders and recovery points', 'sag4wd-live'); ?></p>
                            <a href="#" class="btn btn-secondary"><?php _e('View Build', 'sag4wd-live'); ?></a>
                        </div>
                    </div>

                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-vehicle.jpg" alt="Vehicle">
                        </div>
                        <div class="vehicle-info">
                            <h3><?php _e('Jeep Wrangler JL', 'sag4wd-live'); ?></h3>
                            <p><?php _e('Complete off-road setup with 35" tires and Fox shocks', 'sag4wd-live'); ?></p>
                            <a href="#" class="btn btn-secondary"><?php _e('View Build', 'sag4wd-live'); ?></a>
                        </div>
                    </div>

                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-vehicle.jpg" alt="Vehicle">
                        </div>
                        <div class="vehicle-info">
                            <h3><?php _e('Toyota Hilux', 'sag4wd-live'); ?></h3>
                            <p><?php _e('Sport bar, LED light bar, and snorkel installation', 'sag4wd-live'); ?></p>
                            <a href="#" class="btn btn-secondary"><?php _e('View Build', 'sag4wd-live'); ?></a>
                        </div>
                    </div>

                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-vehicle.jpg" alt="Vehicle">
                        </div>
                        <div class="vehicle-info">
                            <h3><?php _e('Ford Ranger', 'sag4wd-live'); ?></h3>
                            <p><?php _e('Heavy-duty bull bar and winch setup with underbody protection', 'sag4wd-live'); ?></p>
                            <a href="#" class="btn btn-secondary"><?php _e('View Build', 'sag4wd-live'); ?></a>
                        </div>
                    </div>

                    <div class="vehicle-card">
                        <div class="vehicle-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-vehicle.jpg" alt="Vehicle">
                        </div>
                        <div class="vehicle-info">
                            <h3><?php _e('Mitsubishi Pajero', 'sag4wd-live'); ?></h3>
                            <p><?php _e('Suspension lift with all-terrain tires and roof rack system', 'sag4wd-live'); ?></p>
                            <a href="#" class="btn btn-secondary"><?php _e('View Build', 'sag4wd-live'); ?></a>
                        </div>
                    </div>
                </div>

                <div class="garage-interactive">
                    <h2><?php _e('Interactive Garage Explorer', 'sag4wd-live'); ?></h2>
                    <div id="garage-game-container">
                        <!-- Game will be loaded via game.js -->
                        <p><?php _e('Loading interactive garage experience...', 'sag4wd-live'); ?></p>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
