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
    <a href="#main-content" class="skip">Skip to main content</a>

    <header class="nav-container">


            <?php
			the_custom_logo(); ?>

            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo"><?php bloginfo(); ?></a>
            </h1>
            <nav id="site-navigation">
                <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary',
				)
			);
			?>
            </nav><!-- #site-navigation -->

            <ul class="social-links">
                <li>
                    <a href="https://github.com/mattrhummel" class="dark-background" title="Github">
                        <i class="fa-brands fa-github-alt light-text"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/mattrhummel/" class="dark-background" title="LinkedIn">
                        <i class="fa-brands fa-linkedin-in light-text"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/mattrhummel" class="dark-background" title="LinkedIn">
                        <i class="fa-brands fa-twitter light-text"></i>
                    </a>
                </li>
            </ul>


    </header>

    <main id="main-content">