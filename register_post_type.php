<?php

// Registering New Post Type
    function iq_festgreet_post_type_register() {
    $labels = array(
        'name'                  => _x( 'FestGreets', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'FestGreet', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'FestGreets', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'FestGreet', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New FestGreet', 'textdomain' ),
        'add_new_item'          => __( 'Add New FestGreet', 'textdomain' ),
        'new_item'              => __( 'New FestGreet', 'textdomain' ),
        'edit_item'             => __( 'Edit FestGreet', 'textdomain' ),
        'view_item'             => __( 'View FestGreet', 'textdomain' ),
        'all_items'             => __( 'All FestGreets', 'textdomain' ),
        'search_items'          => __( 'Search FestGreets', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent FestGreets:', 'textdomain' ),
        'not_found'             => __( 'No FestGreets found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No FestGreets found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'FestGreet Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'FestGreet archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into FestGreet', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this FestGreet', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter FestGreets list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'FestGreets list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'FestGreets list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'festgreet' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', /*'editor', 'author',*/'thumbnail' ),
		'register_meta_box_cb' => 'add_festgreet_meta_boxes',
        'menu_icon' => 'dashicons-palmtree',
    );
 
    register_post_type( 'festgreets', $args );
}
 
add_action( 'init', 'iq_festgreet_post_type_register' );

?>