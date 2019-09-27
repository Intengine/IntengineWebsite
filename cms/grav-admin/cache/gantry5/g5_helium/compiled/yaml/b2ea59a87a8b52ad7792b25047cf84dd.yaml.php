<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/config/default/layout.yaml',
    'modified' => 1569570875,
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
                    1 => 'menu-6409 50',
                    2 => 'social-3171 16.9'
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
                    0 => 'custom-7633'
                ],
                1 => [
                    0 => 'jloverlay-8611 33.3',
                    1 => 'jloverlay-3905 33.3',
                    2 => 'jloverlay-7854 33.3'
                ],
                2 => [
                    0 => 'logo-9072 33.3',
                    1 => 'logo-9887 33.3',
                    2 => 'logo-8101 33.3'
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
                    'boxed' => '',
                    'class' => '',
                    'variations' => ''
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
                    'class' => '',
                    'variations' => 'nopaddingall nomarginall'
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
<p>Love console games. Have PSone, PS2, PS3 and PS4. Playing on emulators too (mostly NES, SNES and Amiga). Designer. Movie-maniac.</p>

<p>Trying to create something new and fresh. By the last 4 years I was studying graphic design, programming and game development for mobiles (Android, iOS) and PC\'s as well (Unity, Unreal Engine 4). Learned some JAVA and C#.</p>

<p>I like to create websites too. In my academy\'s years I was studying a lot of HTML, CSS and JavaScript with AngularJS and jQuery. I also learned how to use the Bootstrap and other cool stuff to build amazing sites.</p>

<p>My main goal for this year is to build an RPG game with beautiful story and fantastic characters in Unity. The second goal is to make a full-time movie for the greatest cinemas in Poland.</p>'
                ],
                'block' => [
                    'class' => 'wow fadeInDown',
                    'variations' => 'center title-center'
                ]
            ],
            'gp_iconblock1-7932' => [
                'title' => 'Gp Icon Block 1',
                'attributes' => [
                    'class' => 'wow fadeInUp',
                    'icon_opacity' => '1',
                    'text_color' => '',
                    'font_size' => '',
                    'text_align' => 'center',
                    'padding' => '',
                    'mobile_padding' => '',
                    'heading_title' => 'WHAT WE DO',
                    'heading_title_tag' => 'h1',
                    'heading_desc' => '',
                    'heading_text_align' => 'center',
                    'columns' => '33-3',
                    'gp_items' => [
                        0 => [
                            'icon' => 'fa fa-desktop fa-lg',
                            'icon_color' => '',
                            'title' => 'WEB DESIGN',
                            'description' => '- HTML5<br>
- CSS3 + Bootstrap 4<br>
- JavaScript<br>
- CMS (Grav + Gantry5, Drupal 8)<br>',
                            'class' => 'features',
                            'variations' => 'center',
                            'name' => 'Web Design'
                        ],
                        1 => [
                            'icon' => 'fa fa-paint-brush',
                            'icon_color' => '',
                            'title' => 'GRAPHIC DESIGN',
                            'description' => '- DTP<br>
- 3D visualisation<br>
- Illustration<br>
- Animation (2D / 3D)',
                            'class' => 'features',
                            'variations' => '',
                            'name' => 'Graphic Design'
                        ],
                        2 => [
                            'icon' => 'fa fa-camera',
                            'icon_color' => '',
                            'title' => 'PHOTOGRAPHY',
                            'description' => '- Movie editing<br>
- Photomanipulation<br>
- Landscapes<br>
- Color correction',
                            'class' => 'features',
                            'variations' => '',
                            'name' => 'Photography'
                        ]
                    ],
                    'button_text' => '',
                    'button_url' => '',
                    'button_class' => ''
                ]
            ],
            'custom-7633' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<h1>PORTFOLIO</h1>'
                ],
                'block' => [
                    'class' => 'wow fadeInUp'
                ]
            ],
            'jloverlay-8611' => [
                'title' => 'JL Overlay',
                'attributes' => [
                    'image' => 'gantry-media://media/thumb-3dm.png',
                    'image_alt' => '',
                    'title' => 'Lorem Ipsum',
                    'meta' => '',
                    'content' => '',
                    'link' => '',
                    'buttontext' => '',
                    'target' => '_self',
                    'hover_image' => '',
                    'class' => '',
                    'overlay_mode' => 'cover',
                    'overlay_hover' => '1',
                    'overlay_style' => 'jl-overlay-primary',
                    'overlay_color' => 'light',
                    'overlay_padding' => 'default',
                    'overlay_position' => 'center',
                    'overlay_margin' => 'none',
                    'overlay_maxwidth' => 'none',
                    'overlay_transition' => 'fade',
                    'image_transition' => 'scale-up',
                    'box_shadow' => 'none',
                    'box_shadow_hover' => 'none',
                    'image_width' => '',
                    'image_height' => '',
                    'title_transition' => 'fade',
                    'title_style' => 'h2',
                    'title_decoration' => 'none',
                    'predefined_title_color' => 'secondary',
                    'title_color' => '#000000',
                    'title_fontsize' => '',
                    'title_text_transform' => '',
                    'title_element' => 'h3',
                    'title_margin' => 'default',
                    'meta_transition' => 'fade',
                    'meta_style' => 'h3',
                    'pre_meta_color' => 'default',
                    'meta_color' => '#ffffff',
                    'meta_fontsize' => '',
                    'meta_text_transform' => '',
                    'meta_alignment' => 'bottom',
                    'meta_margin' => 'default',
                    'content_transition' => 'fade',
                    'content_style' => 'default',
                    'content_text_color' => 'default',
                    'customize_content_color' => '#000000',
                    'customize_content_fontsize' => '',
                    'content_text_transform' => '',
                    'content_margin_top' => 'default',
                    'link_transition' => 'none',
                    'link_type' => 'button',
                    'buttontarget' => '_self',
                    'buttonclass' => 'default',
                    'link_button_size' => 'default',
                    'link_margin_top' => 'default',
                    'particle_title' => '',
                    'particle_title_style' => 'h3',
                    'particle_title_decoration' => 'none',
                    'particle_title_align' => 'inherit',
                    'particle_predefined_color' => 'default',
                    'particle_title_color' => '#000000',
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
                    'parallax_bg_color' => '#000000',
                    'blendmode' => 'inherit',
                    'parallax_bg_overlay' => '#000000',
                    'horizontal_start' => '0',
                    'horizontal_end' => '0',
                    'vertical_start' => '0',
                    'vertical_end' => '0',
                    'container' => '0',
                    'viewport_height' => 'none',
                    'padding' => 'default',
                    'vertical_alignment' => 'none',
                    'parallax_text_color' => 'default'
                ],
                'block' => [
                    'class' => 'wow fadeInLeft'
                ]
            ],
            'jloverlay-3905' => [
                'title' => 'JL Overlay',
                'attributes' => [
                    'image' => 'gantry-media://media/thumb-asp.png',
                    'image_alt' => '',
                    'title' => 'Ipsum Lorem',
                    'meta' => '',
                    'content' => '',
                    'link' => '',
                    'buttontext' => '',
                    'target' => '_self',
                    'hover_image' => '',
                    'class' => '',
                    'overlay_mode' => 'cover',
                    'overlay_hover' => '0',
                    'overlay_style' => 'jl-overlay-primary',
                    'overlay_color' => 'light',
                    'overlay_padding' => 'default',
                    'overlay_position' => 'center',
                    'overlay_margin' => 'none',
                    'overlay_maxwidth' => 'none',
                    'overlay_transition' => 'fade',
                    'image_transition' => 'scale-up',
                    'box_shadow' => 'none',
                    'box_shadow_hover' => 'none',
                    'image_width' => '',
                    'image_height' => '',
                    'title_transition' => 'fade',
                    'title_style' => 'h2',
                    'title_decoration' => 'none',
                    'predefined_title_color' => 'default',
                    'title_color' => '#000000',
                    'title_fontsize' => '',
                    'title_text_transform' => '',
                    'title_element' => 'h3',
                    'title_margin' => 'default',
                    'meta_transition' => 'fade',
                    'meta_style' => 'text-meta',
                    'pre_meta_color' => 'default',
                    'meta_color' => '#000000',
                    'meta_fontsize' => '',
                    'meta_text_transform' => '',
                    'meta_alignment' => 'bottom',
                    'meta_margin' => 'default',
                    'content_transition' => 'fade',
                    'content_style' => 'default',
                    'content_text_color' => 'default',
                    'customize_content_color' => '#000000',
                    'customize_content_fontsize' => '',
                    'content_text_transform' => '',
                    'content_margin_top' => 'default',
                    'link_transition' => 'fade',
                    'link_type' => 'button',
                    'buttontarget' => '_self',
                    'buttonclass' => 'default',
                    'link_button_size' => 'default',
                    'link_margin_top' => 'default',
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
                ],
                'block' => [
                    'class' => 'wow fadeInUp'
                ]
            ],
            'jloverlay-7854' => [
                'title' => 'JL Overlay',
                'attributes' => [
                    'image' => 'gantry-media://media/thumb-app.png',
                    'image_alt' => '',
                    'title' => 'Lorem Ipsum',
                    'meta' => '',
                    'content' => '',
                    'link' => '',
                    'buttontext' => '',
                    'target' => '_self',
                    'hover_image' => '',
                    'class' => '',
                    'overlay_mode' => 'cover',
                    'overlay_hover' => '0',
                    'overlay_style' => 'jl-overlay-primary',
                    'overlay_color' => 'light',
                    'overlay_padding' => 'default',
                    'overlay_position' => 'center',
                    'overlay_margin' => 'none',
                    'overlay_maxwidth' => 'none',
                    'overlay_transition' => 'fade',
                    'image_transition' => 'none',
                    'box_shadow' => 'none',
                    'box_shadow_hover' => 'none',
                    'image_width' => '',
                    'image_height' => '',
                    'title_transition' => 'none',
                    'title_style' => 'h3',
                    'title_decoration' => 'none',
                    'predefined_title_color' => 'default',
                    'title_color' => '',
                    'title_fontsize' => '',
                    'title_text_transform' => '',
                    'title_element' => 'h3',
                    'title_margin' => 'default',
                    'meta_transition' => 'none',
                    'meta_style' => 'text-meta',
                    'pre_meta_color' => 'default',
                    'meta_color' => '',
                    'meta_fontsize' => '',
                    'meta_text_transform' => '',
                    'meta_alignment' => 'bottom',
                    'meta_margin' => 'default',
                    'content_transition' => 'none',
                    'content_style' => 'default',
                    'content_text_color' => 'default',
                    'customize_content_color' => '',
                    'customize_content_fontsize' => '',
                    'content_text_transform' => '',
                    'content_margin_top' => 'default',
                    'link_transition' => 'none',
                    'link_type' => 'button',
                    'buttontarget' => '_self',
                    'buttonclass' => 'default',
                    'link_button_size' => 'default',
                    'link_margin_top' => 'default',
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
                ],
                'block' => [
                    'class' => 'wow fadeInRight'
                ]
            ],
            'logo-9072' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'image' => 'gantry-media://media/thumb-asx.png'
                ],
                'block' => [
                    'class' => 'wow fadeInLeft'
                ]
            ],
            'logo-9887' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'image' => 'gantry-media://media/thumb-com.png'
                ],
                'block' => [
                    'class' => 'wow fadeInUp'
                ]
            ],
            'logo-8101' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'image' => 'gantry-media://media/thumb-csr.png'
                ],
                'block' => [
                    'class' => 'wow fadeInRight'
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
