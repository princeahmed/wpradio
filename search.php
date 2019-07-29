<?php

get_header();


?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">

				<div class="row d-flex">
					<div class="col-md-9">
						<div class="row">
							<?php

							if ( have_posts() ) {
								// Load posts loop.
								while ( have_posts() ) {
									the_post();

								}
							}

							?>

							<div class="col-md-12 text-center">
								<?php the_posts_pagination( array(
									'mid_size'           => 2,
									'prev_text'          => '<i class="fa fa-angle-left"></i>',
									'next_text'          => '<i class="fa fa-angle-right"></i>',
									'screen_reader_text' => '',
								) ); ?>
							</div>

						</div>
					</div>

					<?php if ( ! wp_is_mobile() ): ?>
						<div class="col-md-3 sidebar-container">
							<?php
							//category sidebar
							dynamic_sidebar( 'single-post-sidebar' );
							?>

						</div>
					<?php endif; ?>

				</div><!-- .row -->
			</div><!-- .container -->
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php

get_footer();
