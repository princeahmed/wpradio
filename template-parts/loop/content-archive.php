<div class="<?php echo $fullwidth || $list ? 'col-xs-12' : 'col-xs-6'; ?>">
	<article class="text-center <?php echo $list ? 'list' : ($fullwidth ? 'fullwidth pb-6' : 'fullwidth grid'); ?>">
		<?php

		if ( $fullwidth ) {
			$thumb_size = 'archive-fullwidth';
		} elseif ( $list ) {
			$thumb_size = 'archive-small';
		} else {
			$thumb_size = 'archive-medium';
		}

		austin_post_thumbnail( $thumb_size );

		echo '<div class="entry-container">';
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

		if(wp_is_mobile() && !$fullwidth){

		}else {
			$subtitle = get_post_meta( get_the_ID(), 'subtitle', true );
			if ( ! empty( $subtitle ) ) {
				printf( '<h4 class="entry-subtitle">%s</h4>', $subtitle );
			}
		}
		echo '</div>'; //end entry content

		?>

	</article>
</div>
