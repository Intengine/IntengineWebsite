<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/sylwesterpilarz/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/config/menu/mainmenu.yaml',
    'modified' => 1570461503,
    'data' => [
        'settings' => [
            'title' => 'Mainmenu'
        ],
        'ordering' => [
            '__particle-7ypYy' => '',
            'home' => ''
        ],
        'items' => [
            'home' => [
                'enabled' => '0',
                'dropdown_dir' => 'right',
                'dropdown_hide' => '0',
                'width' => 'auto',
                'anchor_class' => ''
            ],
            '__particle-7ypYy' => [
                'type' => 'particle',
                'particle' => 'horizontalmenu',
                'title' => 'Horizontal Menu',
                'options' => [
                    'particle' => [
                        'enabled' => '1',
                        'class' => '',
                        'target' => '_parent',
                        'items' => [
                            0 => [
                                'text' => 'HOME',
                                'link' => '/home',
                                'name' => 'HOME'
                            ],
                            1 => [
                                'text' => 'ABOUT',
                                'link' => '#g-intro',
                                'name' => 'ABOUT'
                            ],
                            2 => [
                                'text' => 'PORTFOLIO',
                                'link' => '#g-utility',
                                'name' => 'PORTFOLIO'
                            ],
                            3 => [
                                'text' => 'CONTACT',
                                'link' => '',
                                'name' => 'CONTACT'
                            ]
                        ]
                    ],
                    'block' => [
                        'extra' => [
                            
                        ]
                    ]
                ],
                'enabled' => '1'
            ]
        ]
    ]
];
