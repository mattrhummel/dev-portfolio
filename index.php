<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dev-portfolio
 */

get_header();
?>


<?php

			if ( is_home() && is_front_page() ) :
				?>

<header class="hero">

		<div>
           <div class="wave"></div>
           <div class="wave"></div>
           <div class="wave"></div>
        </div>

	<div class="container-hero spacearound ">

		<div class="col">

			<h1><?php _e('Front-End Developer in Fredericksburg, VA', 'dev-portfolio') ?></h1>

			<p><?php _e('Hello, I am Matt and I am a web developer specializing in WordPress Development','dev-portfolio') ?> </p>

			<div class="pill-container">

				<a href="<?php esc_html_e('https://matthummel.com/contact/') ?>  " class="pill"><?php _e('Contact Matt', 'dev-portfolio') ?> </a>
			</div>

		</div>

		<div class="col">
			<img src="https://matthummel.com/wp-content/uploads/2022/10/matt-hummel.jpeg"
				alt="matt hummel">
		</div>


	</div>

</header>

<?php endif; ?>

<section class="light-background section-spacing-top">

	<div class="container-block">

		<header class="text-center">
			<h1><?php _e('Latest Projects', 'dev-portfolio') ?></h1>
		</header>

		<div class="card-container">

	<?php $args = array(  
        'post_type' => 'projects',
        'post_status' => 'publish',
		'posts_per_page' => 3,

    
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
					<time datetime="<?php echo get_the_date('m, y'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>

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


<section class="light-background section-spacing-bottom">

	<div class="container-block">

		<header class="text-center">
			<h1><?php _e('Latest Post', 'dev-portfolio') ?></h1>
		</header>

		<div class="card-container">

			<?php $args = array(  
        'post_type' => 'post',
        'post_status' => 'publish',
		'posts_per_page' => 3,

    
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
					<time datetime="<?php echo get_the_date('y, m'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>

				</footer><!-- .entry-footer -->

				<p><?php the_excerpt(); ?></p>
				
				<a href="<?php echo get_the_permalink()?>" class="button">Read More</a>


      
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
