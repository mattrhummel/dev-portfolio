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

		<div class="hero-card-container">

			<div class="hero-card card1">

			<h2><?php _e('Front-end Developer in Fredericksburg, Virginia.','dev-portfolio') ?></h2>

			<p><?php _e('Hi I am Matt, a self-tough, passionate web developer specializing in Front-end Development, WordPress, and Accessibility', 'dev-portfolio') ?></p>

			</div>

			<div class="hero-card card2">

			<h3><i class="fa-sharp fa-solid fa-code-simple"></i>

				<span>Front-End Development</span></h3>

				<p class="small">
					Build responsive and fast loading websites using HTML, CSS, SASS and Javascript.
				</p>

			</div>

			<div class="hero-card card3">

			<h3><i class="fa-brands fa-wordpress"></i>

				<span>WordPress Development</span></h3>

				<p class="small">
					Create custom themes using PHP, mySQL, MAMP, Advanced Custom Fields and Underscore Starter Theme.
				</p>

			</div>

			<div class="hero-card card4">

			<h3><i class="fa-brands fa-accessible-icon"></i>
<span>Accessibility & SEO</span></h3>

				<p class="small">
					Ensuring websites can be accessed by all visitors, be found in search engines and measure their success using analytics.
				</p>

			</div>


	</div>

</header>

<?php endif; ?>

<section class="light-background row">

	<h2 class="text-center"><?php _e('Latest Projects', 'dev-portfolio') ?></h2>

	<div class="project-container">

		<?php $args = array(  
        'post_type' => 'projects',
        'post_status' => 'publish',
		'posts_per_page' => 4,

	);

$loop = new WP_Query( $args ); 
    
while ( $loop->have_posts() ) : $loop->the_post(); 

?>

<article class="project">

<?php if ( has_post_thumbnail() ) {
$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'normal' );
if ( ! empty( $large_image_url[0] ) ) {
 echo get_the_post_thumbnail( $post->ID, 'large' ); 
}
} ?>

<h3><?php the_title(); ?></h3>

<?php the_excerpt(); ?>

<footer class="entry-footer">

	<?php if ( have_rows('project_tool') ) : ?>

	<ul class="inline-pills">

		<?php while( have_rows('project_tool') ) : the_row(); ?>

		<li><?php the_sub_field('tool_used'); ?></li>

		<?php endwhile; ?>

	</ul>

	<?php endif; ?>

			<ul class="inline-list">

		<?php if ( get_field('project_url') ) : ?>

			<li> <a href="<?php echo get_field('project_url'); ?>" target="_blank"> 
					<?php _e('view project', 'dev-portfolio') ?>
				</a>
			</li>

		<?php endif; ?>

		<?php if ( get_field('project_sourcecode_url') ) : ?>

				<li> <a href="<?php echo get_field('project_sourcecode_url'); ?>" target="_blank"> 
						<?php _e('source code', 'dev-portfolio') ?>
					</a>
				</li>

		<?php endif; ?>

		</ul>

	</footer>

</article>




		<?php
				endwhile;
				wp_reset_postdata();  
            ?>

	</div>
</section>


<section class="light-background row">

		<h2 class="text-center"><?php _e('Latest Post', 'dev-portfolio') ?></h2>

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

				<?php the_excerpt(); ?>

				<footer class="entry-footer">
					<?php dev_portfolio_entry_footer(); ?>
					<p><?php echo get_the_date(); ?></p>
				</footer><!-- .entry-footer -->

			</div>

			<?php
            endwhile;
            wp_reset_postdata();  
            ?>
		</div>
</section>


<?php
get_footer();
