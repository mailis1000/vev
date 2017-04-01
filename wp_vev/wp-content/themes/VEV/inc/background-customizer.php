<?php
function starter_customize_register( $wp_customize )
{
	$wp_customize->add_section( 'vev_theme_settings' , array(
		'title'    => __( 'Theme Settings', 'vev' ),
		'priority' => 0
	) );

	$wp_customize->add_setting( 'vev_main_txt_color' , array(
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vev_main_txt_color', array(
		'label'    => __( 'Main text color', 'vev' ),
		'section'  => 'vev_theme_settings',
		'settings' => 'vev_main_txt_color',
	) ) );

	$wp_customize->add_setting( 'vev_background_image' , array(
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'vev_background_image', array(
		'label'    => __( 'Background image', 'vev' ),
		'section'  => 'vev_theme_settings',
		'settings' => 'vev_background_image',
	) ) );

	$wp_customize->add_setting( 'vev_background_overlay_image' , array(
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'vev_background_overlay_image', array(
		'label'    => __( 'Background overlay image', 'vev' ),
		'section'  => 'vev_theme_settings',
		'settings' => 'vev_background_overlay_image',
	) ) );

	$wp_customize->add_setting( 'vev_background_color' , array(
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vev_background_color', array(
		'label'    => __( 'Background color', 'vev' ),
		'section'  => 'vev_theme_settings',
		'settings' => 'vev_background_color',
	) ) );
}
add_action( 'customize_register', 'starter_customize_register');