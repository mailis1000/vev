<?php
$background_img = get_theme_mod( 'vev_background_image' );
$background_overlay_img = get_theme_mod( 'vev_background_overlay_image' );
$vev_background_color = get_theme_mod( 'vev_background_color' );
$logo_img = get_theme_mod( 'vev_logo' );
?>

<html>
<head>
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
<div id="wrapper">

    <div id="main">

    </div>
    <section id="front-main">
        <div class="content">
            <div class="background" style='background-image: url(" <?php echo $background_img; ?> ")'>
                <div class="overlay" style='background-image: url(" <?php echo $background_overlay_img; ?> ")'>
                    <div class="overlay-inner" style='background-color: <?php echo $vev_background_color; ?>'>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo">
            <?php if ( $logo_img ) : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img src="<?php echo $logo_img; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
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
    'menu_class'=>'nav',
    'depth' => 0
));
?>