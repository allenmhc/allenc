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
      Stuff
    </div>
  </section>
</div>

<?php
  get_footer();
?>
