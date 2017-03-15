<?php
require get_template_directory() . '/inc/logo-customizer.php';

register_nav_menus( array(
    'primary' => esc_html__( 'Primary Menu', 'vev' ),
) );