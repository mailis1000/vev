<html>
<head>
    <title>Virtuaalettevõte</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
<div id="wrapper">

    <div id="main">

    </div>
    <section id="front-main">
        <div class="content">
            <div class="background">
                <div class="overlay">
                    <div class="overlay2">
                    </div>
                </div>
            </div>
        </div>
        <div class="logo">
            <?php if ( get_theme_mod( 'vev_logo' ) ) : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img src="<?php echo get_theme_mod( 'vev_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </a>
            <?php else : ?>
                <hgroup>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <p class="site-description"><?php bloginfo( 'description' ); ?></p>
                </hgroup>
            <?php endif; ?>
        </div>
<?php
wp_nav_menu( array(
    'menu' => 'primary',
    'theme_location'=>'primary',
    'container_id' => 'navigation',
    'menu_class'=>'nav'
));
?>