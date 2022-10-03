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

		 <section class="row light-background">
            <div class="container section-content spacebetween">
                    <div class="col padding-right-60 ">
                        <?php the_content(); ?>      
                    </div>

                    <div class="col">
						<?php the_post_thumbnail(); ?>
                    </div>
                </div>    
        </section>

        <section class="gray-background">
            <div class="container-block">

                    <div class="text-center">
                    
                        <h2>Skills</h2>
                        
						<p class="marb-spacing-40">These are a few of my technical skills and tools I have experience with. </p>
                            

                                <ul class="skills-list">
                                    <li><i class="fa-2x fa-brands fa-html5" title="HTML5"></i></li>
                                    <li><i class="fa-2x fa-brands fa-css3-alt"></i></li>
                                    <li><i class="fa-2x fa-brands fa-square-js"></i></li>
                                    <li><i class="fa-2x fa-brands fa-github"></i></li>
                                    <li><i class="fa-2x fa-brands fa-node-js"></i></li>
                                    <li><i class="fa-2x fa-brands fa-accessible-icon"></i></li>
                                    <li><i class="fa-2x fa-brands fa-sketch"></i></li>
                                    <li><i class="fa-2x fa-brands fa-git"></i></li>
                                    <li><i class="fa-2x fa-brands fa-npm"></i></li>
                                    <li><i class="fa-2x fa-brands fa-windows"></i></li>
                                    <li><i class="fa-2x fa-brands fa-apple"></i></li>
                                    <li><i class="fa-2x fa-brands fa-wordpress"></i></li>
                                </ul>
                         
                    	</div>
          		</div>
          	</div>
          </section>


<?php
get_footer();
