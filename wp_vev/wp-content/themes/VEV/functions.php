<?php
/*
All the functions are in the PHP pages in the `functions/` folder.
*/
require get_template_directory() . '/functions/menus.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/logo-customizer.php';
require get_template_directory() . '/functions/background-customizer.php';
require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/disable-comments.php');
require_once locate_template('/functions/duplicate-posts.php');
require_once locate_template('/functions/wordpress-functions.php');