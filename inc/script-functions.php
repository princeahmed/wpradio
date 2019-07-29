<?php

function prince_scripts(){

	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('owl', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
	wp_enqueue_style('magnific', get_template_directory_uri().'/assets/css/magnific-popup.css');
	wp_enqueue_style('icofont', get_template_directory_uri().'/assets/css/icofont.min.css');
	wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css');
	wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('popper', get_template_directory_uri().'/assets/js/popper.min.js', ['jquery'], false, true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', ['jquery'], false, true);
	wp_enqueue_script('magnific', get_template_directory_uri().'/assets/js/magnific-popup.min.js', ['jquery'], false, true);
	wp_enqueue_script('owl', get_template_directory_uri().'/assets/js/owl.carousel.min.js', ['jquery'], false, true);
	wp_enqueue_script('scrollIt', get_template_directory_uri().'/assets/js/scrollIt.min.js', ['jquery'], false, true);
	wp_enqueue_script('validator', get_template_directory_uri().'/assets/js/validator.min.js', ['jquery'], false, true);
	wp_enqueue_script('contact', get_template_directory_uri().'/assets/js/contact.js', ['jquery'], false, true);
	wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', ['jquery'], false, true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

add_action('wp_enqueue_scripts', 'prince_scripts');
