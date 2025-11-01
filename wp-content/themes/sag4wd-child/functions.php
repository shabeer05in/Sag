<?php
// Enqueue parent + child styles
add_action('wp_enqueue_scripts', function () {
  $parent = 'astra-theme-css';
  wp_enqueue_style($parent, get_template_directory_uri() . '/style.css', [], null);
  wp_enqueue_style('sag4wd-child', get_stylesheet_uri(), [$parent], wp_get_theme()->get('Version'));
});

// Woo mini tweaks: set image sizes, disable emojis, etc.
add_action('after_setup_theme', function(){
  // product image sizes (adjust as you like)
  add_theme_support('woocommerce');
  update_option('woocommerce_single_image_width', 900);
  update_option('woocommerce_thumbnail_image_width', 600);
});

remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_print_styles','print_emoji_styles');

// Helper: load a custom JS file (create /assets/main.js if needed)
add_action('wp_enqueue_scripts', function(){
  wp_enqueue_script('sag4wd-main', get_stylesheet_directory_uri() . '/assets/main.js', [], null, true);
});
