<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/localhost/grav-admin/user/themes/quark/blueprints/modular/features.yaml',
    'modified' => 1567147650,
    'data' => [
        'title' => 'Features',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'features' => [
                            'type' => 'tab',
                            'title' => 'Features',
                            'fields' => [
                                'header.class' => [
                                    'type' => 'select',
                                    'label' => 'Layout',
                                    'default' => 'small',
                                    'size' => 'medium',
                                    'options' => [
                                        'small' => 'Small   = 4 / 3 / 2 columns',
                                        'standard' => 'Standard  = 3 / 2 / 1 columns'
                                    ]
                                ],
                                'header.features' => [
                                    'name' => 'features',
                                    'type' => 'list',
                                    'label' => 'Features',
                                    'fields' => [
                                        '.icon' => [
                                            'type' => 'iconpicker',
                                            'label' => 'Icon'
                                        ],
                                        '.header' => [
                                            'type' => 'text',
                                            'label' => 'Header'
                                        ],
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Text'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'Link'
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
