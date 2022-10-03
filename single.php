<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dev-portfolio
 */

get_header();
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
		while ( have_posts() ) :
			the_post(); ?>

		<header class="page-banner">
				<div class="container-block">
					<?php the_title('<h1>', '</h1>', 'dev-portfolio'); ?>
					<?php dev_portfolio_entry_footer(); ?>
				</div>
         </header>

<div class="light-background">
<div class="container-block">


			<div class="post-content">
			<?php if ( has_post_thumbnail() ) {
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'normal' );
					if ( ! empty( $large_image_url[0] ) ) {
						echo '<a href="' . esc_url( $large_image_url[0] ) . '" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '" class="responsive">';
						echo get_the_post_thumbnail( $post->ID, 'large' ); 
						echo '</a>';
					}
				} ?>
				<?php the_content(); ?>			
			</div>

			</div>

			</div>

			<div class="blue-background light-text">
				<div class="container-block">

				<?php 
				

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'dev-portfolio' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'dev-portfolio' ) . '</span> <span class="nav-title">%title</span>',
					)
				); 


				endwhile; // End of the loop.
				?>
</div>
			</div>
	</article><!-- #main -->

<?php
get_footer();
