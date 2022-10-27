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

	<div class="hero-content">

		<h2><?php _e('Self-tought, passionate front-end web developer.','dev-portfolio') ?></h2>

		<p><?php _e('Hi I am Matt, a Front-End Developer in Fredericksburg, VA. Below is a brief snapshot about my experience', 'dev-portfolio') ?></p>

		<div class="card-container">

			<div class="card">

			<i class="fa-sharp fa-solid fa-code-simple fa-6x"></i>

				<h3>Front-End Development</h3>

				<p class="small">
					Build responsive and fast loading websites using HTML, CSS, SASS and Javascript.
				</p>

			</div>

			<div class="card">

			<i class="fa-brands fa-wordpress fa-6x"></i>

				<h3>WordPress Development</h3>

				<p class="small">
					Create custom themes using PHP, mySQL, MAMP, Advanced Custom Fields and Underscore Starter Theme.
				</p>

			</div>

			<div class="card">

			<i class="fa-brands fa-accessible-icon fa-6x"></i>

				<h3>Accessibility & SEO</h3>

				<p class="small">
					Ensuring websites can be accessed by all visitors, be found in search engines and measure their success using analytics.
				</p>

			</div>

		</div>

	</div>

</header>

<?php endif; ?>

<section class="light-background row">

	<header class="text-center row-header">
		<h1 class="headline" ><?php _e('Latest Projects', 'dev-portfolio') ?></h1>
	</header>


		<?php $args = array(  
        'post_type' => 'projects',
        'post_status' => 'publish',
		'posts_per_page' => 3,

	);

$loop = new WP_Query( $args ); 
    
while ( $loop->have_posts() ) : $loop->the_post(); 

?>

		<article class="project">
 
				<div class="project-info">

					<h3><a href="<?php echo get_the_permalink()?>"><?php the_title(); ?></a></h3>

					<p><?php the_excerpt(); ?></p>

					<footer?>

					<?php if ( have_rows('project_tool') ) : ?>

						<ul class="inline-pills">
					
						<?php while( have_rows('project_tool') ) : the_row(); ?>
					
							<li><?php the_sub_field('tool_used'); ?></li>
					
						<?php endwhile; ?>

						</ul>
					
					<?php endif; ?>
					
					</footer>

				</div>

				<div class="project-image">
					<?php if ( has_post_thumbnail() ) {
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'normal' );
						if ( ! empty( $large_image_url[0] ) ) {
							echo get_the_post_thumbnail( $post->ID, 'large' ); 
						}
					} ?>
				
				</div>

		</article>



		<?php
				endwhile;
				wp_reset_postdata();  
            ?>
</section>


<section class="light-background row">

	<header class="text-center row-header">
		<h1><?php _e('Latest Post', 'dev-portfolio') ?></h1>
	</header>

<div class="card-container-full">

			<?php $args = array(  
        'post_type' => 'post',
        'post_status' => 'publish',
		'posts_per_page' => 3,

    
);

$loop = new WP_Query( $args ); 
    
while ( $loop->have_posts() ) : $loop->the_post(); 

             ?>

			<div class="card">

				<h3><a href="<?php echo get_the_permalink()?>"><?php the_title(); ?></a></h3>

				<footer class="entry-footer">
					<?php dev_portfolio_entry_footer(); ?>
					<time datetime="<?php echo get_the_date('y, m'); ?>"
						itemprop="datePublished"><?php echo get_the_date(); ?></time>

				</footer><!-- .entry-footer -->

				<p><?php the_excerpt(); ?></p>

			</div>

			<?php
            endwhile;
            wp_reset_postdata();  
            ?>
		</div>
</section>


<?php
get_footer();
