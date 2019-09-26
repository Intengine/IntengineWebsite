<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/config/default/layout.yaml',
    'modified' => 1569498255,
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
                    0 => 'logo-5608 33.3',
                    1 => 'logo-1564 33.3',
                    2 => 'logo-3491 33.3'
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
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>'
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
            'logo-5608' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'image' => 'gantry-media://media/thumb-3dm.png',
                    'class' => 'g-logo img.t5.front'
                ],
                'block' => [
                    'class' => 'wow fadeInLeft'
                ]
            ],
            'logo-1564' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'image' => 'gantry-media://media/thumb-3g2.png'
                ],
                'block' => [
                    'class' => 'wow fadeInUp'
                ]
            ],
            'logo-3491' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'image' => 'gantry-media://media/thumb-ai.png'
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
