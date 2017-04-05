<?php
add_action('admin_bar_menu', 'remove_wp_logo', 999);
	function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node('wp-logo');
}
/*custom login logo*/
function custom_login_url() {
	return home_url( '/' );
}
add_filter( 'login_headerurl', 'custom_login_url' );
function custom_login_title() {
	return get_option( 'blogname' );
}
add_filter( 'login_headertitle', 'custom_login_title' );