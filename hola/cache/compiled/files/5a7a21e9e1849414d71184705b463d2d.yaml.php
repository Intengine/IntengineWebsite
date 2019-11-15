<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/hola/user/themes/hola/blueprints/modular/about.yaml',
    'modified' => 1573822306,
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
                                'background' => [
                                    'type' => 'section',
                                    'title' => 'Section Background Color',
                                    'underline' => true
                                ],
                                'header.sectionBackground' => [
                                    'type' => 'selectize',
                                    'label' => 'Additional Section Background Class',
                                    'description' => 'For Gray Background Please Use Class \'grey-section\' for White Background leave field empty.'
                                ],
                                'leftText' => [
                                    'type' => 'section',
                                    'title' => 'Biography',
                                    'underline' => true,
                                    'fields' => [
                                        'header.bioTitle' => [
                                            'type' => 'text',
                                            'label' => 'Biography Title'
                                        ],
                                        'header.bioDescription' => [
                                            'type' => 'textarea',
                                            'label' => 'Biography Text'
                                        ]
                                    ]
                                ],
                                'rightSkills' => [
                                    'type' => 'section',
                                    'title' => 'Skills',
                                    'underline' => true,
                                    'fields' => [
                                        'header.skillsTitle' => [
                                            'type' => 'text',
                                            'style' => 'vertical',
                                            'label' => 'Skills Title'
                                        ],
                                        'header.skills' => [
                                            'type' => 'list',
                                            'label' => 'Skills',
                                            'style' => 'vertical',
                                            'fields' => [
                                                '.skillName' => [
                                                    'type' => 'text',
                                                    'label' => 'Name'
                                                ],
                                                '.percentValue' => [
                                                    'type' => 'text',
                                                    'label' => 'Progress Percentage'
                                                ]
                                            ]
                                        ],
                                        'header.button1Text' => [
                                            'type' => 'text',
                                            'label' => 'First Button Text'
                                        ],
                                        'header.button1Link' => [
                                            'type' => 'text',
                                            'label' => 'First Button Link'
                                        ],
                                        'header.button2Text' => [
                                            'type' => 'text',
                                            'label' => 'Second Button Text'
                                        ],
                                        'header.button2Link' => [
                                            'type' => 'text',
                                            'label' => 'Second Button Text'
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
