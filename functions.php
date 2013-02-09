<?php
/**
 * Helper functions for a theme.
 *
 * @package Wordpress
 * @subpackage ac
 * @since ac 2.0
 */

function allenc_is_page($page) {
  if ($page == "home") {
    return is_home();
  } else if ($page == "archives") {
    return get_page_by_title($page)->ID == get_the_ID() || is_category() || is_month() || is_day() || is_year();
  } else {
    return get_page_by_title($page)->ID == get_the_ID();
  }
}

/* Filters */
function new_excerpt_length($length) {
	return 70;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

/* Rewrite rules */
add_action('init', 'allenc_add_rewrite_rules');
add_action('init', 'allenc_add_rewrite_tags');

function allenc_add_rewrite_rules() {
  add_rewrite_rule(
    '^articles/([0-9]{4})/?$',
    'index.php?pagename=articles&articlesyear=$matches[1]',
    'top'
  );
}

function allenc_add_rewrite_tags() {
  add_rewrite_tag('%articlesyear%', '([0-9]{4})');
}
?>
