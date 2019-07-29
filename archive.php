<?php get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-8">
						<div class="row">
							<?php

							if ( have_posts() ) { ?>

								<div class="col-xs-12">
									<header class="page-header mt--5">
										<?php
										the_archive_title( '<h1 class="page-title">', '</h1>' );
										?>
									</header><!-- .page-header -->
								</div>

								<?php

								$fullwidth = false;
								$list      = false;

								$counter = 1;
								// Load posts loop.
								while ( have_posts() ) {
									the_post();

									if ( $counter == 1 ) {
										$fullwidth = true;
									} else {
										$fullwidth = false;
									}

									if ( $counter > 5 ) {
										$list = true;
									} else {
										$list = false;
									}

									include locate_template( 'template-parts/loop/content-archive.php' );

									if ( $counter == 3 ) {
										printf( '<div class="col-xs-12"></div>' );
									}

									if ( $counter == 5 ) {
										printf( '<div class="col-xs-12"><div class="divider mb-6"></div></div>' );
									}

									$counter ++;
								}

								?>

								<div class="col-xs-12 section-more archive-more text-right mt--5">
									<a href="#" class="section-more-link"> SEE MORE LIVING STORIES
										<i class="fa fa-angle-right"></i></a>
								</div>

								<?php
							} else {

								// If no content, include the "No posts found" template.
								get_template_part( 'template-parts/content', 'none' );

							}

							?>
						</div>
					</div>

					<div class="col-md-4 sidebar-container">
						<?php
						//category sidebar
						dynamic_sidebar( 'category-sidebar' );
						?>

					</div>

				</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
