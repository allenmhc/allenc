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
    <?php
    while (have_posts()):
      the_post();
      echo '<h1>';
      the_title();
      echo '</h1>';
      the_content();
    endwhile;
    ?>
  </section>
</div>

<div id="beta">
  <?php get_sidebar(); ?>
</div>

<?php
  get_footer();
?>
