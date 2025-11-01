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
    <?php if ( is_user_logged_in() ): ?>
      <div class="user-info">
        <a href="<?php echo esc_url( admin_url() );?>" class="user-link">
          <?php echo esc_html( wp_get_current_user()->display_name );?>
        </a>
        <a href="<?php echo esc_url( wp_logout_url( home_url() ) );?>" class="logout-link">Logout</a>
      </div>
    <?php else: ?>
      <a href="<?php echo esc_url( wp_login_url( get_permalink() ) );?>" class="login-link">Login</a>
    <?php endif; ?>
  </div>
</header>
<main class="site-main">
