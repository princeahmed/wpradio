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
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();

if ( is_home() ) {
	$posts_per_page = 14;

	if ( empty( get_option( 'homepage_options' )['homepage_side_ad1'] ) ) {
		$posts_per_page += 1;
	}

	if ( empty( get_option( 'homepage_options' )['homepage_side_ad2'] ) ) {
		$posts_per_page += 1;
	}

	//set posts per page
	query_posts( "posts_per_page=$posts_per_page" );
}

?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<?php

					$counter = 1;

					if ( have_posts() ) {

						// Load posts loop.
						while ( have_posts() ) {
							the_post();

							//load fisrt add after 4 posts
							if ( $counter == 5 ) {

								if ( ! empty( get_option( 'homepage_options' )['homepage_inner_ad1'] ) ) {
									printf( '<div class="col-md-12"><div class="advertise fullwidth">%s</div></div>', get_option( 'homepage_options' )['homepage_inner_ad1'] );
								}
							}

							//load homepage second ad in sidebar after 9 posts
							if ( $counter == 10 && ! empty( get_option( 'homepage_options' )['homepage_side_ad1'] ) ) {
								printf( '<div class="col-md-4 clearfix"><div class="advertise side">%s</div> </div>', get_option( 'homepage_options' )['homepage_side_ad1'] );

								$counter += 1;
							}

							//load trending now section after 10 posts and after trending now section
							if ( $counter == 11 ) {
								get_template_part( 'template-parts/trending-now' );

								//load homapge second inner ad
								if ( ! empty( get_option( 'homepage_options' )['homepage_inner_ad2'] ) ) {
									printf( '<div class="col-md-12"><div class="advertise fullwidth">%s</div> </div>', get_option( 'homepage_options' )['homepage_inner_ad2'] );
								}
							}

							if ( $counter == 1 || ( $counter > 4 && $counter < 8 ) || ( $counter > 10 && $counter < 14 ) ) {
								$fullwidth = true;
							} else {
								$fullwidth = false;
							}

							include locate_template( 'template-parts/loop/content.php' );

							//load homepage fourth ad in sidebar after last post
							if ( $counter == 15 && ! empty( get_option( 'homepage_options' )['homepage_side_ad2'] ) ) {
								printf( '<div class="col-md-4"><div class="advertise side">%s</div> </div>', get_option( 'homepage_options' )['homepage_side_ad2'] );
							}

							$counter ++;
						}

					} else {

						// If no content, include the "No posts found" template.
						get_template_part( 'template-parts/content', 'none' );

					}

					// load things to do section
					get_template_part( 'template-parts/things-to-do' );

					?>
				</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
