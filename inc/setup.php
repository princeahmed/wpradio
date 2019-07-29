<?php

//austin setup
if ( ! function_exists( 'austin_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function austin_setup() {

		load_theme_textdomain( 'austin', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		add_image_size( 'thumbnail-fullwidth', 1245, 615, true );
		add_image_size( 'thumbnail-medium', 385, 275, true );
		add_image_size( 'thumbnail-small', 165, 145, true );

		add_image_size( 'event-fullwidth', 865, 500, true );

		add_image_size( 'archive-fullwidth', 815, 425, true );
		add_image_size( 'archive-medium', 380, 270, true );
		add_image_size( 'archive-small', 275, 200, true );

		add_image_size( 'thumbnail-xsmall', 135, 130, true );

		add_image_size( 'thumbnail-publication', 275, 355, true );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary', 'austin' ),
				'footer'  => __( 'Footer Menu', 'austin' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'austin' ),
					'shortName' => __( 'S', 'austin' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'austin' ),
					'shortName' => __( 'M', 'austin' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'austin' ),
					'shortName' => __( 'L', 'austin' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'austin' ),
					'shortName' => __( 'XL', 'austin' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);


		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
}

add_action( 'after_setup_theme', 'austin_setup' );


