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

                        <h3>
                                <?php _e(' Need help with a project? I would love to hear from you.', 'dev-portfolio') ?>
                        </h3>

                        <a href="<?php esc_html_e('https://matthummel.com/contact/') ?> "
                                class="button"><?php _e('Contact Me', 'dev-portfolio') ?> 
                        </a>
                        
</section>

</main>

<footer class="page-footer dark-background">

        <p class="light-text">
                <strong>Designed and Developed by <?php bloginfo('name'); ?></strong>
        </p>

</footer>

</div>
   
<?php wp_footer(); ?>

</body>

</html>
