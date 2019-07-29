<div class="col-md-12">
	<article <?php post_class('list'); ?>>
		<?php

		//thumbnail
		austin_post_thumbnail( 'thumbnail-medium' );

		?>

		<div class="entry-container">


			<div class="entry-main">
				<?php

				//title
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

				//subtitle
				$subtitle = get_post_meta( get_the_ID(), 'subtitle', true );

				if ( ! empty( $subtitle ) ) {
					printf( '<h4 class="entry-subtitle">%s</h4>', $subtitle );
				}

				?>
			</div>

		</div><!-- end .entry-container -->


	</article>
</div>


