<?php
/* Articles template */
define('WP_USE_THEMES', false);
global $wp_query;
?>

<?php
get_header();
?>

<div id="alpha">
  <section class="articles">
    <ul class="posts-list articles-list">
      <?php
      rewind_posts();
      $temp_query = clone $wp_query;
      $query_args = array(
        "meta_key" => "article",
        "meta_value" => 1,
        "posts_per_page" => -1
      );
      $wp_query = null;
      $wp_query = new WP_Query($query_args);
      $i = 1;
      while ($wp_query->have_posts()): $wp_query->the_post();
      ?>
      <li class="post-box-outer <?php echo "post-box-" . (($i % 2 == 0) ? "even" : "odd"); ?>">
        <a href="<?php the_permalink(); ?>" class="post-box article-box">
          <div class="post-box-inner">
            <h4 class="post-title article-title"><?php the_title(); ?></h4>
            <div class="post-separator"></div>
            <div class="post-excerpt article-excerpt"><?php the_excerpt(); ?></div>
          </div>
        </a>
      </li>
      <?php
        $i++;
        endwhile;
        $wp_query = clone $temp_query;
        wp_reset_query();
      ?>
    </ul>
  </section>
</div>

<div id="beta">
  <?php get_sidebar(); ?>
</div>

<?php
  get_footer();
?>
