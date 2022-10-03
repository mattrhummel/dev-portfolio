<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dev-portfolio
 */

?>


<section class="light-background">

	<div class="container-block">

		<header class="text-center">
			<h1>My Dev Journal</h1>
			<h2 class="subheading">Everything I'm working on and other things happening in my life.</h2>
		</header>

		<div class="card-container">

			<div class="card">

				<?php if ( has_post_thumbnail() ) {
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'normal' );
					if ( ! empty( $large_image_url[0] ) ) {
						echo '<a href="' . esc_url( $large_image_url[0] ) . '" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '" class="responsive">';
						echo get_the_post_thumbnail( $post->ID, 'large' ); 
						echo '</a>';
					}
				} ?>

				<h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>

				<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dev-portfolio' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dev-portfolio' ),
					'after'  => '</div>',
				)
			);
			?>


				<footer class="entry-footer">
					<?php dev_portfolio_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div>

		</div>

	</div>

</section>
