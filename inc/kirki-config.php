<?php
/**
 * Customizer Config.
 *
 * @package Warraich Traders
*/
Kirki::add_config( 'warraich_traders_options', array(
    'capability' => 'edit_theme_options',
    'options_type' => 'theme_mod',
) );

Kirki::add_panel( 'homepage_settings', array(
    'title'       => esc_html__( 'Homepage Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Homepage Layout', 'kirki' ),
    'priority'    => 10,
    'icon'    => 'dashicons-layout',
) );

Kirki::add_section( 'body_layout_settings', array(
    'title'       => esc_html__( 'Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Body Layout', 'kirki' ),
    'panel'       => 'homepage_settings',
    'priority'    => 10,
    'icon'          => 'dashicons-image-filter',
) );

Kirki::add_section( 'menu_settings', array(
    'title'       => esc_html__( 'Menu Settings', 'kirki' ),
    'description' => esc_html__( 'Manage Menu Layout & Settings', 'kirki' ),
    'panel'       => 'homepage_settings',
    'priority'    => 10,
    'icon'    => 'dashicons-admin-tools',
) );

Kirki::add_section( 'slider_settings', array(
    'title'       => esc_html__( 'Slider Settings', 'kirki' ),
    'description' => esc_html__( 'Manage Slider', 'kirki' ),
    'panel'       => 'homepage_settings',
    'priority'    => 10,
    'icon'    => 'dashicons-admin-page',
) );

Kirki::add_section( 'footer_settings', array(
    'title'       => esc_html__( 'Footer Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Footer Copyright Text', 'kirki' ),
    'priority'    => 10,
    'icon'    => 'dashicons-edit',
) );

Kirki::add_section( 'typography_settings', array(
    'title'       => esc_html__( 'Typography', 'kirki' ),
    'description' => esc_html__( 'Text Styles & Options', 'kirki' ),
    'priority'    => 10,
    'icon'    => 'dashicons-editor-spellcheck',
) );

/************************** Body background control ******************************/
Kirki::add_field( 'warraich_traders_options', [
    'type'            => 'background',
    'settings'      => 'body_background_setting',
    'label'           => esc_html__( 'Body Background Control', 'kirki' ),
    'description' => esc_html__( 'Body Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
    'section'       => 'body_layout_settings',
    'default'       => [
        'background-color'           => '#fff',
        'background-image'          => '',
        'background-repeat'         => 'repeat',
        'background-position'       => 'center center',
        'background-size'             => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport' => 'auto',
    'output'      => [
        [
            'element' => 'body',
        ],
    ],
] );

/************************** Home slider setting ******************************/
Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'switch',
    'settings'    => 'toggle_home_slider',
    'label'       => esc_html__( 'Switch Field', 'kirki' ),
    'description' => esc_html__( 'Homepage Slider', 'kirki' ),
    'section'     => 'slider_settings',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'kirki' ),
        'off' => esc_html__( 'Disable', 'kirki' ),
    ],
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'text',
    'settings' => 'slider_text_1',
    'label'    => esc_html__( 'Slider Text Box 1', 'kirki' ),
    'section'  => 'slider_settings',
    'default'  => esc_html__( 'If you want God to bless you, bless others.', 'kirki' ),
    'priority' => 10,
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'image',
    'settings'    => 'slider_img_1',
    'label'       => esc_html__( 'Slider Image 1', 'kirki' ),
    // 'description' => esc_html__( 'The saved value will be an array.', 'kirki' ),
    'section'     => 'slider_settings',
    'default'     => '',
    'choices'     => [
        'save_as' => 'array',
    ],
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'text',
    'settings' => 'slider_text_2',
    'label'    => esc_html__( 'Slider Text Box 2', 'kirki' ),
    'section'  => 'slider_settings',
    'default'  => esc_html__( 'Helping hands are better than praying lips.', 'kirki' ),
    'priority' => 10,
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'image',
    'settings'    => 'slider_img_2',
    'label'       => esc_html__( 'Slider Image 2', 'kirki' ),
    // 'description' => esc_html__( 'The saved value will be an array.', 'kirki' ),
    'section'     => 'slider_settings',
    'default'     => '',
    'choices'     => [
        'save_as' => 'array',
    ],
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'text',
    'settings' => 'slider_text_3',
    'label'    => esc_html__( 'Slider Text Box 3', 'kirki' ),
    'section'  => 'slider_settings',
    'default'  => esc_html__( 'Be the light that helps others see', 'kirki' ),
    'priority' => 10,
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'image',
    'settings'    => 'slider_img_3',
    'label'       => esc_html__( 'Slider Image 3', 'kirki' ),
    // 'description' => esc_html__( 'The saved value will be an array.', 'kirki' ),
    'section'     => 'slider_settings',
    'default'     => '',
    'choices'     => [
        'save_as' => 'array',
    ],
] );
/************************** Home typography ******************************/
Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'typography',
    'settings'    => 'heading_settings',
    'label'       => esc_html__( 'Headings', 'kirki' ),
    'section'     => 'typography_settings',
    'default'     => [
        'font-family'     => 'Roboto',
        'variant'         => 'regular',
        'font-style'      => 'normal',
        'font-size'       => '2rem',
        'line-height'     => '0',
        'letter-spacing'  => '0',
        'text-transform'  => 'none',
        'text-decoration' => 'none',
    ],
    'choices' => [
        'fonts' => [
            'google'   => [ 'popularity', 50 ],
            'standard' => [
                'Georgia,Times,"Times New Roman",serif',
                'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
            ],
        ],
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'h2',
        ],
    ],
] );

