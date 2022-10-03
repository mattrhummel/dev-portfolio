<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 * Template Name: Contact Page
 * 
 * @package dev-portfolio
 */

get_header();
?>

		 <header class="page-banner">
                <div class="container-block">
                	<h1><?php the_title(); ?></h1>
                    <p><?php esc_html_e('Need help with anything? Send me a message', 'dev-portfolio'); ?></p>
                </div>
         </header>


         <section class="light-background">
            <div class="container section-content">


            <div class="col">
                        <h2><?php _e('I would love to hear from you!', 'dev_portfolio') ?></h2>
                        <p><?php _e('Give me a call, send me an email, or use the form.', 'dev_portfolio') ?></p>
                        <p><?php _e('I am currently accepting new work.', 'dev_portfolio') ?></p>
						<?php the_post_thumbnail(); ?>
                        <p><i class="fa fa-phone"></i><a href="tel:15407067647"><?php _e(' (540) 706- 7647') ?></a></p>
                        <p><i class="fa fa-envelope"></i><a href="mailto:matt@matthummel.com"> matt@matthummel.com</a></p>
                    </div>

                    <div class="col">
                        <?php the_content(); ?>      
                    </div>
                </div>  
            </div>
        </section>
        
<?php 
get_footer();
