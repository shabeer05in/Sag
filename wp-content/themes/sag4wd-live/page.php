<?php
/**
 * Template Name: Full Width
 * Description: A full-width page template without sidebar
 */
get_header(); ?>
  <div class="wrap">
    <?php while (have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
<?php get_footer(); ?>
