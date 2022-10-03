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
	<div class="container-hero spacearound ">

		<div class="col">

			<h1><?php bloginfo('description'); ?></h1>

			<p>Hi, I'm Matt. I'm a developer with 12 years experience living in Fredericksburg, VA. I'm trained in HTML,
				CSS, Javascript, PHP, Git, Node, React, WordPress and Sharepoint</p>

			<div class="pill-container">

				<a href="projects.html" class="pill">View Projects</a>
				<a href="contact.html" class="pill">Contact Matt</a>

			</div>

		</div>

		<div class="col">
			<img src="http://localhost:8888/dev-portfolio/wp-content/uploads/2022/10/matt-hummel.jpeg"
				alt="matt hummel">
		</div>


	</div>

</header>

<?php endif; ?>


<section class="light-background">

	<div class="container-block">

		<header class="text-center">
			<h1>Latest Post</h1>
			<h2 class="subheading">My most recent post from my Dev Journal blog.</h2>
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
                    echo '<a href="' . esc_url( $large_image_url[0] ) . '" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '" class="responsive">';
                    echo get_the_post_thumbnail( $post->ID, 'large' ); 
                    echo '</a>';
                }
            } ?>

				<h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>

				<?php
                        the_excerpt();

                    ?>

				<footer class="entry-footer">
					<?php dev_portfolio_entry_footer(); ?>
				</footer><!-- .entry-footer -->
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
