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
  <?php wp_head(); ?>
</head>
<body>
  <div id="content" class="clearfix">
