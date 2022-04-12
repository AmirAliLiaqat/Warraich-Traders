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
 
/************** Function using for adding sidebar widgets **************/
function warraich_traders_widgets_init() {
    register_sidebar( array(
        'name'                =>  __( 'Banner Upper Section', 'warraich_traders' ),
        'id'                     =>  'section-text-1',
        'before_widget' =>  '<p id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '<p>',
        'before_title'    =>  '<h2 class="widget-title">',
        'after_title'      =>  '</h2>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Banner Under Section', 'warraich_traders' ),
        'id'                     =>  'section-text-2',
        'before_widget' =>  '<p id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '<p>',
        'before_title'    =>  '<h2 class="widget-title">',
        'after_title'      =>  '</h2>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Section Widget 1', 'warraich_traders' ),
        'id'                     =>  'section-1',
        'before_widget' =>  '<p id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '<p>',
        'before_title'    =>  '<h4 class="widget-title">',
        'after_title'      =>  '</h4>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Section Widget 2', 'warraich_traders' ),
        'id'                     =>  'section-2',
        'before_widget' =>  '<div><a id="%1$s" class="tags %2$s">',
        'after_widget'   =>  '</a></div>',
        'before_title'    =>  '<h4 class="widget-title">',
        'after_title'      =>  '</h4>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Section Widget 3', 'warraich_traders' ),
        'id'                     =>  'section-3',
        'before_widget' =>  '<p id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '</p>',
        'before_title'    =>  '<h4 class="widget-title">',
        'after_title'      =>  '</h4>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Footer Widget 1', 'warraich_traders' ),
        'id'                     =>  'footer-1',
        'before_widget' =>  '<p id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '<p>',
        'before_title'    =>  '<h3 class="widget-title">',
        'after_title'      =>  '</h3>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Footer Widget 2', 'warraich_traders' ),
        'id'                     =>  'footer-2',
        'before_widget' =>  '<div><a id="%1$s" class="tags %2$s">',
        'after_widget'   =>  '</a></div>',
        'before_title'    =>  '<h3 class="widget-title">',
        'after_title'      =>  '</h3>',
    ) );
 
    register_sidebar( array(
        'name'                =>  __( 'Footer Widget 3', 'warraich_traders' ),
        'id'                     =>  'footer-3',
        'before_widget' =>  '<p id="%1$s" class="widget %2$s">',
        'after_widget'   =>  '</p>',
        'before_title'    =>  '<h3 class="widget-title">',
        'after_title'      =>  '</h3>',
    ) );
}
add_action('widgets_init', 'warraich_traders_widgets_init');

// // TGM Plugin Activation
// require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
// require get_template_directory() . '/inc/install-plugins.php';

// // Kirki Embedded
// require get_template_directory() . '/inc/kirki-config.php';

// Adding Custom Post Types
require get_template_directory() . '/inc/projects.php';

?>