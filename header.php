<?php
/**
 * Theme header.
 * Displays everything<head> and the header + nav.
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <title><?php wp_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/styles/index.css" type="text/css" media="screen" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />

  <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
  <script>window.Modernizr || document.write('<script src="scripts/lib/modernizr-2.6.2.min.js">\x3C/script>')</script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="scripts/lib/jquery-1.8.3.min.js">\x3C/script>')</script>

  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>

  <?php wp_head(); ?>
</head>
<body>

  <header id="site-header">
    <div class="centered-header">
      <hgroup id="site-title">
        <h1 class="name"><?php bloginfo("name"); ?></h1>
        <div class="title-separator"></div>
        <h3 class="description"><?php bloginfo("description"); ?></h3>
      </hgroup>
    </div>
  </header>

  <div id="content" class="clearfix">
