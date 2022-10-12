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
 * Template Name: Dev Journal
 * 
 * 
 * @package dev-portfolio
 */

get_header();
?>


<header class="page-banner">
    <div class="container-block">
        <h1><?php the_title(); ?></h1>
        <p><?php _e('My web development blog. Projects I am working, resources I find useful and other dev topics.', 'dev-portfolio') ?> </p>
    </div>
</header>


<section class="light-background section-spacing-top section-spacing-bottom">

    <div class="container-block">



        <div class="card-container">

            <?php $args = array(  
        'post_type' => 'post',
        'post_status' => 'publish',
    
);

$loop = new WP_Query( $args ); 
    
while ( $loop->have_posts() ) : $loop->the_post(); 

             ?>


            <div class="card">

                <?php if ( has_post_thumbnail() ) {
$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'normal' );
if ( ! empty( $large_image_url[0] ) ) {
    echo get_the_post_thumbnail( $post->ID, 'large' ); 
}
} ?>

                <h3><?php the_title(); ?></h3>

                <footer class="entry-footer">
                    <?php dev_portfolio_entry_footer(); ?>
                    <time datetime="<?php echo get_the_date('m, y'); ?>"
                        itemprop="datePublished"><?php echo get_the_date(); ?></time>

                </footer><!-- .entry-footer -->




                <p><?php the_excerpt(); ?></p>

                <a href="<?php echo get_the_permalink()?>" class="button"><?php _e('Read More', 'dev-portfolio') ?></a>

            </div>
            <?php
            endwhile;
            wp_reset_postdata();  
            ?>
        </div>
    </div>

</section>





<?php
get_footer();
