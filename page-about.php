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
 * Template Name: About Page
 * 
 * 
 * @package dev-portfolio
 */

get_header();
?>


		 <header class="page-banner">
            <div class="container-block">
                	<h1><?php the_title(); ?></h1>
                    <p><?php _e('Matt is a Front-end Developer based in Fredericksburg, Virginia', 'dev-portfolio') ?> </p>
                </div>
            </div>
         </header>

		 <section class="light-background section-spacing">
            <div class="container-block">
                    
                        <?php the_content(); ?>   
                    
 
                </div>  
          
        </section>

<?php
get_footer();
