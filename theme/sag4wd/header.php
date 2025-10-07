<?php ?><!doctype html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header class="site-header">
  <div class="wrap" style="display:flex;align-items:center;gap:20px">
    <a class="brand" href="<?php echo esc_url(home_url('/'));?>">SAG 4WD</a>
    <nav class="nav" style="flex:1">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'menu',
        'fallback_cb'    => false
      ]);
      ?>
    </nav>
    <a class="btn" href="<?php echo esc_url( home_url('/contact') );?>">Get Estimate</a>
  </div>
</header>
<main class="site-main">
