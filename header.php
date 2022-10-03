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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="dist/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">
    <title>Matt Hummels Online Portfolio</title>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <a href="#main-content" class="skip">Skip to main content</a>

    <header class="nav-container">

        <div class="container-full spacebetween">

		<?php
			the_custom_logo(); ?>

			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo"><?php bloginfo(); ?></a></h1>
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
                    <a href="https://www.linkedin.com/in/mattrhummel/" class="dark-background" title="LinkedIn">
                        <i class="fa-brands fa-linkedin light-text"></i>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/mattrhummel" class="dark-background" title="Github">
                        <i class="fa-brands fa-github light-text"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/mattrhummel" class="dark-background" title="LinkedIn">
                        <i class="fa-brands fa-twitter light-text"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/matthummel.dev" class="dark-background" title="Github">
                        <i class="fa-brands fa-facebook light-text"></i>
                    </a>
                </li>
            </ul>
            
        </div>

    </header>

    <main  id="main-content">