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
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
                   <?php the_archive_description( '<div class="archive-description">', '</div>' );
				 ?>
         </header>

		 <section class="light-background section-spacing">
			
		<div class="container">

<div class="card-container">

<?php		
while ( have_posts() ) :

		the_post();  ?>

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


<?php endwhile; ?>
</div>
<?php
	endif; ?>

</div>
</section>

<?php
get_footer();
