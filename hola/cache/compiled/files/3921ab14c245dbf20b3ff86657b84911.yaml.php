<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/hola/user/themes/hola/blueprints/partials/blog-bits.yaml',
    'modified' => 1575970147,
    'data' => [
        'form' => [
            'fields' => [
                'hero_title' => [
                    'type' => 'spacer',
                    'title' => 'Hero Section'
                ],
                'header.hero_classes' => [
                    'type' => 'text',
                    'label' => 'Hero Classes',
                    'markdown' => true,
                    'default' => 'page-header page-header--single page-hero'
                ],
                'header.hero_image' => [
                    'type' => 'filepicker',
                    'label' => 'Hero Image',
                    'preview_images' => true,
                    'description' => 'If not specified, this defaults to the first image found in the page\'s folder'
                ],
                'toggles_title' => [
                    'type' => 'spacer',
                    'title' => 'Configuration'
                ],
                'header.show_pagination' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'Show Pagination',
                    'highlight' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
