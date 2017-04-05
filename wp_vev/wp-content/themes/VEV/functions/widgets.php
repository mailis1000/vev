<?php
function vev_widgets_init() {
	register_sidebar( array(
		'name'            => __( 'Sidebar', 'vev' ),
		'id'              => 'sidebar-widget-area',
		'description'     => __( 'The sidebar widget area', 'vev' ),
		'before_widget'   => '<div class="%1$s %2$s">',
		'after_widget'    => '</div>',
		'before_title'    => '<h4>',
		'after_title'     => '</h4>',
	));
}
add_action( 'widgets_init', 'vev_widgets_init' );

function vev_get_dynamic_sidebar($id){
    ob_start();
    dynamic_sidebar( $id );
    $dynamic_sidebar = ob_get_contents();
    ob_clean();
    return $dynamic_sidebar;
}