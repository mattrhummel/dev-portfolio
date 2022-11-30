<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dev-portfolio
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V9718KN95J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-V9718KN95J');
    </script>
    <title><?php wp_title(''); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <a href="<?php esc_html_e('#main-content', 'dev-portfolio') ?>" class="skip"><?php _e('Skip to main content', 'dev-portfolio') ?></a>

    <header class="nav-container" id="mainHeader">
        <div class="container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">

                <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt=""
                    class="bio-photo" />
                <span><?php bloginfo(); ?></span>

            </a>

            <ul class="social-links">
                <li>
                    <a href="<?php esc_html_e( 'https://github.com/mattrhummel', 'dev-portfolio' ) ?>"  title="Github">
                        <i class="fa-brands fa-github-alt"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php esc_html_e( 'https://www.facebook.com/profile.php?id=100086489538676', 'dev-portfolio' ) ?>" title="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php esc_html_e( 'https://www.linkedin.com/in/mattrhummel/', 'dev-portfolio' ) ?>" title="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php esc_html_e( 'https://medium.com/@matthummel/list/reading-list', 'dev-portfolio' ) ?>" title="Medium">
                        <i class="fa-brands fa-medium"></i>
                    </a>
                </li>
            </ul>

            <button href="javascript:void(0)" class="open-menu" onclick="openNav()" aria-label="menu open">
                <i class="fa-sharp fa-solid fa-bars"></i>
            </button>

            <nav id="popOutMenu" class="main-menu">
                        <button href="javascript:void(0)" class="close-button" onclick="closeNav()" aria-label="menu close"> <i class="fa-solid fa-xmark"></i>
                        </button>

                    <div class="popout-container">

    
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary',
                            )
                        );
                        ?>

                    </div>

            </nav>
        </div>
    </header>


    <div id="wrapper">

        <main id="main-content">
