<?php
/**
 * SAG4WD Live Theme Functions
 * 
 * @package SAG4WD_Live
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function sag4wd_live_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'sag4wd-live'),
    ));
    
    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'sag4wd_live_setup');

/**
 * Enqueue scripts and styles
 */
function sag4wd_live_scripts() {
    // Enqueue main stylesheet from assets
    wp_enqueue_style(
        'sag4wd-live-main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        wp_get_theme()->get('Version')
    );
    
    // Enqueue main JavaScript from assets (vanilla JS, no jQuery needed)
    wp_enqueue_script(
        'sag4wd-live-game',
        get_template_directory_uri() . '/assets/js/game.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'sag4wd_live_scripts');

/**
 * Register widget areas
 */
function sag4wd_live_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'sag4wd-live'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'sag4wd-live'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'sag4wd_live_widgets_init');

/**
 * Customize login page
 */
function sag4wd_live_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'sag4wd_live_login_logo_url');

function sag4wd_live_login_logo_url_title() {
    return get_bloginfo('name');
}
add_filter('login_headertext', 'sag4wd_live_login_logo_url_title');

function sag4wd_live_login_stylesheet() {
    wp_enqueue_style(
        'sag4wd-live-login',
        get_template_directory_uri() . '/assets/css/login-style.css',
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('login_enqueue_scripts', 'sag4wd_live_login_stylesheet');
