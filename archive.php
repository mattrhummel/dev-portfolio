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
           	 <div class="container center">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
                   <?php the_archive_description( '<div class="archive-description">', '</div>' );
				 ?>
                </div>
         </header>

		 <section class="light-background">
			
		<div class="container-block">

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
<p><?php the_excerpt(); ?></p>

<time datetime="<?php echo get_the_date('y, m'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>

<a href="<?php echo get_the_permalink()?>" class="button">Read More</a>


<footer class="entry-footer">
	<?php dev_portfolio_entry_footer(); ?>
</footer><!-- .entry-footer -->


</div>


<?php endwhile; ?>
</div>
<?php
	endif; ?>

</div>
</section>

<?php
get_footer();
