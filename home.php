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

    <div class="spine-right-section">
      <ul class="social-list clearfix">
        <li class="social-icon">
          <a href="http://twitter.com/#!/allenmhc" target="_blank" title="Twitter" class="twitter" rel="me">
            <span>Twitter</span>
          </a>
        </li>
        <li class="social-icon">
          <a rel="author" target="_blank" title="Google+" class="googleplus" rel="me" href="https://profiles.google.com/allenc">
            <span>Google+</span>
          </a>
        </li>
        <li class="social-icon">
          <a href="http://www.quora.com/Allen-Cheung" target="_blank" title="Quora" class="quora" rel="me">
            <span>Quora</span>
          </a>
        </li>
        <li class="social-icon">
          <a href="http://www.linkedin.com/in/allencheung" target="_blank" title="LinkedIn" class="linkedin" rel="me">
            <span>LinkedIn</span>
          </a>
        </li>
        <li class="social-icon">
          <a href="https://github.com/allenmhc" target="_blank" title="Github" class="github" rel="me">
            <span>Github</span>
          </a>
        </li>
      </ul>
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

    <div class="spine-left spine-content spine-extrude">
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

    <div class="spine-left spine-content spine-extrude-diagonal">
      <ul class="posts-list archives-list">
        <?php
        rewind_posts();
        $query_args = array(
          "posts_per_page" => 8
        );
        query_posts($query_args);
        while (have_posts()): the_post();
        ?>
        <li class="post-line-outer">
          <div class="post-date archive-date"><?php the_time("Y.m.d"); ?></div>
          <a href="<?php the_permalink(); ?>" class="post-line"><?php the_title(); ?></a>
        </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </section>

  <section class="spine-left spine-spacer"></section>

  <section class="spine-section spine-about">
    <div class="spine-title">
      <a class="section-title">
        <div class="spine-marker"></div>
        <h3 class="title-main">About</h3>
        <div class="section-title-animated">
          <div class="title-separator"></div>
          <h3 class="title-additional">Identity</h3>
        </div>
      </a>
    </div>
  </section>
  <section class="spine-left spine-spacer"></section>

</div>

<?php
  get_footer();
?>
