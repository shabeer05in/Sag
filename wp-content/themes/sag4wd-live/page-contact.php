<?php
/**
 * Template Name: Contact Page
 * Template for displaying contact page
 *
 * @package SAG4WD_Live
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main contact-page">

        <section class="page-header">
            <div class="wrap">
                <h1><?php the_title(); ?></h1>
                <p class="lead"><?php _e('Get in touch with us for quotes, consultations, or any questions about our services.', 'sag4wd-live'); ?></p>
            </div>
        </section>

        <section class="contact-content">
            <div class="wrap">
                <div class="contact-grid">
                    <!-- Contact Information -->
                    <div class="contact-info">
                        <h2><?php _e('Contact Information', 'sag4wd-live'); ?></h2>
                        
                        <div class="contact-item">
                            <h3><?php _e('Location', 'sag4wd-live'); ?></h3>
                            <p>
                                <?php _e('Maabilah Industrial Area, Road #12', 'sag4wd-live'); ?><br>
                                <?php _e('Muscat, Oman', 'sag4wd-live'); ?>
                            </p>
                        </div>

                        <div class="contact-item">
                            <h3><?php _e('Phone', 'sag4wd-live'); ?></h3>
                            <p>
                                <a href="tel:+96899669903">+968 9966 9903</a><br>
                                <a href="tel:+96895121532">+968 9512 1532</a>
                            </p>
                        </div>

                        <div class="contact-item">
                            <h3><?php _e('Email', 'sag4wd-live'); ?></h3>
                            <p>
                                <a href="mailto:info@sag4wd.com">info@sag4wd.com</a>
                            </p>
                        </div>

                        <div class="contact-item">
                            <h3><?php _e('Business Hours', 'sag4wd-live'); ?></h3>
                            <p>
                                <?php _e('Saturday - Thursday: 8:00 AM - 6:00 PM', 'sag4wd-live'); ?><br>
                                <?php _e('Friday: Closed', 'sag4wd-live'); ?>
                            </p>
                        </div>

                        <div class="contact-item social-links">
                            <h3><?php _e('Follow Us', 'sag4wd-live'); ?></h3>
                            <p>
                                <a href="#" class="social-link" aria-label="Instagram">Instagram</a> | 
                                <a href="#" class="social-link" aria-label="Facebook">Facebook</a> | 
                                <a href="#" class="social-link" aria-label="WhatsApp">WhatsApp</a>
                            </p>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form-container">
                        <h2><?php _e('Send Us a Message', 'sag4wd-live'); ?></h2>
                        
                        <?php
                        // Display page content if exists (can contain shortcode for contact form plugin)
                        while (have_posts()) :
                            the_post();
                            if (get_the_content()) :
                                the_content();
                            else :
                                // Default contact form HTML if no content/shortcode
                                ?>
                                <form class="contact-form" action="#" method="post">
                                    <div class="form-group">
                                        <label for="contact-name"><?php _e('Name', 'sag4wd-live'); ?> *</label>
                                        <input type="text" id="contact-name" name="contact-name" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="contact-email"><?php _e('Email', 'sag4wd-live'); ?> *</label>
                                        <input type="email" id="contact-email" name="contact-email" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="contact-phone"><?php _e('Phone', 'sag4wd-live'); ?></label>
                                        <input type="tel" id="contact-phone" name="contact-phone">
                                    </div>

                                    <div class="form-group">
                                        <label for="contact-vehicle"><?php _e('Vehicle Model', 'sag4wd-live'); ?></label>
                                        <input type="text" id="contact-vehicle" name="contact-vehicle" placeholder="e.g., Land Cruiser 200">
                                    </div>

                                    <div class="form-group">
                                        <label for="contact-service"><?php _e('Service Interested In', 'sag4wd-live'); ?></label>
                                        <select id="contact-service" name="contact-service">
                                            <option value=""><?php _e('Select a service', 'sag4wd-live'); ?></option>
                                            <option value="lift-kit"><?php _e('Lift Kit & Suspension', 'sag4wd-live'); ?></option>
                                            <option value="armor"><?php _e('Armor & Bumpers', 'sag4wd-live'); ?></option>
                                            <option value="snorkel"><?php _e('Snorkels & Air Intake', 'sag4wd-live'); ?></option>
                                            <option value="lighting"><?php _e('Lighting & Electrics', 'sag4wd-live'); ?></option>
                                            <option value="wheels"><?php _e('Wheels & Tires', 'sag4wd-live'); ?></option>
                                            <option value="other"><?php _e('Other', 'sag4wd-live'); ?></option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="contact-message"><?php _e('Message', 'sag4wd-live'); ?> *</label>
                                        <textarea id="contact-message" name="contact-message" rows="6" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            <?php _e('Send Message', 'sag4wd-live'); ?>
                                        </button>
                                    </div>

                                    <p class="form-note">
                                        <small><?php _e('* Required fields. We will respond within 24 hours.', 'sag4wd-live'); ?></small>
                                    </p>
                                </form>
                                <p class="form-plugin-note">
                                    <em><?php _e('Note: Install a contact form plugin like Contact Form 7, WPForms, or Gravity Forms for full functionality.', 'sag4wd-live'); ?></em>
                                </p>
                                <?php
                            endif;
                        endwhile;
                        ?>
                    </div>
                </div>

                <!-- Map Section (Placeholder) -->
                <div class="contact-map">
                    <h2><?php _e('Find Us', 'sag4wd-live'); ?></h2>
                    <div class="map-container">
                        <p><?php _e('Map integration: Add Google Maps embed code or use a plugin like WP Google Maps.', 'sag4wd-live'); ?></p>
                        <p><strong><?php _e('Address:', 'sag4wd-live'); ?></strong> <?php _e('Maabilah Industrial Area, Road #12, Muscat, Oman', 'sag4wd-live'); ?></p>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
