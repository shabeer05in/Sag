<?php
/*
Plugin Name: SAG4WD Tweaks (MU)
Description: Must-use tiny tweaks for branding/SEO safety.
*/
if (!defined('ABSPATH')) exit;

// Force Yoast Organization schema if missing name/logo? (safety net)
add_filter('wpseo_schema_organization', function($data){
  if (empty($data['name']))  $data['name']  = 'SAG 4WD – Off-Road Customization Oman';
  if (empty($data['logo']))  $data['logo']  = get_site_icon_url();
  return $data;
}, 20);

// Remove WP version from head for a cleaner security posture
remove_action('wp_head', 'wp_generator');
