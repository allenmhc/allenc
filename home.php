<?php
/* Home template */
define('WP_USE_THEMES', false);
global $wp_query;
?>

<?php
get_header();
?>

<div id="home">
  <section class="spine-left spine-spacer"></section>

  <section class="spine-section spine-home">
    <div class="spine-title">
      <a class="section-title">
        <div class="spine-marker"></div>
        <h3 class="title-main">Home</h3>
        <div class="section-title-animated">
          <div class="title-separator"></div>
          <h3 class="title-additional">Origin</h3>
        </div>
      </a>
    </div>
  </section>

  <section class="spine-left spine-spacer"></section>

  <section class="spine-section spine-articles">
    <div class="spine-title">
      <a class="section-title">
        <div class="spine-marker"></div>
        <h3 class="title-main">Articles</h3>
        <div class="section-title-animated">
          <div class="title-separator"></div>
          <h3 class="title-additional">Noteworthy</h3>
        </div>
      </a>
    </div>

    <div class="spine-left spine-content">
      <ul class="posts-list articles-list">
        <?php
        rewind_posts();
        $query_args = array(
          "meta_key" => "article",
          "meta_value" => 1,
          "posts_per_page" => 3
        );
        query_posts($query_args);
        while (have_posts()): the_post();
        ?>
        <li class="post-box-outer">
          <a href="<?php the_permalink(); ?>" class="post-box article-box">
            <div class="post-date article-date"><?php the_time("Y.m.d"); ?></div>
            <div class="post-box-inner">
              <h4 class="post-title article-title"><?php the_title(); ?></h4>
              <div class="post-excerpt article-excerpt"><?php the_excerpt(); ?></div>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </section>

  <section class="spine-left spine-spacer"></section>

  <section class="spine-section spine-archives">
    <div class="spine-title">
      <a class="section-title">
        <div class="spine-marker"></div>
        <h3 class="title-main">Posts</h3>
        <div class="section-title-animated">
          <div class="title-separator"></div>
          <h3 class="title-additional">Thoughtstream</h3>
        </div>
      </a>
    </div>
  </section>

</div>

<?php
  get_footer();
?>
