<?php
/* Base index file. */
define('WP_USE_THEMES', false);
global $wp_query;
?>

<?php
  get_header();
?>

<div id="alpha">
  <?php
  while (have_posts()) {
    the_post();
  ?>
  <section class="post">
  <?php the_content(); ?>
  </section>
  <?php } ?>
</div>

<div id="beta">
  <?php get_sidebar(); ?>
</div>

<?php
  get_footer();
?>
