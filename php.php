<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jailydesign
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="stylesheet" href="/wp-content/themes/jailydesign/libs/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/wp-content/themes/jailydesign/libs/animate/animate.css">
    <link rel="stylesheet" href="/wp-content/themes/jailydesign/libs/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/wp-content/themes/jailydesign/libs/owlcarousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="/wp-content/themes/jailydesign/css/fonts.css">
    <link rel="stylesheet" href="/wp-content/themes/jailydesign/css/main.css?v=<?= date('dmy') ?>">
    <link rel="stylesheet" href="/wp-content/themes/jailydesign/css/media.css?v=<?= date('dmy') ?>">

    <script src="/wp-content/themes/jailydesign/libs/modernizr/modernizr.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="mobile_nav" id="mobile_nav"></div>
    <header class="header">
        <div class="container">
            <div class="header_content">
                <div class="logo">
                    <a href="/"><img src="/wp-content/themes/jailydesign/img/logo.png" alt=""></a>
                </div>
                <nav class="nav">
                    <div class="mobile_menu">
                        <div class="burger_menu" id="burger_menu">
                            <span></span>
                        </div>
                        <div class="menu_close_btn" id="menu_close_btn"><button><img loading="lazy" src="/wp-content/themes/jailydesign/img/close_modal.png" alt=""></button></div>
                    </div>
                    <?php wp_nav_menu(array(
                        'menu_id'     => 'menu',
                    )); ?>
                    <ul id="menu">
                        <li><a data-scroll="s3">Портфолио</a></li>
                        <li><a data-scroll="s4">Наши услуги</a></li>
                        <li><a data-scroll="s5">Оставить завяку</a></li>
                        <li><a data-scroll="s6">Наша команда</a></li>
                        <li><a data-scroll="s7">Отзывы</a></li>
                    </ul>
                </nav>
                <div class="header_contact">
                    <a class="header_contact_btn" href="tel:+7 701 951 25 23">+7 701 951 25 23</a>
                </div>
            </div>
        </div>
    </header>