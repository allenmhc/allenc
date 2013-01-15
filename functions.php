<?php
/**
 * Helper functions for a theme.
 *
 * @package Wordpress
 * @subpackage ac
 * @since ac 2.0
 */

/* Filters */
function new_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>
