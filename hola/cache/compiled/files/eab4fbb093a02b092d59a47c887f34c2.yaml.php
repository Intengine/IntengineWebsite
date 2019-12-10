<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/hola/user/plugins/pagination/blueprints.yaml',
    'modified' => 1575970147,
    'data' => [
        'name' => 'Pagination',
        'version' => '1.4.2',
        'description' => '**Pagination** is a very useful plugin to help navigate a large collection of pages, such as for a **blog**.',
        'icon' => 'list-ol',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-pagination',
        'keywords' => 'pagination, plugin, pages, navigation',
        'bugs' => 'https://github.com/getgrav/grav-plugin-pagination/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'delta' => [
                    'type' => 'number',
                    'size' => 'x-small',
                    'label' => 'PLUGIN_PAGINATION.DELTA',
                    'default' => 0,
                    'help' => 'PLUGIN_PAGINATION.DELTA_HELP',
                    'validate' => [
                        'type' => 'number',
                        'min' => 0
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_PAGINATION.BUILTIN_CSS',
                    'help' => 'PLUGIN_PAGINATION.BUILTIN_CSS_HELP',
                    'highlight' => 1,
                    'default' => 1,
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