/************************** Nav background control ******************************/
Kirki::add_field( 'warraich_traders_options', [
    'type'            => 'background',
    'settings'      => 'background_setting',
    'label'           => esc_html__( 'Menu Background Control', 'kirki' ),
    'description' => esc_html__( 'Menu Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
    'section'       => 'menu_settings',
    'default'       => [
        'background-color'           => '#fff',
        'background-image'          => '',
        'background-repeat'         => 'repeat',
        'background-position'       => 'center center',
        'background-size'             => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport' => 'auto',
    'output'      => [
        [
            'element' => 'nav',
        ],
    ],
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'            => 'color',
    'settings'      => 'menu_color_setting',
    'label'           => esc_html__( 'Menu Color', 'kirki' ),
    'description' => esc_html__( 'Manage the menu colors', 'kirki' ),
    'section'       => 'menu_settings',
    'default'       => '#000',
    'transport' => 'auto',
    'output'      => [
        [
            'element' => '.nav-links ul li a',
        ],
    ],
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'            => 'color',
    'settings'      => 'menu_color_hover_setting',
    'label'           => esc_html__( 'Menu Hover Color', 'kirki' ),
    'description' => esc_html__( 'Manage the menu hover colors', 'kirki' ),
    'section'       => 'menu_settings',
    'default'       => '#69bde7',
    'transport' => 'auto',
    'output'      => [
        [
            'element' => '.nav-links ul li a:hover',
        ],
    ],
] );

/************************** Footer copyright setting ******************************/
Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'switch',
    'settings'    => 'toggle_footer_copyright',
    'label'       => esc_html__( 'Switch Field', 'kirki' ),
    'description' => esc_html__( 'Footer Copyright', 'kirki' ),
    'section'     => 'footer_settings',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'kirki' ),
        'off' => esc_html__( 'Disable', 'kirki' ),
    ],
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'text',
    'settings' => 'footer_copyright_text',
    'label'    => esc_html__( 'Footer Copyright', 'kirki' ),
    'section'  => 'footer_settings',
    'default'  => esc_html__( '© 2022 Warraich Traders. All Rights Reserved.' . '<br>' . 'Designed and Developed by 
    <a href="https://bytebunch.com" target="_blank" class="text-decoration-none text-white">ByteBunch</a>', 'kirki' ),
    'priority' => 10,
] );

?>