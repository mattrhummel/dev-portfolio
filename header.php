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

                <span><?php bloginfo(); ?></span>

            </a>

            <button href="javascript:void(0)" class="open-menu" onclick="openNav()" aria-label="menu-open">
                <i class="fa-sharp fa-solid fa-bars"></i>
            </button>

            <nav id="popOutMenu" class="main-menu">
                        
                    <button href="javascript:void(0)" class="close-button" onclick="closeNav()" aria-label="menu-close"> <i class="fa-solid fa-xmark"></i>
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
