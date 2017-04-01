<?php
function additional_custom_styles() {

	/*Enqueue The Styles*/

	$themecsspath = get_stylesheet_directory() . '/sass/theme.css';
	wp_enqueue_style(
		'vev',
		get_stylesheet_directory_uri() . '/sass/theme.css',
		array(),
		filemtime( $themecsspath )
	);

	wp_enqueue_script('jquery-min',  get_stylesheet_directory_uri() . '/js/jquery-3.1.1.min.js');

	wp_enqueue_script('js',  get_stylesheet_directory_uri() . '/js/main.js');

	wp_enqueue_script('customizer-js',  get_stylesheet_directory_uri() . '/js/theme-customizer.js');

}

add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );