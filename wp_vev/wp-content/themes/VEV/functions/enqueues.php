<?php
function vev_enqueues() {

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Abel', false );

    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '../theme/sass/font-awesome.min.css');

    $themecsspath = get_stylesheet_directory() . '/theme/sass/theme.css';
    wp_enqueue_style(
        'vev',
        get_stylesheet_directory_uri() . '/theme/sass/theme.css',
        array(),
        filemtime( $themecsspath )
    );

    /* Scripts */

    wp_enqueue_script('jquery-min',  get_stylesheet_directory_uri() . '/theme/js/jquery-3.1.1.min.js');

    wp_enqueue_script('js',  get_stylesheet_directory_uri() . '/theme/js/main.js');

    wp_register_script('vev', get_template_directory_uri() . '/theme/js/functions.js', false, null, true);
    wp_enqueue_script('vev');

}
add_action('wp_enqueue_scripts', 'vev_enqueues', 100);
