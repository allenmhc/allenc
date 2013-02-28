<?php
/* Base index file. */
define('WP_USE_THEMES', false);
global $wp_query;
?>

<?php
  get_header();
?>

<div id="alpha">
  <section class="post">
    <?php while (have_posts()): the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <div class="title-separator"></div>

    <div class="post-content prose">
      <?php the_content(); ?>
      <aside class="categories">Posted under <?php the_category(', '); ?></aside>
    </div>

    <div class="related-posts"><?php related_posts(); ?></div>

    <div class="comments" name="comments" id="comments">
      <?php comments_template(); ?>
    </div>

    <?php endwhile; ?>
  </section>
</div>

<div id="beta">
  <?php get_sidebar(); ?>
</div>

<?php
  get_footer();
?>
