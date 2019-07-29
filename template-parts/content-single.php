<div class="col-md-12">
	<article <?php post_class('fullwidth'); ?>>
		<?php

		//thumbnail
		austin_post_thumbnail( 'archive-fullwidth' );

		?>

		<div class="entry-container">


				<?php

				if(!wp_is_mobile()) {
					printf('<div class="social-shares">%s</div>', austin_get_social_shares( get_the_ID() ));
				}

				?>

			<div class="entry-main">
				<?php
				//terms
				$term = get_primary_term();
				if ( $term ) {
					printf( '<a href="%s" class="entry-term">%s</a>', get_term_link( $term->term_id, 'category' ), $term->name );
				}

				//title
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

				//subtitle
				$subtitle = get_post_meta( get_the_ID(), 'subtitle', true );

				if ( ! empty( $subtitle ) ) {
					printf( '<h4 class="entry-subtitle">%s</h4>', $subtitle );
				}

				?>

				<div class="entry-meta">
					<?php
					//author
					$author = get_post_meta( get_the_ID(), 'author', true );

					if ( ! empty( $author ) ) {
						printf( '<h3 class="entry-author">%s</h3>', $author );
					}

					?>

					<!-- publish date -->
					<div class="entry-date"><?php austin_day_link(); ?></div>

					<?php

					if(wp_is_mobile()) {
						printf('<div class="social-shares">%s</div>', austin_get_social_shares( get_the_ID() ));
					}

					?>

				</div> <!-- end .entry-main -->

				<div class="entry-content">
					<?php the_content(); ?>
				</div>

			</div>

		</div><!-- end .entry-container -->


	</article>
</div>


