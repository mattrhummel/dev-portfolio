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
    <?php   wp_body_open(); ?>

    <a href="#main-content" class="skip">Skip to main content</a>

    <div id="wrapper">

    <header class="nav-container">

                
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
                
                <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="" class="bio-photo"/>
                <span><?php bloginfo(); ?></span>

              </a>

              <ul class="social-links">
                <li >
                    <a href="https://github.com/mattrhummel" class="dark-background" title="Github" >
                        <i class="fa-brands fa-github-alt light-text"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/mattrhummel/" class="dark-background" title="LinkedIn">
                        <i class="fa-brands fa-linkedin-in light-text"></i>
                    </a>
                </li>
            </ul>


                <a href="javascript:void(0)" class="light-text open-menu" onclick="openNav()">
                     <i class="fa-sharp fa-solid fa-bars"></i>
                </a>

    </header>

<nav id="mySidenav" class="sidenav">

<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</i>


    <div class="container">


</a>

  <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary',
				)
			);
			?>

        </div>

        </div>
</nav>

    <main id="main-content">


