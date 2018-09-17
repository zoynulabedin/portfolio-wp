<!DOCTYPE html>
<html <?php language_attributes(); ?> data-random-animation="false" data-animation="11">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <!--Meta Tags-->
        <meta charset="<?php bloginfo('carset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="vcard, resume, personal, portfolio, cv, card, responsive" />
        <meta name="description" content="vCard / Resume / Personal Template" />
        <meta name="author" content="cosmos-themes" />

        <!--Page Title-->
        <?php bloginfo( 'title' ); ?>

        <!--Plugins Css-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins.css">
        <!--Main Styles Css-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-dark.css">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-demo.css">

        <!--Color Css-->
        <link class="site-color" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/blue-color.css">

        <!--Modernizr Js-->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr.js"></script>

        <!--Favicons-->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="../www.googletagmanager.com/gtag/jsc150?id=UA-122650090-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-122650090-3');
        </script>

    </head>

    <body>

        <div class="theme-options dark">
            <div class="toggle-btn">
                <span><i class="fas fa-cog"></i></span>
            </div>
            <div class="theme-menu">
                <div class="page-transitions">
                    <h4>Page Animation</h4>
                    <select class="demo-select form-control" id="anim-type">
                        <option>Choose</option>
                        <option value="0">Random</option>
                    </select>
                </div>
                <div class="theme-color">
                    <h4 class="mt-20">Colors</h4>
                    <ul>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/assets/css/blue-color.css" style="background-color: #00A3E1;;"></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/assets/css/red-color.css" style="background-color: #E82A2A;"></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/assets/css/green-color.css" style="background-color: #6ac045;"></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/assets/css/yellow-color.css" style="background-color: #D1A71D;"></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/assets/css/pink-color.css" style="background-color: #FF1493;"></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/assets/css/purple-color.css" style="background-color: #5078FF;"></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--Preloader Start-->
        <div class="preloader">
            <div class="loader">
                <!--Your Name-->
                <h4>ZOYNUL ABEDIN</h4>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!--Preloader End-->

        <div id="page">

            <!--Header Start-->
            <header>
                <div class="header-content">

                    <!--Mobile Header-->
                    <div class="header-mobile">
                        <a class="header-toggle"><i class="fas fa-bars"></i></a>
                        <h2>ZOYNUL ABEDIN</h2>
                    </div>

                    <!--Main Header-->
                    <div class="header-main" data-simplebar>

                       
                        <div class="image-container">
                        <?php $logo_text = get_field('logo_text', 'options'); 
                            if ($logo_text): ?>
                            <h2 class="header-name"><?php echo esc_html($logo_text); ?></h2>
                            <?php else: ?>

                            <h2 class="header-name"><?php _e('ZOYNUL ABEDIN'); ?></h2>

                            <?php endif; ?>

                            <?php $logo = get_field('header_logo', 'options'); 
                            if ($logo): ?>
                            <img src="<?php echo esc_url($logo); ?>" alt="<?php echo esc_url($logo); ?>">
                            <?php else: ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/img/profile-img.jpg" alt="<?php echo esc_url($logo); ?>">
                            <?php endif; ?>
                        </div>

                        <!--Nav Menus-->
                        <nav class="nav-menu">

                        <?php 
                        wp_nav_menu([
                            'theme_location'  =>'main-menu',
                            'menu_class'       =>' ',
                            'menu_id'          =>' ',
                            'container'        =>' '

                        ]);
                    
                        ?>
                            <!-- <ul>
                                <li><a href="#home" class="pt-link active"><span class="nav-menu-icon"><i class="lnr lnr-home"></i></span>Home </a> </li>
                                <li><a href="#about" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-user"></i></span>About Me</a></li>
                                <li><a href="#resume" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-license"></i></span>Resume</a></li>
                                <li><a href="#portfolio" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-briefcase"></i></span>Portfolio</a></li>
                                <li><a href="#blog" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-book"></i></span>Blog</a></li>
                                <li><a href="#contact" class="pt-link"><span class="nav-menu-icon"><i class="lnr lnr-envelope"></i></span>Contact</a></li>
                            </ul> -->
                        </nav>
                        
                        <!--Nav Footer-->
                        <div class="nav-footer">

                        <?php $social = get_field('footer_social', 'portfolio');?>
                            <!--Social Links-->
                            <ul class="social">
                                <?php if($social['facebook']):?>
                                <li><a href="<?php echo esc_url($social['facebook']); ?>"><i class="fab fa-facebook-square"></i></a></li>
                                 <?php endif; ?>
                            
                                <?php if($social['twitter']):?>
                                <li><a href="<?php echo esc_url($social['twitter']); ?>"><i class="fab fa-twitter-square"></i></a></li>

                                <?php endif; ?>

                                 <?php if($social['youtube']):?>
                                <li><a href="<?php echo esc_url($social['youtube']); ?>"><i class="fab fa-youtube-square"></i></a></li>
                                <?php endif; ?>

                                <?php if($social['behance']):?>
                                <li><a href="<?php echo esc_url($social['behance']); ?>"><i class="fab fa-behance-square"></i></a></li>
                                <?php endif; ?>
                            </ul>
                            <!--Copyright Text-->
                            <div class="copy">
                                <?php if(get_field('footer_text')) : ?>
                                <p> <?php echo esc_html(get_field('footer_text')); ?></p>
                                <?php else :?>
                                <p> <?php _e('2018 © zoynul.All Right Reserved.','portfolio'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </header>