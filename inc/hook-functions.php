<?php

function wpradio_filter_posts_query( $query ) {
	if ( is_archive( 'wpradio_docs' ) ) {
	}
	$query->set( 'order', 'ASC' );
}

add_action( 'pre_get_posts', 'wpradio_filter_posts_query' );
