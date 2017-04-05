<?php
function vev_setup() {
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
	add_theme_support( 'title-tag' );
	add_editor_style('theme/css/editor-style.css');
	add_theme_support('post-thumbnails');
	add_image_size( 'header-image-size', 1440, 504, true );
	add_image_size( 'subheader-image-size', 1440, 301, true );
	add_image_size( 'portfolio-thumb-size', 526, 392, true );
}
add_action('init', 'vev_setup');

if (! isset($content_width))
	$content_width = 1140;

function wpcodex_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function vev_excerpt_readmore() {
	return '...';
}
add_filter('excerpt_more', 'vev_excerpt_readmore');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function disable_srcset( $sources ) {
	return false;
}
add_filter( 'wp_calculate_image_srcset', 'disable_srcset' );