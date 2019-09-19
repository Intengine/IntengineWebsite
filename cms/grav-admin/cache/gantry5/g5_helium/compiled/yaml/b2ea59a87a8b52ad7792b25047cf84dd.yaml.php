<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/config/default/layout.yaml',
    'modified' => 1568901242,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1568648806
        ],
        'layout' => [
            '/navigation/' => [
                0 => [
                    0 => 'logo-9322 33',
                    1 => 'menu-6409 34',
                    2 => 'social-3171 32.9'
                ]
            ],
            '/header/' => [
                0 => [
                    0 => 'owlcarousel-7244'
                ]
            ],
            '/intro/' => [
                0 => [
                    0 => 'custom-3577'
                ]
            ],
            '/features/' => [
                0 => [
                    0 => 'gp_iconblock1-7932'
                ]
            ],
            '/utility/' => [
                0 => [
                    0 => 'jldivider-2272'
                ],
                1 => [
                    0 => 'jldivider-9419'
                ]
            ],
            '/above/' => [
                
            ],
            '/testimonials/' => [
                
            ],
            '/expanded/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'aside 25' => [
                            0 => [
                                0 => 'position-position-4734'
                            ]
                        ]
                    ],
                    1 => [
                        'mainbar 50' => [
                            0 => [
                                0 => 'system-content-1587'
                            ]
                        ]
                    ],
                    2 => [
                        'sidebar 25' => [
                            0 => [
                                0 => 'position-position-3949'
                            ]
                        ]
                    ]
                ]
            ],
            '/footer/' => [
                0 => [
                    0 => 'copyright-1736 33',
                    1 => 'horizontalmenu-9034 48',
                    2 => 'totop-8670 19'
                ]
            ],
            '/offcanvas/' => [
                0 => [
                    0 => 'mobile-menu-5697'
                ]
            ]
        ],
        'structure' => [
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '2',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'intro' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'features' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'testimonials' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'aside' => [
                'attributes' => [
                    'class' => ''
                ],
                'block' => [
                    'fixed' => '1'
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main'
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'attributes' => [
                    'class' => ''
                ],
                'block' => [
                    'fixed' => '1'
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'offcanvas' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ]
        ],
        'content' => [
            'logo-9322' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'image' => 'gantry-media://g5_helium/logo.png',
                    'text' => 'intengine',
                    'class' => 'g-logo g-logo-helium'
                ]
            ],
            'social-3171' => [
                'attributes' => [
                    'items' => [
                        0 => [
                            'icon' => 'fa fa-facebook fa-fw',
                            'text' => '',
                            'title' => '',
                            'link' => 'https://www.facebook.com/sylwester.pilarz',
                            'name' => 'Facebook'
                        ],
                        1 => [
                            'icon' => 'fa fa-github',
                            'text' => '',
                            'title' => '',
                            'link' => 'https://www.github.com/intengine',
                            'name' => 'GitHub'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'g-social-header'
                ]
            ],
            'owlcarousel-7244' => [
                'title' => 'Owl Carousel',
                'attributes' => [
                    'nav' => 'enable',
                    'dots' => 'enable',
                    'autoplay' => 'enable',
                    'autoplaySpeed' => '5000'
                ]
            ],
            'custom-3577' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<h1>Welcome to INTENGINE</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>'
                ],
                'block' => [
                    'variations' => 'center title-center'
                ]
            ],
            'gp_iconblock1-7932' => [
                'title' => 'Gp Icon Block 1',
                'attributes' => [
                    'class' => '',
                    'icon_opacity' => '1',
                    'text_color' => '',
                    'font_size' => '',
                    'text_align' => 'center',
                    'padding' => '',
                    'mobile_padding' => '',
                    'heading_title' => 'FEATURES',
                    'heading_title_tag' => 'h1',
                    'heading_desc' => '',
                    'heading_text_align' => 'center',
                    'columns' => '33-3',
                    'gp_items' => [
                        0 => [
                            'icon' => 'fa fa-apple fa-lg',
                            'icon_color' => '',
                            'title' => 'APPLE',
                            'description' => 'Lorem Ipsum',
                            'class' => '',
                            'variations' => '',
                            'name' => 'New item'
                        ],
                        1 => [
                            'icon' => 'fa fa-automobile',
                            'icon_color' => '',
                            'title' => 'CAR',
                            'description' => 'Ipsum Lorem',
                            'class' => '',
                            'variations' => '',
                            'name' => 'New item'
                        ],
                        2 => [
                            'icon' => 'fa fa-camera',
                            'icon_color' => '',
                            'title' => 'NIKON',
                            'description' => 'Aparat & Camera',
                            'class' => '',
                            'variations' => '',
                            'name' => 'New item'
                        ]
                    ],
                    'button_text' => '',
                    'button_url' => '',
                    'button_class' => ''
                ]
            ],
            'jldivider-2272' => [
                'title' => 'JL Divider',
                'attributes' => [
                    'divider_style' => 'icon',
                    'divider_element' => 'div',
                    'divider_align' => 'center',
                    'divider_breakpoint' => 'always',
                    'divider_fallback' => 'center',
                    'class' => '',
                    'particle_title' => '',
                    'particle_title_style' => 'h3',
                    'particle_title_decoration' => 'bullet',
                    'particle_title_align' => 'center',
                    'particle_predefined_color' => 'default',
                    'particle_title_color' => '',
                    'particle_title_fontsize' => '',
                    'particle_title_element' => 'h3',
                    'align' => 'inherit',
                    'breakpoint' => 'always',
                    'fallback' => 'inherit',
                    'g_maxwidth' => 'inherit',
                    'g_maxwidth_alignment' => 'left',
                    'g_maxwidth_breakpoint' => 'always',
                    'margin' => 'inherit',
                    'visibility' => 'inherit',
                    'animation' => 'inherit',
                    'animation_delay' => '',
                    'animation_repeat' => 'disabled',
                    'pa_horizontal_start' => '',
                    'pa_horizontal_end' => '',
                    'pa_vertical_start' => '',
                    'pa_vertical_end' => '',
                    'scale_start' => '',
                    'scale_end' => '',
                    'rotate_start' => '',
                    'rotate_end' => '',
                    'opacity_start' => '',
                    'opacity_end' => '',
                    'easing' => '',
                    'pa_viewport' => '',
                    'pa_breakpoint' => 'always',
                    'parallax_image' => '',
                    'background_image_size' => 'auto',
                    'background_image_position' => 'center-center',
                    'parallax_bg_breakpoint' => 'always',
                    'parallax_bg_visibility' => 'always',
                    'parallax_bg_color' => '',
                    'blendmode' => 'inherit',
                    'parallax_bg_overlay' => '',
                    'horizontal_start' => '0',
                    'horizontal_end' => '0',
                    'vertical_start' => '0',
                    'vertical_end' => '0',
                    'container' => '0',
                    'viewport_height' => 'none',
                    'padding' => 'default',
                    'vertical_alignment' => 'none',
                    'parallax_text_color' => 'default'
                ]
            ],
            'jldivider-9419' => [
                'title' => 'JL Divider',
                'attributes' => [
                    'divider_style' => 'vertical',
                    'divider_element' => 'hr',
                    'divider_align' => 'center',
                    'divider_breakpoint' => 'l',
                    'divider_fallback' => 'center',
                    'class' => '',
                    'particle_title' => '',
                    'particle_title_style' => 'h3',
                    'particle_title_decoration' => 'none',
                    'particle_title_align' => 'inherit',
                    'particle_predefined_color' => 'default',
                    'particle_title_color' => '',
                    'particle_title_fontsize' => '',
                    'particle_title_element' => 'h3',
                    'align' => 'inherit',
                    'breakpoint' => 'always',
                    'fallback' => 'inherit',
                    'g_maxwidth' => 'medium',
                    'g_maxwidth_alignment' => 'center',
                    'g_maxwidth_breakpoint' => 'always',
                    'margin' => 'inherit',
                    'visibility' => 'inherit',
                    'animation' => 'inherit',
                    'animation_delay' => '',
                    'animation_repeat' => 'disabled',
                    'pa_horizontal_start' => '',
                    'pa_horizontal_end' => '',
                    'pa_vertical_start' => '',
                    'pa_vertical_end' => '',
                    'scale_start' => '',
                    'scale_end' => '',
                    'rotate_start' => '',
                    'rotate_end' => '',
                    'opacity_start' => '',
                    'opacity_end' => '',
                    'easing' => '',
                    'pa_viewport' => '',
                    'pa_breakpoint' => 'always',
                    'parallax_image' => '',
                    'background_image_size' => 'auto',
                    'background_image_position' => 'center-center',
                    'parallax_bg_breakpoint' => 'always',
                    'parallax_bg_visibility' => 'always',
                    'parallax_bg_color' => '',
                    'blendmode' => 'inherit',
                    'parallax_bg_overlay' => '',
                    'horizontal_start' => '0',
                    'horizontal_end' => '0',
                    'vertical_start' => '0',
                    'vertical_end' => '0',
                    'container' => '0',
                    'viewport_height' => 'none',
                    'padding' => 'default',
                    'vertical_alignment' => 'none',
                    'parallax_text_color' => 'default'
                ]
            ],
            'position-position-4734' => [
                'title' => 'Aside',
                'attributes' => [
                    'key' => 'aside'
                ]
            ],
            'position-position-3949' => [
                'title' => 'Sidebar',
                'attributes' => [
                    'key' => 'sidebar'
                ]
            ],
            'copyright-1736' => [
                'attributes' => [
                    'additional' => [
                        'text' => ''
                    ]
                ]
            ],
            'horizontalmenu-9034' => [
                'title' => 'Horizontal Menu',
                'attributes' => [
                    'items' => [
                        0 => [
                            'text' => 'Home',
                            'link' => 'http://gantry.org',
                            'name' => 'Home'
                        ],
                        1 => [
                            'text' => 'Portfolio',
                            'link' => 'http://docs.gantry.org',
                            'name' => 'Portfolio'
                        ],
                        2 => [
                            'text' => 'Download',
                            'link' => 'http://gantry.org/downloads',
                            'name' => 'Download'
                        ]
                    ]
                ]
            ],
            'totop-8670' => [
                'title' => 'To Top'
            ]
        ]
    ]
];
