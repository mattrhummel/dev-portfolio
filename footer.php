<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dev-portfolio
 */

?>


<footer>

        <section class="orange-background ">

                <div class="container spacebetween">
                        <div class="col-75">
                                <h3><?php _e('I am currently accepting work on UpWork.  Need help with a project I would love to hear from you.', 'dev-portfolio') ?>
                                </h3>
                        </div>
                        <div class="col">
                                <a href="<?php esc_html_e('https://www.upwork.com/freelancers/matthummel') ?> "
                                        class="button"><?php _e('Hire Me', 'dev-portfolio') ?> </a>
                        </div>
                </div>
                </div>

        </section>


</footer>

</main>
<footer class="text-center dark-background">

        <p class="light-text">
                Designed and Developed by <?php bloginfo('name'); ?>
        </p>

</footer>


<?php wp_footer(); ?>

</body>

</html>
