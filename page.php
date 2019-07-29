<?php get_header(); ?>

<!--start blog wrap-->
<div class="blog-wrap">
	<div class="container">
		<div class="row">
			<!--start blog post list-->
			<div class="col-md-12">
				<div class="blog-post-list">

					<?php

					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							?>
							<!--start blog single-->
							<div class="blog-single">
								<div class="post-content">
									<?php the_content(); ?>
								</div>
							</div>								<!--end blog single-->

							<?php
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
