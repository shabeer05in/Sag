<?php
/**
 * Template part for displaying posts
 *
 * @package SAG4WD_Live
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
            ?>
            <div class="entry-meta">
                <span class="posted-on"><?php echo get_the_date(); ?></span>
                <span class="byline"> <?php _e('by', 'sag4wd-live'); ?> <?php the_author(); ?></span>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php if (has_post_thumbnail() && !is_singular()) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
            </a>
        </div><!-- .post-thumbnail -->
    <?php endif; ?>

    <div class="entry-content">
        <?php
        if (is_singular()) :
            the_content();
        else :
            the_excerpt();
        endif;

        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'sag4wd-live'),
            'after'  => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php
        if (!is_singular()) :
            ?>
            <a href="<?php the_permalink(); ?>" class="read-more">
                <?php _e('Read More', 'sag4wd-live'); ?>
            </a>
        <?php endif; ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
