<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aruraharja
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Loads the internal WP jQuery. Required if a 3rd party plugin loads jQuery in header instead in footer -->
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class("bg-white"); ?>>

    <div id="to-top"></div>

    <div id="page" class="site">

        <header id="masthead" class="site-header">

            <nav id="nav-main" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">

                <div class="container">

                    <a class="navbar-brand d-md-none" href="<?php echo esc_url(home_url()); ?>">
                        <?php $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                        if (has_custom_logo()) {
                            echo '<img class="rounded" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        } ?>
                    </a>
                    <a class="navbar-brand d-none d-md-block py-3" href="<?php echo esc_url(home_url()); ?>">
                        <?php $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                        if (has_custom_logo()) {
                            echo '<img class="rounded" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        } ?>
                    </a>

                    <!-- Top Nav Widget -->
                    <div class="top-nav order-lg-3 flex-grow-1 flex-lg-grow-0 d-flex justify-content-end">
                        <?php if (is_active_sidebar('top-nav')) : ?>
                            <div>
                                <?php dynamic_sidebar('top-nav'); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Top Nav Search Mobile -->
                    <div class="top-nav-search-md d-lg-none ms-2">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary btn-dropdown right" type="button" id="dropdown-search" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-search"></i>
                            </button>
                            <div class="dropdown-search dropdown-menu position-fixed border-0 bg-light rounded-0 start-0 end-0" aria-labelledby="dropdown-search">
                                <div class="container">
                                    <?php if (is_active_sidebar('top-nav-search')) : ?>
                                        <div class="mb-2">
                                            <?php dynamic_sidebar('top-nav-search'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="navbar-toggler border-0 focus-0 py-2 pe-0 ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
                        <i class="text-secondary fas fa-bars"></i>
                    </button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" data-bs-hideresize="true" id="offcanvas-navbar">
                        <div class="offcanvas-header hover cursor-pointer bg-light text-primary" data-bs-dismiss="offcanvas">
                            <i class="fas fa-chevron-left"></i> <?php esc_html_e('Close menu', 'aruraharja'); ?>
                        </div>
                        <div class="offcanvas-body">
                            <!-- Bootstrap 5 Nav Walker Main Menu -->
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'container' => false,
                                'menu_class' => '',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="aruraharja-navbar" class="navbar-nav mx-auto %2$s">%3$s</ul>',
                                'depth' => 2,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                            ?>
                            <!-- Bootstrap 5 Nav Walker Main Menu End -->
                        </div>
                    </div>

                    <!-- Top Nav Search Large -->
                    <div class="top-nav-search-lg d-none d-lg-block order-lg-3 ms-2">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary btn-dropdown right" type="button" id="dropdown-search" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-search"></i>
                            </button>
                            <div class="dropdown-search dropdown-menu position-fixed border-0 bg-light rounded-0 start-0 end-0" aria-labelledby="dropdown-search">
                                <div class="container">
                                    <?php if (is_active_sidebar('top-nav-search')) : ?>
                                        <div class="mb-2">
                                            <?php dynamic_sidebar('top-nav-search'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- container -->

            </nav>

        </header><!-- #masthead -->

        <?php aruraharja_ie_alert(); ?>