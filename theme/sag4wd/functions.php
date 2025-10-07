<?php
function sag4wd_setup(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus(['primary' => __('Primary Menu','sag4wd')]);
}
add_action('after_setup_theme','sag4wd_setup');

function sag4wd_assets(){
  wp_enqueue_style('sag4wd-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts','sag4wd_assets');
