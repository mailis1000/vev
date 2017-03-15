<?php
function vev_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'vev_logo' ); // Add setting for logo uploader

    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'vev_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'vev' ),
        'section'  => 'title_tagline',
        'settings' => 'vev_logo',
    ) ) );
}
add_action( 'customize_register', 'vev_customize_register' );