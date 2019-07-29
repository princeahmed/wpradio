<section id="product-area" data-scroll-index="4">
	<div class="container">
		<div class="row">
			<!--start section heading-->
			<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
				<div class="section-heading text-center">
					<h5>Documentation</h5>
					<h2>WP Radio Documentation</h2>
					<p>Learn how to use all the features of WP Radio plugin properly.</p>
				</div>
			</div>
			<!--end section heading-->
		</div>
		<div class="row">

			<?php
			$posts = get_posts( array(
				'post_type'   => 'wpradio_docs',
				'numberposts' => 6
			) );

			if ( ! empty( $posts ) ) {
				foreach ( $posts as $post ) {
					setup_postdata( $post );
					?>

					<!--start product single-->
					<div class="col-lg-4 col-md-6">
						<div class="product-single text-center">
							<div class="prod-img">
								<?php the_title( '<h4 class="text-primary font-weight-bold">', '</h4>' ); ?>
							</div>
							<div class="prod-details">
								<?php
								$subtitle = get_post_meta( get_the_ID(), 'subtitle', true );

								printf( '<h4 class="font-weight-light m-2">%s</h4>', $subtitle );

								printf( '<a href="%s"><i class="icofont-eye-alt"></i> View</a>', get_permalink() );
								?>
							</div>
						</div>
					</div>            <!--end product single-->

				<?php }
				wp_reset_postdata();
			} ?>

			<div class="col-lg-12">
				<div class="load-more-btn text-center">
					<a href="<?php echo get_post_type_archive_link('wpradio_docs'); ?>"><i class="icofont-eye-alt"></i> View all Documentation</a>
				</div>
			</div>
		</div>
	</div>
</section>
