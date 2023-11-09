<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head() ?>
</head>

<body>
    <!-- <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left">
                <a href="<?php echo site_url('/') ?>"><strong>Fictional</strong> University</a>
            </h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search"
                    aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
                <nav class="main-navigation">
                    <ul>
                        <li class="current-menu-item"><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Campuses</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </nav>
                <div class="site-header__util">
                    <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                    <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                    <span class="search-trigger js-search-trigger"><i class="fa fa-search"
                            aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </header> -->

    <?php get_header(); ?>

    <?php
        while(have_posts()){
            the_post();
    ?>
    <div class="page-banner">
        <div class="page-banner__bg-image"
            style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>)"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title() ?></h1>
            <div class="page-banner__intro">
                <!-- <p>Learn how the school of your dreams got started.</p> -->
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">
        <?php if(get_the_ID() == 251) { ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About
                        Us</a> <span class="metabox__main">Our History</span>
                </p>
            </div>

            <div class="page-links">
                <h2 class="page-links__title"><a href="#">About Us</a></h2>
                <ul class="min-list">
                    <li class="current_page_item"><a href="#">Our History</a></li>
                    <li><a href="#">Our Goals</a></li>
                </ul>
            </div>
        <?php } ?>
        
        <div class="generic-content">
            <p><?php the_content() ?></p>

        </div>
    </div>

    <?php } ?>

    <footer class="site-footer">
        <div class="site-footer__inner container container--narrow">
            <div class="group">
                <div class="site-footer__col-one">
                    <h1 class="school-logo-text school-logo-text--alt-color">
                        <a href="<?php echo site_url('/') ?>"><strong>Fictional</strong> University</a>
                    </h1>
                    <p><a class="site-footer__link" href="#">555.555.5555</a></p>
                </div>

                <div class="site-footer__col-two-three-group">
                    <div class="site-footer__col-two">
                        <h3 class="headline headline--small">Explore</h3>
                        <nav class="nav-list">
                            <ul>
                                <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
                                <li><a href="#">Programs</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Campuses</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="site-footer__col-three">
                        <h3 class="headline headline--small">Learn</h3>
                        <nav class="nav-list">
                            <ul>
                                <li><a href="#">Legal</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="site-footer__col-four">
                    <h3 class="headline headline--small">Connect With Us</h3>
                    <nav>
                        <ul class="min-list social-icons-list group">
                            <li>
                                <a href="#" class="social-color-facebook"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="social-color-twitter"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="social-color-youtube"><i class="fa fa-youtube"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="social-color-instagram"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>