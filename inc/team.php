<?php
    // Register Custom Post Type Team
    function create_team_cpt() {

        $labels = array(
            'name' => _x( 'Teams', 'Post Type General Name', 'warraich_traders' ),
            'singular_name' => _x( 'Team', 'Post Type Singular Name', 'warraich_traders' ),
            'menu_name' => _x( 'Teams', 'Admin Menu text', 'warraich_traders' ),
            'name_admin_bar' => _x( 'Team', 'Add New on Toolbar', 'warraich_traders' ),
            'archives' => __( 'Team Archives', 'warraich_traders' ),
            'attributes' => __( 'Team Attributes', 'warraich_traders' ),
            'parent_item_colon' => __( 'Parent Team:', 'warraich_traders' ),
            'all_items' => __( 'All Teams', 'warraich_traders' ),
            'add_new_item' => __( 'Add New Team', 'warraich_traders' ),
            'add_new' => __( 'Add New', 'warraich_traders' ),
            'new_item' => __( 'New Team', 'warraich_traders' ),
            'edit_item' => __( 'Edit Team', 'warraich_traders' ),
            'update_item' => __( 'Update Team', 'warraich_traders' ),
            'view_item' => __( 'View Team', 'warraich_traders' ),
            'view_items' => __( 'View Teams', 'warraich_traders' ),
            'search_items' => __( 'Search Team', 'warraich_traders' ),
            'not_found' => __( 'Not found', 'warraich_traders' ),
            'not_found_in_trash' => __( 'Not found in Trash', 'warraich_traders' ),
            'featured_image' => __( 'Featured Image', 'warraich_traders' ),
            'set_featured_image' => __( 'Set featured image', 'warraich_traders' ),
            'remove_featured_image' => __( 'Remove featured image', 'warraich_traders' ),
            'use_featured_image' => __( 'Use as featured image', 'warraich_traders' ),
            'insert_into_item' => __( 'Insert into Team', 'warraich_traders' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Team', 'warraich_traders' ),
            'items_list' => __( 'Teams list', 'warraich_traders' ),
            'items_list_navigation' => __( 'Teams list navigation', 'warraich_traders' ),
            'filter_items_list' => __( 'Filter Teams list', 'warraich_traders' ),
        );
        $args = array(
            'label' => __( 'Team', 'warraich_traders' ),
            'description' => __( '', 'warraich_traders' ),
            'labels' => $labels,
            'menu_icon' => 'dashicons-admin-users',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
            'taxonomies' => array(),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'exclude_from_search' => false,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );
        register_post_type( 'team', $args );

    }
    add_action( 'init', 'create_team_cpt', 0 );
?>