<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>
<!-- all stylesheet directory need to replace with get_template_directory_uri(); -->

<body <?php body_class(); ?>>
    <!-- Header Area start  -->
    <header class="a2nHeader a2nHeader_fixed">
        <div class="header-container">
            <div class="a2nTop_header">
                <div class="a2nMobile_wrapper">

                    <button id="nxtMobile_menu" class="mobile_icon a2nIcon">
                        <img class="a2n_burger"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/hamburger.svg"
                            alt="hamburger">
                        <img class="a2n_cross"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/cross-white.svg"
                            alt="cross">
                    </button>

                </div>
                <div class="a2nLogo_wrapper">
                    <a href="<?php echo site_url(); ?>" class="a2n_link">
                        <img class="header_logo"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/logo.svg" alt="logo">
                    </a>
                </div>
                <div class="a2nSearch_wrapper">
                    <button id="nxtSearch_btn" class="search_icon a2nIcon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/search-white.svg"
                            alt="search">
                    </button>
                </div>
            </div>
        </div>
        <div class="header_nav-wrapper">
            <div class="header-container">
                <nav class="a2n_navigation">
                    <ul class="a2n-navigation__list">
                        <li class="navigation__list-item">
                            <a href="<?php echo site_url(); ?>/new" class="a2n_link">
                                <span class="a2n_link-text">New</span>
                                <img class="a2n_mobile_arrow"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-right-white.svg"
                                    alt="arrow">
                            </a>
                        </li>
                        <li class="navigation__list-item">
                            <a href="<?php echo site_url(); ?>/best-sellers" class="a2n_link">
                                <span class="a2n_link-text">Best
                                    Sellers</span>
                                <img class="a2n_mobile_arrow"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-right-white.svg"
                                    alt="arrow">
                            </a>
                        </li>
                        <li class="navigation__list-item nxt_has_child">
                            <a href="<?php echo site_url(); ?>/face" class="a2n_link">
                                <span class="a2n_link-text">Face</span>
                                <img class="a2n_mobile_arrow"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-right-white.svg"
                                    alt="arrow">
                            </a>
                            <div class="navigation__list-container">
                                <div class="header-container">
                                    <div class="a2n_container-inner">
                                        <button class="a2n_back-button a2nIcon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-left-white.svg"
                                                alt="arrow"><span class="a2n_link-text">Face</span>
                                        </button>
                                        <ul class="a2n-navigation__list">
                                            <li class="navigation__list-nested"><a href="<?php echo site_url(); ?>/face"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">All
                                                        Face Products</span></a></li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/face/blusher"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Blusher</span></a>
                                            </li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/face/concealer"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Concealer</span></a>
                                            </li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/face/foundation"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Foundation</span></a>
                                            </li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/face/powder"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Powder</span></a>
                                            </li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/face/primer"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Primer</span></a>
                                            </li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/face/contouring"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Contour</span></a>
                                            </li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/face/highlighting"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Highlighter</span></a>
                                            </li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/face/bronzer"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Bronzer</span></a>
                                            </li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/face/serum"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Serum</span></a>
                                            </li>
                                        </ul><a href="<?php echo site_url(); ?>/virtual-try-on"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vto-nav-image.webp"
                                                        alt="VTO Finder nav image">
                                                </div>
                                            </div><span class="a2n_link-text">Virtual Try
                                                On</span>
                                        </a><a href="<?php echo site_url(); ?>/face/foundation"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mf-foundation-nav-image-2.webp"
                                                        alt="nav image">
                                                </div>
                                            </div><span class="a2n_link-text">Foundation</span>
                                        </a><a href="<?php echo site_url(); ?>/face/blusher" class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mf_blusher_nav_image.webp"
                                                        alt="Blusher">
                                                </div>
                                            </div><span class="a2n_link-text">Blusher</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navigation__list-item nxt_has_child">
                            <a href="<?php echo site_url(); ?>/eyes" class="a2n_link"><span
                                    class="a2n_link-text">Eyes</span>
                                <img class="a2n_mobile_arrow"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-right-white.svg"
                                    alt="arrow">
                            </a>
                            <div class="navigation__list-container">
                                <div class="header-container">
                                    <div class="a2n_container-inner">
                                        <button class="a2n_back-button a2nIcon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-left-white.svg"
                                                alt="arrow"><span class="a2n_link-text">Eyes</span>
                                        </button>
                                        <ul class="a2n-navigation__list">
                                            <li class="navigation__list-nested"><a href="<?php echo site_url(); ?>/eyes"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">All
                                                        Eye Products</span></a></li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/eyes/brows"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Brows</span></a>
                                            </li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/eyes/eyeliner"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Eyeliner</span></a>
                                            </li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/eyes/eyeshadow"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Eyeshadow</span></a>
                                            </li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/eyes/mascara"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Mascara</span></a>
                                            </li>
                                        </ul><a href="<?php echo site_url(); ?>/eyes/mascara" class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mf-mascara-nav-image.webp"
                                                        alt="mascara">
                                                </div>
                                            </div><span class="a2n_link-text">Mascara</span>
                                        </a><a href="<?php echo site_url(); ?>/eyes/eyeshadow"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mf_eyeshadow-nav-image.webp"
                                                        alt="mf_eyeshadow">
                                                </div>
                                            </div><span class="a2n_link-text">Eyeshadow</span>
                                        </a><a href="<?php echo site_url(); ?>/eyes/eyeliner" class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nav-eyes-eyeliner.jpeg"
                                                        alt="eyeliner">
                                                </div>
                                            </div><span class="a2n_link-text">Eyeliner</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navigation__list-item nxt_has_child">
                            <a href="<?php echo site_url(); ?>/lips" class="a2n_link"><span
                                    class="a2n_link-text">Lips</span>
                                <img class="a2n_mobile_arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-right-white.svg"
                                    alt="arrow">
                            </a>
                            <div class="navigation__list-container">
                                <div class="header-container">
                                    <div class="a2n_container-inner">
                                        <button class="a2n_back-button a2nIcon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-left-white.svg"
                                                alt="arrow"><span class="a2n_link-text">Lips</span>
                                        </button>
                                        <ul class="a2n-navigation__list">
                                            <li class="navigation__list-nested"><a href="<?php echo site_url(); ?>/lips"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">All
                                                        Lip Products</span></a></li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/lips/lip-gloss"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">Lip
                                                        Gloss</span></a></li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/lips/lipliner"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">Lip
                                                        liner</span></a></li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/lips/lipstick"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Lipstick</span></a>
                                            </li>
                                        </ul><a href="<?php echo site_url(); ?>/lips/lipstick"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mf-lipstick-nav-image.webp"
                                                        alt="lipstick">
                                                </div>
                                            </div><span class="a2n_link-text">Lipstick</span>
                                        </a><a href="<?php echo site_url(); ?>/lips/lipliner" class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nav-lips-lipliner.jpeg"
                                                        alt="lipliner">
                                                </div>
                                            </div><span class="a2n_link-text">Lipliner</span>
                                        </a><a href="<?php echo site_url(); ?>/lips/lip-gloss"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nav-lips-lipgloss.jpeg"
                                                        alt="lipgloss">
                                                </div>
                                            </div><span class="a2n_link-text">Lip
                                                gloss</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navigation__list-item nxt_has_child">
                            <a href="<?php echo site_url(); ?>/nails" class="a2n_link"><span
                                    class="a2n_link-text">Nails</span>
                                <img class="a2n_mobile_arrow"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-right-white.svg"
                                    alt="arrow">
                            </a>
                            <div class="navigation__list-container">
                                <div class="header-container">
                                    <div class="a2n_container-inner">
                                        <button class="a2n_back-button a2nIcon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-left-white.svg"
                                                alt="arrow"><span class="a2n_link-text">Nails</span>
                                        </button>
                                        <ul class="a2n-navigation__list">
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/nails/nail-polish"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">Nail
                                                        Polish</span></a></li>
                                        </ul><a
                                            href="<?php echo site_url(); ?>/nails/nail-polish/nailfinity-gel-colour-nail-polish"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mf-nailfinity-gel-nav-image.webp"
                                                        alt="nailfinity">
                                                </div>
                                            </div><span class="a2n_link-text">NAILFINITY
                                                GEL COLOUR NAIL POLISH</span>
                                        </a><a
                                            href="<?php echo site_url(); ?>/nails/nail-polish/masterpiece-xpress-nail-polish"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mf-masterpiece-xpress-nav-image.webp"
                                                        alt="masterpiece">
                                                </div>
                                            </div><span class="a2n_link-text">MASTERPIECE
                                                XPRESS NAIL POLISH</span>
                                        </a><a
                                            href="<?php echo site_url(); ?>/nails/nail-polish/miracle-pure-nail-care-vegan-strengthener"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mf-miracle-pure-nail-care-vegan-nav-image-v2.webp"
                                                        alt="BlusStrengthenerher">
                                                </div>
                                            </div><span class="a2n_link-text">Miracle Pure
                                                Nail Care Vegan Strengthener</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navigation__list-item">
                            <a href="<?php echo site_url(); ?>/makeup-tutorials" class="a2n_link">
                                <span class="a2n_link-text">Makeup
                                    Tutorials</span>
                                <img class="a2n_mobile_arrow"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-right-white.svg"
                                    alt="arrow">
                            </a>
                        </li>
                        <li class="navigation__list-item">
                            <a href="<?php echo site_url(); ?>/makeup-artists" class="a2n_link">
                                <span class="a2n_link-text">Makeup
                                    Artists</span>
                                <img class="a2n_mobile_arrow"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-right-white.svg"
                                    alt="arrow">
                            </a>
                        </li>
                        <li class="navigation__list-item nxt_has_child">
                            <a href="<?php echo site_url(); ?>/virtual-try-on" class="a2n_link">
                                <span class="a2n_link-text">Virtual Try
                                    On</span>
                                <img class="a2n_mobile_arrow"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-right-white.svg"
                                    alt="arrow">
                            </a>
                            <div class="navigation__list-container">
                                <div class="header-container">
                                    <div class="a2n_container-inner">
                                        <button class="a2n_back-button a2nIcon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-left-white.svg"
                                                alt="arrow">
                                            <span class="a2n_link-text">Virtual Try
                                                On</span>
                                        </button>
                                        <ul class="a2n-navigation__list">
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/virtual-try-on"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">VIRTUAL
                                                        TRY ON</span></a></li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/virtual-try-on"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Foundation
                                                        Finder</span></a></li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/virtual-try-on"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">Makeup
                                                        Virtual Try&nbsp;On</span></a></li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/virtual-try-on"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">Nail
                                                        Virtual Try&nbsp;On</span></a></li>
                                        </ul><a href="<?php echo site_url(); ?>/virtual-try-on"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Max-Factor-VTO-Foundation-Finder-Nav.webp"
                                                        alt="Foundation">
                                                </div>
                                            </div><span class="a2n_link-text">Foundation
                                                Finder</span>
                                        </a><a href="<?php echo site_url(); ?>/virtual-try-on"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vto-nav-image.webp"
                                                        alt="vto">
                                                </div>
                                            </div><span class="a2n_link-text">Makeup
                                                Virtual Try On</span>
                                        </a><a href="<?php echo site_url(); ?>/virtual-try-on"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Max-Factor-VTO-Nail-Finder-Nav.jpeg"
                                                        alt="Virtual">
                                                </div>
                                            </div><span class="a2n_link-text">Nail
                                                Virtual Try On</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navigation__list-item nxt_has_child">
                            <a href="<?php echo site_url(); ?>/our-brand" class="a2n_link"><span
                                    class="a2n_link-text">Our
                                    Brand</span>
                                <img class="a2n_mobile_arrow"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-right-white.svg"
                                    alt="arrow">
                            </a>
                            <div class="navigation__list-container">
                                <div class="header-container">
                                    <div class="a2n_container-inner">
                                        <button class="a2n_back-button a2nIcon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-left-white.svg"
                                                alt="arrow"><span class="a2n_link-text">Our
                                                Brand</span>
                                        </button>
                                        <ul class="a2n-navigation__list">
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/our-brand"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">All
                                                        Our Brand</span></a></li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/our-brand/max-factor-story"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">The
                                                        Max Factor Story</span></a></li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/our-brand/our-heritage"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">Our
                                                        Heritage</span></a></li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/our-brand/10-iconic-firsts"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">10
                                                        Iconic Firsts</span></a></li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/our-brand/iconic-looks"
                                                    class="a2n_link a2n_link-nested"><span class="a2n_link-text">Iconic
                                                        Looks</span></a></li>
                                        </ul><a href="<?php echo site_url(); ?>/our-brand/max-factor-story"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/navigation-maxfactorstory.webp"
                                                        alt="maxfactorstory">
                                                </div>
                                            </div><span class="a2n_link-text">The
                                                Max Factor Story</span>
                                        </a><a href="<?php echo site_url(); ?>/our-brand/our-heritage"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/navigation-ourheritage.webp"
                                                        alt="ourheritage">
                                                </div>
                                            </div><span class="a2n_link-text">Our
                                                heritage</span>
                                        </a><a href="<?php echo site_url(); ?>/our-brand/10-iconic-firsts"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/navigation-10iconicfirsts.webp"
                                                        alt="10iconicfirsts">
                                                </div>
                                            </div><span class="a2n_link-text">10
                                                Iconic First</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navigation__list-item nxt_has_child">
                            <a href="<?php echo site_url(); ?>/light-the-way" class="a2n_link"><span
                                    class="a2n_link-text">Light the
                                    way</span>
                                <img class="a2n_mobile_arrow"
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-right-white.svg"
                                    alt="arrow">
                            </a>
                            <div class="navigation__list-container">
                                <div class="header-container">
                                    <div class="a2n_container-inner">
                                        <button class="a2n_back-button a2nIcon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/arrow-left-white.svg"
                                                alt="arrow"><span class="a2n_link-text">Light the
                                                way</span>
                                        </button>
                                        <ul class="a2n-navigation__list">
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/light-the-way"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">About</span></a>
                                            </li>
                                            <li class="navigation__list-nested"><a
                                                    href="<?php echo site_url(); ?>/light-the-way/unicef"
                                                    class="a2n_link a2n_link-nested"><span
                                                        class="a2n_link-text">Unicef</span></a>
                                            </li>
                                        </ul><a href="<?php echo site_url(); ?>/light-the-way"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mf-nav-light-the-way.webp"
                                                        alt="Light The Way">
                                                </div>
                                            </div><span class="a2n_link-text">About</span>
                                        </a><a href="<?php echo site_url(); ?>/light-the-way/unicef"
                                            class="a2n_link a2n_mega">
                                            <div class="a2n_image-container">
                                                <div class="flex-container align-center">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nav-mf-unicef-v2.webp"
                                                        alt="Unicef">
                                                </div>
                                            </div><span class="a2n_link-text">Unicef</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>


    </header>
    <!-- search popup  -->
    <div id="nxtSearch_modal" class="nxt_search__modal-overlay">
        <div class="a2n_search__modal">
            <div class="search">
                <div class="header-container">
                    <div class="search__first-row-controls">
                        <button id="nxtSearch_cross" class="button search__close-button a2nIcon">
                            <img class="cross-icon"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/cross-white.svg"
                                alt="cross">
                        </button>
                    </div>
                </div>
                <div class="header-container">
                    <form action="/" class="search__form">
                        <input class="search__input" placeholder="Search for a product..." name="search"
                            id="search-input" type="text" value="">

                        <button id="search-submit-button" type="submit" class="search__button a2nIcon">
                            <img class="search__icon"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/search-white.svg"
                                alt="search">
                        </button>
                    </form>
                    <div class="search__results">
                        <h6 class="heading search__results-title">Popular Searches</h6>
                        <ul class="search__results-list"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Area end  -->