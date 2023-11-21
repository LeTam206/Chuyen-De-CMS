<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title>
        <?php echo bloginfo('name') ?>
    </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bellefair&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/jquery-ui.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/magnific-popup.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/style.css') ?>" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css') ?>">

</head>

<body>
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <!-- <div class="tip">2</div> -->
                </a></li>
            <li><a href="http://localhost/wordpress/cart"><span class="icon_bag_alt"></span>
                    <?php
                    $cart = WC()->cart;
                    if ($cart->get_cart_contents_count() > 0) { ?>
                        <div class="tip">
                            <?php echo $cart->get_cart_contents_count() ?>
                        </div>
                    <?php } ?>
                </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="<?php echo esc_url(home_url('/')) ?>">
                <?php the_custom_logo(); ?>
                <!-- <img src="<?php //echo get_theme_file_uri('images/logo2.png') ?>" alt="Logo Shoper"
                    style="max-width: 40%"> -->
            </a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="<?php echo esc_url(home_url('/')) ?>">
                            <?php the_custom_logo(); ?>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 text-center">
                    <nav class="header__menu">
                        <ul>
                            <?php
                            //wp_nav_menu();
                            $menu_items = wp_get_nav_menu_items('header-menu');
                            if ($menu_items) {
                                foreach ($menu_items as $menu_item) { ?>
                                    <li class="menu_item" id="menu_item_<?php echo $menu_item->ID ?>"><a
                                            href="<?php echo $menu_item->url ?>">
                                            <?php echo $menu_item->title ?>
                                        </a></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="#">Login</a>
                            <a href="#">Register</a>
                        </div>
                        <ul class="header__right__widget">
                            <li>
                                <span class="icon_search search_switch"></span>
                            </li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                    <!-- <div class="tip tip-fav">2</div> -->
                                </a></li>
                            <li>
                                <a href="http://localhost/wordpress/cart">
                                    <span class="icon_bag_alt"></span>
                                    <?php
                                    $cart = WC()->cart;
                                    if ($cart->get_cart_contents_count() > 0) { ?>
                                        <div class="tip tip-cart">
                                            <?php echo $cart->get_cart_contents_count() ?>
                                        </div>
                                    <?php } ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->