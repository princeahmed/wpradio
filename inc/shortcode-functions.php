<?php

add_action( 'init', 'austin_register_shortcodes' );

if ( ! function_exists( 'austin_register_shortcodes' ) ) {

	function austin_register_shortcodes() {
		add_shortcode( 'austin_most_viewed_posts', 'austin_most_viewed_posts' );
		add_shortcode( 'austin_sidebar_trending_posts', 'austin_sidebar_trending_posts' );
		add_shortcode( 'austin_calendar_filter_bar', 'austin_calendar_filter_bar' );
	}
}

//Most viewed posts
if ( ! function_exists( 'austin_most_viewed_posts' ) ) {
	function austin_most_viewed_posts( $atts ) {
		extract( shortcode_atts( array(
			'limit' => 5,
		), $atts ) );

		ob_start();
		include locate_template( 'template-parts/most-viewed.php' );

		return ob_get_clean();

	}
}

//austin_sidebar_trending_posts
if ( ! function_exists( 'austin_sidebar_trending_posts' ) ) {
	function austin_sidebar_trending_posts( $atts ) {
		extract( shortcode_atts( array(
			'limit' => 10,
		), $atts ) );

		ob_start();
		include locate_template( 'template-parts/trending-now-sidebar.php' );

		return ob_get_clean();

	}
}

//austin_calendar_filter_bar
if ( ! function_exists( 'austin_calendar_filter_bar' ) ) {
	function austin_calendar_filter_bar( $atts ) {
		extract( shortcode_atts( array(
			'limit' => 10,
		), $atts ) );

		ob_start();

		if(function_exists('ecp_get_template')) {
			ecp_get_template( 'lists/lists-filter.php', [ 'class' => 'widget-filter' ] );
		}

		return ob_get_clean();

	}
}

