<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/hola/user/themes/hola/blueprints/item.yaml',
    'modified' => 1574171653,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'header.lead' => [
                                    'type' => 'textarea',
                                    'autofocus' => true,
                                    'style' => 'vertical',
                                    'label' => 'Lead Post Pargraph'
                                ]
                            ]
                        ],
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Blog Item',
                            'fields' => [
                                'header_options' => [
                                    'type' => 'section',
                                    'title' => 'Header Options',
                                    'underline' => true
                                ]
                            ],
                            'import@' => [
                                'type' => 'partials/blog-bits'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];