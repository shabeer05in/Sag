<?php
/**
 * Template Name: Services Page
 * Template for displaying services page
 *
 * @package SAG4WD_Live
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main services-page">

        <section class="page-header">
            <div class="wrap">
                <h1><?php the_title(); ?></h1>
                <p class="lead"><?php _e('Professional 4x4 customization and off-road accessories installation in Muscat, Oman', 'sag4wd-live'); ?></p>
            </div>
        </section>

        <section class="services-content">
            <div class="wrap">
                <?php
                while (have_posts()) :
                    the_post();
                    if (get_the_content()) :
                        ?>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    <?php endif;
                endwhile;
                ?>

                <div class="services-grid">
                    <!-- Lift Kits & Suspension -->
                    <div class="service-card featured">
                        <div class="service-icon">🔧</div>
                        <h2><?php _e('Lift Kits & Suspension', 'sag4wd-live'); ?></h2>
                        <p><?php _e('Professional suspension upgrades for optimal off-road performance and increased ground clearance.', 'sag4wd-live'); ?></p>
                        <ul class="service-features">
                            <li><?php _e('2"-6" lift kits available', 'sag4wd-live'); ?></li>
                            <li><?php _e('Premium brands: Old Man Emu, Fox, Bilstein', 'sag4wd-live'); ?></li>
                            <li><?php _e('Custom suspension tuning', 'sag4wd-live'); ?></li>
                            <li><?php _e('Complete installation with alignment', 'sag4wd-live'); ?></li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                            <?php _e('Get Quote', 'sag4wd-live'); ?>
                        </a>
                    </div>

                    <!-- Armor & Bumpers -->
                    <div class="service-card featured">
                        <div class="service-icon">🛡️</div>
                        <h2><?php _e('Armor & Bumpers', 'sag4wd-live'); ?></h2>
                        <p><?php _e('Heavy-duty protection for extreme terrain and adventures. Steel and aluminum options available.', 'sag4wd-live'); ?></p>
                        <ul class="service-features">
                            <li><?php _e('Front and rear steel bumpers', 'sag4wd-live'); ?></li>
                            <li><?php _e('Rock sliders and side steps', 'sag4wd-live'); ?></li>
                            <li><?php _e('Underbody protection plates', 'sag4wd-live'); ?></li>
                            <li><?php _e('Recovery points and winch mounts', 'sag4wd-live'); ?></li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                            <?php _e('Get Quote', 'sag4wd-live'); ?>
                        </a>
                    </div>

                    <!-- Snorkels & Air Intake -->
                    <div class="service-card featured">
                        <div class="service-icon">💨</div>
                        <h2><?php _e('Snorkels & Air Intake', 'sag4wd-live'); ?></h2>
                        <p><?php _e('Enhanced air intake systems for water crossings and dusty conditions. Protect your engine.', 'sag4wd-live'); ?></p>
                        <ul class="service-features">
                            <li><?php _e('Safari snorkel systems', 'sag4wd-live'); ?></li>
                            <li><?php _e('OEM-style integration', 'sag4wd-live'); ?></li>
                            <li><?php _e('Raised air intake protection', 'sag4wd-live'); ?></li>
                            <li><?php _e('Professional color-matched installation', 'sag4wd-live'); ?></li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                            <?php _e('Get Quote', 'sag4wd-live'); ?>
                        </a>
                    </div>

                    <!-- Lighting & Electrics -->
                    <div class="service-card">
                        <div class="service-icon">💡</div>
                        <h2><?php _e('Lighting & Electrics', 'sag4wd-live'); ?></h2>
                        <p><?php _e('Advanced lighting solutions for night driving and safety. LED and HID options.', 'sag4wd-live'); ?></p>
                        <ul class="service-features">
                            <li><?php _e('LED light bars and spotlights', 'sag4wd-live'); ?></li>
                            <li><?php _e('Dual battery systems', 'sag4wd-live'); ?></li>
                            <li><?php _e('Auxiliary lighting installation', 'sag4wd-live'); ?></li>
                            <li><?php _e('Switch panels and wiring', 'sag4wd-live'); ?></li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">
                            <?php _e('Learn More', 'sag4wd-live'); ?>
                        </a>
                    </div>

                    <!-- Wheels & Tires -->
                    <div class="service-card">
                        <div class="service-icon">⚙️</div>
                        <h2><?php _e('Wheels & Tires', 'sag4wd-live'); ?></h2>
                        <p><?php _e('Premium off-road tires and alloy wheels. Complete mounting and balancing service.', 'sag4wd-live'); ?></p>
                        <ul class="service-features">
                            <li><?php _e('All-terrain and mud-terrain tires', 'sag4wd-live'); ?></li>
                            <li><?php _e('Premium wheel brands', 'sag4wd-live'); ?></li>
                            <li><?php _e('Tire pressure monitoring systems', 'sag4wd-live'); ?></li>
                            <li><?php _e('Professional alignment', 'sag4wd-live'); ?></li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">
                            <?php _e('Learn More', 'sag4wd-live'); ?>
                        </a>
                    </div>

                    <!-- Recovery Equipment -->
                    <div class="service-card">
                        <div class="service-icon">⛓️</div>
                        <h2><?php _e('Recovery Equipment', 'sag4wd-live'); ?></h2>
                        <p><?php _e('Essential recovery gear installation. Winches, recovery points, and accessories.', 'sag4wd-live'); ?></p>
                        <ul class="service-features">
                            <li><?php _e('Electric winch installation', 'sag4wd-live'); ?></li>
                            <li><?php _e('Recovery straps and shackles', 'sag4wd-live'); ?></li>
                            <li><?php _e('Towing hitches and receivers', 'sag4wd-live'); ?></li>
                            <li><?php _e('MaxTrax and recovery boards', 'sag4wd-live'); ?></li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">
                            <?php _e('Learn More', 'sag4wd-live'); ?>
                        </a>
                    </div>

                    <!-- Custom Builds -->
                    <div class="service-card">
                        <div class="service-icon">🚙</div>
                        <h2><?php _e('Custom Builds', 'sag4wd-live'); ?></h2>
                        <p><?php _e('Complete vehicle transformation. We work with you to create your dream off-road machine.', 'sag4wd-live'); ?></p>
                        <ul class="service-features">
                            <li><?php _e('Consultation and planning', 'sag4wd-live'); ?></li>
                            <li><?php _e('Custom fabrication work', 'sag4wd-live'); ?></li>
                            <li><?php _e('Complete turnkey builds', 'sag4wd-live'); ?></li>
                            <li><?php _e('Project management', 'sag4wd-live'); ?></li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">
                            <?php _e('Learn More', 'sag4wd-live'); ?>
                        </a>
                    </div>

                    <!-- Maintenance & Repair -->
                    <div class="service-card">
                        <div class="service-icon">🔩</div>
                        <h2><?php _e('Maintenance & Repair', 'sag4wd-live'); ?></h2>
                        <p><?php _e('Keep your 4x4 in top condition. Regular maintenance and expert repairs.', 'sag4wd-live'); ?></p>
                        <ul class="service-features">
                            <li><?php _e('Pre-trip inspections', 'sag4wd-live'); ?></li>
                            <li><?php _e('Suspension servicing', 'sag4wd-live'); ?></li>
                            <li><?php _e('Differential and transfer case', 'sag4wd-live'); ?></li>
                            <li><?php _e('General repairs and diagnostics', 'sag4wd-live'); ?></li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">
                            <?php _e('Learn More', 'sag4wd-live'); ?>
                        </a>
                    </div>
                </div>

                <!-- Why Choose Us Section -->
                <div class="services-why-choose">
                    <h2><?php _e('Why Choose SAG 4WD?', 'sag4wd-live'); ?></h2>
                    <div class="features-grid">
                        <div class="feature-item">
                            <h3><?php _e('Expert Technicians', 'sag4wd-live'); ?></h3>
                            <p><?php _e('Certified professionals with years of experience in 4x4 customization.', 'sag4wd-live'); ?></p>
                        </div>
                        <div class="feature-item">
                            <h3><?php _e('Quality Parts', 'sag4wd-live'); ?></h3>
                            <p><?php _e('We use only premium brands and genuine parts for all installations.', 'sag4wd-live'); ?></p>
                        </div>
                        <div class="feature-item">
                            <h3><?php _e('Warranty Coverage', 'sag4wd-live'); ?></h3>
                            <p><?php _e('All our work is backed by warranty for your peace of mind.', 'sag4wd-live'); ?></p>
                        </div>
                        <div class="feature-item">
                            <h3><?php _e('Competitive Pricing', 'sag4wd-live'); ?></h3>
                            <p><?php _e('Transparent quotes with no hidden fees. Best value in Oman.', 'sag4wd-live'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="services-cta">
                    <h2><?php _e('Ready to Upgrade Your 4x4?', 'sag4wd-live'); ?></h2>
                    <p><?php _e('Contact us today for a free consultation and quote. Visit our showroom in Muscat.', 'sag4wd-live'); ?></p>
                    <div class="cta-buttons">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                            <?php _e('Get Free Quote', 'sag4wd-live'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/garage')); ?>" class="btn btn-secondary">
                            <?php _e('View Our Work', 'sag4wd-live'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
