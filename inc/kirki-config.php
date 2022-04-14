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

Kirki::add_panel( 'all_page_settings', array(
    'title'       => esc_html__( 'Pages Layout Settings', 'kirki' ),
    'priority'    => 10,
    'icon'    => 'dashicons-admin-page',
) );

/************************** Home Page All Sections ******************************/
Kirki::add_section( 'body_layout_settings', array(
    'title'       => esc_html__( 'Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Body Layout', 'kirki' ),
    'panel'       => 'homepage_settings',
    'priority'    => 10,
    'icon'          => 'dashicons-image-filter',
) );

Kirki::add_section( 'header_settings', array(
    'title'       => esc_html__( 'Header Settings', 'kirki' ),
    'description' => esc_html__( 'Manage Header Layout & Settings', 'kirki' ),
    'panel'       => 'homepage_settings',
    'priority'    => 10,
    'icon'          => 'dashicons-admin-customizer',
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

Kirki::add_section( 'banner_settings', array(
    'title'       => esc_html__( 'Banner Settings', 'kirki' ),
    'description' => esc_html__( 'Manage Site All Banners', 'kirki' ),
    'panel'       => 'homepage_settings',
    'priority'    => 10,
    'icon'    => 'dashicons-archive',
) );

/************************** Page All Sections ******************************/
Kirki::add_section( 'contact_page_settings', array(
    'title'       => esc_html__( 'Contact Page Settings', 'kirki' ),
    'description' => esc_html__( 'Manage All Contact Page', 'kirki' ),
    'panel'       => 'all_page_settings',
    'priority'    => 10,
    'icon'    => 'dashicons-clipboard',
) );

Kirki::add_section( 'login_page_settings', array(
    'title'       => esc_html__( 'Login Page Settings', 'kirki' ),
    'description' => esc_html__( 'Manage Complate Login Page', 'kirki' ),
    'panel'       => 'all_page_settings',
    'priority'    => 10,
    'icon'    => 'dashicons-clipboard',
) );

/************************** Footer Section ******************************/
Kirki::add_section( 'footer_settings', array(
    'title'       => esc_html__( 'Footer Layout', 'kirki' ),
    'description' => esc_html__( 'Manage Footer Copyright Text', 'kirki' ),
    'priority'    => 10,
    'icon'    => 'dashicons-edit',
) );

/************************** Typography Section ******************************/
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
    'section'     => 'slider_settings',
    'default'     => '',
    'choices'     => [
        'save_as' => 'array',
    ],
] );

/************************** Banners controls ******************************/
Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'switch',
    'settings'    => 'toggle_banner',
    'label'       => esc_html__( 'Switch Field', 'kirki' ),
    'description' => esc_html__( 'Show/Hide Site All Banners', 'kirki' ),
    'section'     => 'banner_settings',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'kirki' ),
        'off' => esc_html__( 'Disable', 'kirki' ),
    ],
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'            => 'background',
    'settings'      => 'banner_background_setting',
    'label'           => esc_html__( 'Menu Background Control', 'kirki' ),
    'description' => esc_html__( 'Menu Background controls are pretty complex! (but useful if used properly)', 'kirki' ),
    'section'       => 'banner_settings',
    'default'       => [
        'background-color'           => '#000',
    ],
    'transport' => 'auto',
    'output'      => [
        [
            'element' => '.bg_img',
        ],
    ],
] );

