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
                <h1><?php the_title(); ?></h1>
        </header>

        <section class="light-background">

                <div class="container wrap">
                                
                        <?php the_content(); ?>   

                </div>
                    
        </section>

<?php
get_footer();
