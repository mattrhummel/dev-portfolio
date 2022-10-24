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


<section class="contact-section grey-background">

        <div class="container spacebetween">
                        <h3><?php _e(' Need help with a project? I would love to hear from you.', 'dev-portfolio') ?>
                        </h3>
                        <a href="<?php esc_html_e('https://matthummel.com/contact/') ?> "
                                class="button"><?php _e('Contact Me', 'dev-portfolio') ?> </a>
        </div>

</section>

</main>


<footer class="text-center dark-background">


        <p class="light-text">
                Designed and Developed by <?php bloginfo('name'); ?>
        </p>

</footer>


<?php wp_footer(); ?>

</body>

</html>
