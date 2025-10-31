<?php
/**
 * The header for SAG4WD Live Theme
 *
 * @package SAG4WD_Live
 */

if (!defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="wrap">
            <div class="site-branding">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    ?>
                    <h1 class="site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                    <?php
                    $description = get_bloginfo('description', 'display');
                    if ($description || is_customize_preview()) {
                        ?>
                        <p class="site-description"><?php echo $description; ?></p>
                        <?php
                    }
                }
                ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation mega-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'depth'          => 3,
                ));
                ?>
            </nav><!-- #site-navigation -->

            <div class="header-actions">
                <?php if (is_user_logged_in()) : ?>
                    <div class="user-info">
                        <a href="<?php echo esc_url(admin_url()); ?>" class="user-link">
                            <?php echo esc_html(wp_get_current_user()->display_name); ?>
                        </a>
                        <a href="<?php echo esc_url(wp_logout_url(home_url())); ?>" class="logout-link">
                            <?php _e('Logout', 'sag4wd-live'); ?>
                        </a>
                    </div>
                <?php else : ?>
                    <a href="<?php echo esc_url(wp_login_url(get_permalink())); ?>" class="login-link">
                        <?php _e('Login', 'sag4wd-live'); ?>
                    </a>
                <?php endif; ?>
                
                <a class="btn btn-primary" href="<?php echo esc_url(home_url('/contact')); ?>">
                    <?php _e('Get Estimate', 'sag4wd-live'); ?>
                </a>
            </div><!-- .header-actions -->
        </div><!-- .wrap -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
