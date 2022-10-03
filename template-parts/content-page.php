<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dev-portfolio
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="page-banner">
            <div class="container-block">
                	<h1><?php the_title(); ?></h1>
                    <p>Matt is a Front-end Developer based in Fredericksburg, Virginia</p>
                </div>
            </div>
         </header>

	<section>
        <div class="light-background">
            <div class="container section-content">
					<?php
						the_content();
					?>
			</div>
		</div>
	</section>

</article><!-- #post-<?php the_ID(); ?> -->
