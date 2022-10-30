<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dev-portfolio
 */

get_header();
?>


<?php if ( have_posts() ) : ?>


<header class="page-banner">
	<h1><?php the_archive_title(); ?></h1>
	<p><?php the_archive_description(); ?></p>
</header>

<section class="light-background">

	<div class="project-container spacer">

		<?php		
while ( have_posts() ) :

		the_post();  ?>

		<article class="project">

			<?php if ( has_post_thumbnail() ) {
		 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'normal' );
		 if ( ! empty( $large_image_url[0] ) ) {
			 echo get_the_post_thumbnail( $post->ID, 'large' ); 
		 }
	 } ?>

			<h3><?php the_title(); ?></h3>

			<p><?php the_excerpt(); ?></p>

			<footer?>

				<?php if ( have_rows('project_tool') ) : ?>

				<ul class="inline-pills">

					<?php while( have_rows('project_tool') ) : the_row(); ?>

					<li><?php the_sub_field('tool_used'); ?></li>

					<?php endwhile; ?>

				</ul>

				<?php endif; ?>

				<ul class="inline-list">

				<?php if ( get_field('project_url') ) : ?>

					<li> <a href="<?php echo get_field('project_url'); ?>"  target="_blank"> 
						   <?php _e('View Project', 'dev-portfolio') ?>
						</a>
					</li>

				<?php endif; ?>

				<?php if ( get_field('project_sourcecode_url') ) : ?>

						<li> <a href="<?php echo get_field('project_sourcecode_url'); ?>"  target="_blank"> 
								<?php _e('View Project', 'dev-portfolio') ?>
							</a>
						</li>

				<?php endif; ?>

				</ul>

				</footer>




		</article>



		<?php endwhile; ?>

	</div>

	<?php
	endif; ?>

</section>
</div>

<?php
get_footer();
