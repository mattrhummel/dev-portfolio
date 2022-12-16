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

		<div class="hero-container">

				<div class="col-1">

				<h2><?php _e('Hi I am Matt Hummel.','dev-portfolio') ?></h2>

				<p><?php _e('I am self-taught, front-end developer in Fredericksburg, Va.', 'dev-portfolio') ?></p>

				<ul class="social-links">
                <li>
                    <a href="<?php esc_html_e( 'https://github.com/mattrhummel', 'dev-portfolio' ) ?>"  title="Github">
                        <i class="fa-brands fa-github-alt"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php esc_html_e( 'https://www.linkedin.com/in/mattrhummel/', 'dev-portfolio' ) ?>" title="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php esc_html_e( 'https://medium.com/@matthummel/list/reading-list', 'dev-portfolio' ) ?>" title="Medium">
                        <i class="fa-brands fa-medium"></i>
                    </a>
                </li>
            </ul>

				</div>

				<div class="col-2">

				<img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt=""
                    class="bio-photo" />
				</div>

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

	<h2 class="text-center mb-40"><?php _e('Latest Post', 'dev-portfolio') ?></h2>

	<div class="grid-row mb-80">
		
		<div class="grid-container">

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
							echo '<a href="' . esc_url( $large_image_url[0] ) . '" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '" class="responsive">';
							echo get_the_post_thumbnail( $post->ID, 'large' ); 
							echo '</a>';
						}
					} ?>

				<h3><?php the_title(); ?></h3>

				<?php the_excerpt(); ?>

				<footer class="entry-footer">
					<?php dev_portfolio_entry_footer(); ?>
					<p><?php echo get_the_date(); ?></p>
				</footer><!-- .entry-footer -->

			<a href="<?php echo get_the_permalink(); ?>" class="button">
				<?php _e('Read Blog Post', 'dev_portfolio')?></a>
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