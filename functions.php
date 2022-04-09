<?php
/**
 * Functions File.
 *
 * @package Warraich Traders
*/

/************** Function using for adding theme supports **************/
function warraich_traders_theme_setup() {
    
    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_image_size('home-featured', 640, 400, array('center', 'center'));
    add_image_size('single-post', 580, 272, array('center', 'center'));

    add_theme_support('automatic-feed-links');
    
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'warraich_traders' )
    ) );

    register_nav_menus( array(
        'secondary'   => __( 'Secondary Menu', 'warraich_traders' )
    ) );

}
add_action('after_setup_theme', 'warraich_traders_theme_setup');

/************** Function using for adding styles and scripts links **************/
function warraich_traders_enqueue_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jQuery.js' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js' );
}
add_action('wp_enqueue_scripts', 'warraich_traders_enqueue_scripts');
?>