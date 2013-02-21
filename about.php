<?php
/*
Template Name: About
*/
define('WP_USE_THEMES', false);
global $wp_query;
?>

<?php
get_header();
?>

<div id="alpha">
  <div class="about-fullsize">
    <p class="caption">Simpler times (2009)</p>

    <div class="intro-paragraph">
      <p>I'm a full stack software engineer who likes clean designs, elegant code, and simple products.</p>
      <p>I voice my thoughts on this blog and take whimsically bad pictures.</p>
    </div>

    <dl class="five-questions">
      <dt>who</dt>
      <dd>allen cheung</dd>

      <dt>what</dt>
      <dd>software engineer</dd>

      <dt>where</dt>
      <dd>silicon valley</dd>

      <dt>when</dt>
      <dd>since 2004</dd>

      <dt>why</dt>
      <dd>product &times; design &times; code</dd>
    </dl>
  </div>
</div>

<div id="beta">
  <?php get_sidebar(); ?>
</div>

<?php
get_footer();
?>

