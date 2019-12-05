<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/hola/user/themes/hola/blueprints/modular/services.yaml',
    'modified' => 1575549648,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'header.smallTitle' => [
                                    'type' => 'text',
                                    'autofocus' => true,
                                    'style' => 'vertical',
                                    'label' => 'Small Upper Title'
                                ]
                            ]
                        ],
                        'holaSetings' => [
                            'type' => 'tab',
                            'title' => 'Hola Settings',
                            'fields' => [
                                'sectionBackground' => [
                                    'type' => 'section',
                                    'title' => 'Section Background',
                                    'underline' => true
                                ],
                                'header.sectionbackground' => [
                                    'type' => 'filepicker',
                                    'folder' => '@self',
                                    'label' => 'Select Section Background',
                                    'preview_images' => true,
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ],
                                'header.backgroundOverlay' => [
                                    'type' => 'text',
                                    'label' => 'Overlay Opacity',
                                    'description' => 'Please use value between 0 and 1.'
                                ],
                                'serviceSection' => [
                                    'type' => 'section',
                                    'title' => 'Services',
                                    'text' => 'Icon Bank: https://iconmonstr.com/iconicfont/',
                                    'underline' => true
                                ],
                                'header.services' => [
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Service Item',
                                    'fields' => [
                                        '.icon' => [
                                            'type' => 'iconpicker',
                                            'label' => 'Icon'
                                        ],
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        '.description' => [
                                            'type' => 'textarea',
                                            'label' => 'Description'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
