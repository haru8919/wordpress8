<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header js-header">
        <div class="header__inner">
            <h1 class="header__name"><img class="header__logo"
                    src="<?php echo esc_url(get_theme_file_uri("/images/header-logo.svg")); ?>" alt="ヘッダーロゴ" /></h1>
            <nav class="header__nav md-none">
                <ul class="header__items">
                    <li class="header__item">
                        <a href="#top" class="header__link">TOP</a>
                    </li>
                    <li class="header__item">
                        <a href="about.html" class="header__link">ABOUT</a>
                    </li>
                    <li class="header__item">
                        <a href="service.html" class="header__link">SERVICE</a>
                    </li>
                    <li class="header__item">
                        <a href="#works" class="header__link">WORKS</a>
                    </li>
                    <li class="header__item">
                        <a href="#news" class="header__link">NEWS</a>
                    </li>
                    <li class="header__item">
                        <a href="#contact" class="header__link header__link--contact"><i
                                class="fa-regular fa-envelope"></i>CONTACT</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="hamburger js-hamburger md-show">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="drawer">
            <div class="drawer-menu js-drawer">
                <div class="drawer__logo"><img src="<?php echo esc_url(get_theme_file_uri("/images/logo.svg")); ?>"
                        alt=""></div>
                <div class="drawer-menu__inner">
                    <ul class="drawer-menu__items">
                        <li class="drawer-menu__item">
                            <a href="#" class="drawer-menu__link">TOP</a>
                        </li>
                        <li class="drawer-menu__item">
                            <a href="about.html" class="drawer-menu__link">ABOUT</a>
                        </li>
                        <li class="drawer-menu__item">
                            <a href="#" class="drawer-menu__link">SERVICE</a>
                        </li>
                        <li class="drawer-menu__item">
                            <a href="#" class="drawer-menu__link">NEWS</a>
                        </li>
                        <li class="drawer-menu__item">
                            <a href="#" class="drawer-menu__link">CONTACT</a>
                        </li>
                        <li class="drawer-menu__item">
                            <a href="#" class="drawer-menu__link">プライバシーポリシー</a>
                        </li>
                        <div class="drawer-menu__icons">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="circle-bg"></div>
        </nav>
    </header>