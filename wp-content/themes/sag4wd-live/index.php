<?php get_header(); ?>
  <div class="wrap">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php else: ?>
      <div class="section">
        <h1>Welcome to SAG 4WD</h1>
        <p class="lead">Your new theme is active. Add a page and set it as your homepage in Settings → Reading, or keep this starter layout by adding content below.</p>
      </div>
    <?php endif; ?>
  </div>
<?php get_footer(); ?>
