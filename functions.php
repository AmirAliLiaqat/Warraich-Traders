<?php
/**
 * Functions File.
 *
 * @package Warraich Traders
*/

function warraich_trader_enqueue_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jQuery.js' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js' );
}
add_action('wp_enqueue_scripts', 'warraich_trader_enqueue_scripts');
?>