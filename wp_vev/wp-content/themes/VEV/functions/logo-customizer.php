<?php
function vev_customize_register( $wp_customize_logo ) {
	$wp_customize_logo->add_setting( 'vev_logo' ); // Add setting for logo uploader

    // Add control for logo uploader (actual uploader)
	$wp_customize_logo->add_control( new WP_Customize_Image_Control( $wp_customize_logo, 'vev_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'vev' ),
        'section'  => 'title_tagline',
        'settings' => 'vev_logo',
    ) ) );
}
add_action( 'customize_register', 'vev_customize_register' );