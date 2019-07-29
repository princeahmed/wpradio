<?php


function wpradio_register_post_types() {
		register_post_type( 'wpradio_docs', array(
		'labels'              => wpradio_get_posts_labels( __( 'Docs', 'wpradio' ), __( 'Doc', 'wpradio' ), __( 'Docs', 'wpradio' ) ),
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor' ),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-media-text',
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array( 'slug' => 'documentation' ),
		'capability_type'     => 'post',
	) );
}

add_action( 'init', 'wpradio_register_post_types' );

function wpradio_get_posts_labels( $menu_name, $singular, $plural, $type = 'plural' ) {
	$labels = array(
		'name'               => 'plural' == $type ? $plural : $singular,
		'all_items'          => sprintf( __( "All %s", 'wpradio' ), $plural ),
		'singular_name'      => $singular,
		'add_new'            => sprintf( __( 'Add New %s', 'wpradio' ), $singular ),
		'add_new_item'       => sprintf( __( 'Add New %s', 'wpradio' ), $singular ),
		'edit_item'          => sprintf( __( 'Edit %s', 'wpradio' ), $singular ),
		'new_item'           => sprintf( __( 'New %s', 'wpradio' ), $singular ),
		'view_item'          => sprintf( __( 'View %s', 'wpradio' ), $singular ),
		'search_items'       => sprintf( __( 'Search %s', 'wpradio' ), $plural ),
		'not_found'          => sprintf( __( 'No %s found', 'wpradio' ), $plural ),
		'not_found_in_trash' => sprintf( __( 'No %s found in Trash', 'wpradio' ), $plural ),
		'parent_item_colon'  => sprintf( __( 'Parent %s:', 'wpradio' ), $singular ),
		'menu_name'          => $menu_name,
	);

	return $labels;
}
