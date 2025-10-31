<?php
function sag4wd_live_setup(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus(['primary' => __('Primary Menu','sag4wd-live')]);
}
add_action('after_setup_theme','sag4wd_live_setup');

function sag4wd_live_assets(){
  wp_enqueue_style('sag4wd-live-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts','sag4wd_live_assets');

// Customize login page
function sag4wd_live_login_logo_url() {
  return home_url();
}
add_filter('login_headerurl', 'sag4wd_live_login_logo_url');

function sag4wd_live_login_logo_url_title() {
  return 'SAG 4WD';
}
add_filter('login_headertext', 'sag4wd_live_login_logo_url_title');

function sag4wd_live_login_stylesheet() {
  wp_enqueue_style('sag4wd-live-login', get_stylesheet_directory_uri() . '/login-style.css', [], wp_get_theme()->get('Version'));
}
add_action('login_enqueue_scripts', 'sag4wd_live_login_stylesheet');
