<?php get_header(); ?>

<!--start blog wrap-->
<div class="blog-wrap">
	<div class="container">
		<div class="row">
			<!--start sidebar-->
			<div class="col-lg-3 col-md-4">
				<div class="sidebar">
					<!--start categories widget-->
					<div class="widget categories">
						<h5>Documentation</h5>
						<ul>
							<?php

							if ( have_posts() ) {
								while ( have_posts() ) {
									the_post();
									printf( '<li><a href="%s"><i class="icofont-simple-right"></i> %s</a></li>', get_permalink(), get_the_title() );
								}
							}

							?>

						</ul>
					</div>
					<!--end categories widget-->
				</div>
			</div>
			<!--end sidebar-->
			<!--start blog post list-->
			<div class="col-lg-9 col-md-8">
				<div class="blog-post-list">

					<?php

					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							?>
							<!--start blog single-->
							<div class="blog-single">
								<div class="post-content">
									<?php
									the_title( '<h3 class="m-0">', '</h3>' );
									the_content();
									?>
								</div>
							</div>                                <!--end blog single-->

							<?php
							break;
						}
					} ?>
				</div>

			</div>
			<!--end blog post list-->
		</div>
	</div>
</div>
<!--end blog wrap-->


<?php get_footer(); ?>
