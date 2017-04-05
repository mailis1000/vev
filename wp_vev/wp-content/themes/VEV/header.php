<?php
$background_img = get_theme_mod( 'vev_background_image' );
$background_overlay_img = get_theme_mod( 'vev_background_overlay_image' );
$vev_background_color = get_theme_mod( 'vev_background_color' );
$logo_img = get_theme_mod( 'vev_logo' );
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="script" href="theme/js/jquery-3.1.1.min.js">
    <?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
    <section id="front-main">
        <div class="content">
            <div class="background">
                <div class="overlay">
                </div>
            </div>
        </div>
        <!--
        <div class="mobile-nav-line">
            <a href="#" id="toggle-menu"></a>
        </div>
        -->


        <div class="panel-left">
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

            <div class="contact-info">
                <?php $acf_footer_txt = get_field('acf_footer_txt'); ?>
                <?php if ($acf_footer_txt): ?>
                    <?php echo $acf_footer_txt; ?>
                <?php else: ?>
                <ul>
                    <li><a href="mailto:info@vev.ee"><span class="email">info@vev.ee</span></a></li>
                    <li><span class="phone">50 76 800</span> </li>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <header id="header" role="header">
        <div class="container clearfix">
            <div class="header-inner">
                <a id="sitelogo" href="<?php echo icl_get_home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/theme/images/header-logo.png" alt="" /></a>
                <div class="header-top">
                    <?php
                    $acf_header_fb = get_field('acf_header_fb', 'option');
                    $acf_header_yt = get_field('acf_header_yt', 'option');
                    ?>
                    <?php if( $acf_header_fb || $acf_header_yt ){ ?>
                        <ul class="header-social">
                            <?php
                            if( $acf_header_fb ){
                                echo '<li><a href="'. $acf_header_fb .'" target="_blank"><img src="', get_template_directory_uri(), '/theme/images/icons/facebook-icon.png" alt="" /></a></li>';
                            }
                            if( $acf_header_yt ){
                                echo '<li><a href="'. $acf_header_yt .'" target="_blank"><img src="', get_template_directory_uri(), '/theme/images/icons/youtube-icon.png" alt="" /></a></li>';
                            }
                            ?>
                        </ul>
                    <?php } ?>
                    <?php do_action('wpml_add_language_selector'); ?>
                    <ul class="header-ul">
                        <?php $acf_header_phone = get_field('acf_header_phone', 'option'); ?>
                        <?php
                        if( $acf_header_phone ){
                            echo '<li class="phone-li">', _e('Küsi infot', 'ama'),': <strong>'. $acf_header_phone .'</strong></li>';
                        }
                        ?>
                        <li class="cart-li"><a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>"><span class="cart-icon"><span class="cart-amount"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></span><?php _e('OSTUKORV', 'ama'); ?>: <strong><?php echo WC()->cart->get_cart_total(); ?></strong></a></li>
                    </ul>
                </div>
                <?php
                if ( has_nav_menu( 'primary' ) ) :
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'nav',
                        'container_class'   => '',
                        'container_id'      => 'primary-menu',
                        'menu_class'        => 'menu'
                    ));
                endif;
                ?>
            </div>
        </div>
    </header>
    <header id="head-mobile">
        <a href="<?php echo get_option('home'); ?>" id="mobile-logo"></a>
        <a href="javascript:void(0)" class="icon">
            <div class="menui top-menu"></div>
            <div class="menui mid-menu"></div>
            <div class="menui bottom-menu"></div>
        </a>
    </header>
    <div class="mobilenav">
        <div class="inner">
            <nav class="mobile-menu">
                <?php if ( has_nav_menu( 'primary' ) ) :
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => '',
                        'container_class'   => '',
                        'container_id'      => '',
                        'menu_class'        => 'mobile-menu'
                    ));
                endif; ?>
            </nav>
            <div class="mobile-bottom">
                <div class="mobile-cart">
                    <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>"><span class="cart-icon"><span class="cart-amount"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></span><?php _e('OSTUKORV', 'ama'); ?>: <strong><?php echo WC()->cart->get_cart_total(); ?></strong></a>
                </div>
                <?php echo languages_list_mobile(); ?>
            </div>
        </div>
    </div>