/************************** Contact Page controls ******************************/
Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'switch',
    'settings'    => 'toggle_map',
    'label'       => esc_html__( 'Switch Field', 'kirki' ),
    'description' => esc_html__( 'Show/Hide Contact Page Map Section', 'kirki' ),
    'section'     => 'contact_page_settings',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'kirki' ),
        'off' => esc_html__( 'Disable', 'kirki' ),
    ],
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'text',
    'settings' => 'contact_header',
    'label'    => esc_html__( 'Contact Header Text', 'kirki' ),
    'section'  => 'contact_page_settings',
    'default'  => esc_html__( 'Contact Details', 'kirki' ),
    'priority' => 10,
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'text',
    'settings' => 'contact_text_1',
    'label'    => esc_html__( 'Contact Text Box 1', 'kirki' ),
    'section'  => 'contact_page_settings',
    'default'  => esc_html__( 'Near 5 No.Bus Stop, Main Ferozpur Road, Kahna Nau, Lahore, Pakistan', 'kirki' ),
    'priority' => 10,
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'text',
    'settings' => 'contact_text_2',
    'label'    => esc_html__( 'Contact Text Box 2', 'kirki' ),
    'section'  => 'contact_page_settings',
    'default'  => esc_html__( '0300-4516820', 'kirki' ),
    'priority' => 10,
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'text',
    'settings' => 'contact_text_3',
    'label'    => esc_html__( 'Contact Text Box 3', 'kirki' ),
    'section'  => 'contact_page_settings',
    'default'  => esc_html__( 'ch_imtiazali@yahoo.com', 'kirki' ),
    'priority' => 10,
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'text',
    'settings' => 'contact_text_4',
    'label'    => esc_html__( 'Contact Text Box 4', 'kirki' ),
    'section'  => 'contact_page_settings',
    'default'  => esc_html__( '09 AM - 09 PM', 'kirki' ),
    'priority' => 10,
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'text',
    'settings' => 'contact_button',
    'label'    => esc_html__( 'Contact Button Text', 'kirki' ),
    'section'  => 'contact_page_settings',
    'default'  => esc_html__( 'Send Message', 'kirki' ),
    'priority' => 10,
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'            => 'background',
    'settings'      => 'contact_button_background_color',
    'label'           => esc_html__( 'Contact Button Background Control', 'kirki' ),
    'description' => esc_html__( 'Manage the contact page button background color', 'kirki' ),
    'section'       => 'contact_page_settings',
    'default'       => [
        'background-color'           => '#074284',
    ],
    'transport' => 'auto',
    'output'      => [
        [
            'element' => '.site_btn',
        ],
    ],
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'            => 'background',
    'settings'      => 'contact_button_background_hover_color',
    'label'           => esc_html__( 'Contact Button Background Hover Control', 'kirki' ),
    'description' => esc_html__( 'Manage the contact page button hover background color', 'kirki' ),
    'section'       => 'contact_page_settings',
    'default'       => [
        'background-color'           => '#475153',
    ],
    'transport' => 'auto',
    'output'      => [
        [
            'element' => '.site_btn:hover',
        ],
    ],
] );

/************************** Login Page controls ******************************/
Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'code',
    'settings'    => 'code_setting',
    'label'       => esc_html__( 'Code Control', 'kirki' ),
    'description' => esc_html__( 'Manage the login page with write code.', 'kirki' ),
    'section'     => 'login_page_settings',
    'default'     => '',
    'choices'     => [
        'language' => 'html',
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

/************************** Header settings & control ******************************/
Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'switch',
    'settings'    => 'toggle_header',
    'label'       => esc_html__( 'Switch Field', 'kirki' ),
    'description' => esc_html__( 'Show/Hide Header', 'kirki' ),
    'section'     => 'header_settings',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => [
        'on'  => esc_html__( 'Enable', 'kirki' ),
        'off' => esc_html__( 'Disable', 'kirki' ),
    ],
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'            => 'background',
    'settings'      => 'header_background_setting',
    'label'           => esc_html__( 'Header Background Control', 'kirki' ),
    'description' => esc_html__( 'Header Background controls are pretty complex! (but useful if used properly)', 'kirki' ),
    'section'       => 'header_settings',
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
            'element' => '.header-top',
        ],
    ],
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'text',
    'settings' => 'header_text_1',
    'label'    => esc_html__( 'Header Text Box 1', 'kirki' ),
    'section'  => 'header_settings',
    'default'  => esc_html__( '0300-4516820', 'kirki' ),
    'priority' => 10,
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'text',
    'settings' => 'header_text_2',
    'label'    => esc_html__( 'Header Text Box 2', 'kirki' ),
    'section'  => 'header_settings',
    'default'  => esc_html__( 'MON - SUN: 09 AM - 09 PM', 'kirki' ),
    'priority' => 10,
] );

Kirki::add_field( 'warraich_traders_options', [
    'type'    => 'text',
    'settings' => 'header_text_3',
    'label'    => esc_html__( 'Header Text Box 3', 'kirki' ),
    'section'  => 'header_settings',
    'default'  => esc_html__( 'ch_imtiazali@yahoo.com', 'kirki' ),
    'priority' => 10,
] );

/************************** Nav settings & control ******************************/
Kirki::add_field( 'warraich_traders_options', [
    'type'            => 'background',
    'settings'      => 'nav_background_setting',
    'label'           => esc_html__( 'Menu Background Control', 'kirki' ),
    'description' => esc_html__( 'Menu Background controls are pretty complex! (but useful if used properly)', 'kirki' ),
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