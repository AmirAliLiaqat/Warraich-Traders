<?php
   // Register Custom Post Type Project
    function create_project_cpt() {

        $labels = array(
            'name' => _x( 'Projects', 'Post Type General Name', 'warraich_traders' ),
            'singular_name' => _x( 'Project', 'Post Type Singular Name', 'warraich_traders' ),
            'menu_name' => _x( 'Projects', 'Admin Menu text', 'warraich_traders' ),
            'name_admin_bar' => _x( 'Project', 'Add New on Toolbar', 'warraich_traders' ),
            'archives' => __( 'Project Archives', 'warraich_traders' ),
            'attributes' => __( 'Project Attributes', 'warraich_traders' ),
            'parent_item_colon' => __( 'Parent Project:', 'warraich_traders' ),
            'all_items' => __( 'All Projects', 'warraich_traders' ),
            'add_new_item' => __( 'Add New Project', 'warraich_traders' ),
            'add_new' => __( 'Add New', 'warraich_traders' ),
            'new_item' => __( 'New Project', 'warraich_traders' ),
            'edit_item' => __( 'Edit Project', 'warraich_traders' ),
            'update_item' => __( 'Update Project', 'warraich_traders' ),
            'view_item' => __( 'View Project', 'warraich_traders' ),
            'view_items' => __( 'View Projects', 'warraich_traders' ),
            'search_items' => __( 'Search Project', 'warraich_traders' ),
            'not_found' => __( 'Not found', 'warraich_traders' ),
            'not_found_in_trash' => __( 'Not found in Trash', 'warraich_traders' ),
            'featured_image' => __( 'Featured Image', 'warraich_traders' ),
            'set_featured_image' => __( 'Set featured image', 'warraich_traders' ),
            'remove_featured_image' => __( 'Remove featured image', 'warraich_traders' ),
            'use_featured_image' => __( 'Use as featured image', 'warraich_traders' ),
            'insert_into_item' => __( 'Insert into Project', 'warraich_traders' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Project', 'warraich_traders' ),
            'items_list' => __( 'Projects list', 'warraich_traders' ),
            'items_list_navigation' => __( 'Projects list navigation', 'warraich_traders' ),
            'filter_items_list' => __( 'Filter Projects list', 'warraich_traders' ),
        );
        $args = array(
            'label' => __( 'Project', 'warraich_traders' ),
            'description' => __( '', 'warraich_traders' ),
            'labels' => $labels,
            'menu_icon' => 'dashicons-awards',
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
        register_post_type( 'project', $args );

    }
    add_action( 'init', 'create_project_cpt', 0 );
?>