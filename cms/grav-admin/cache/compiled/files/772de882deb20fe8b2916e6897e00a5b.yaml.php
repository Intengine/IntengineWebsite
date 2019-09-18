<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/editor/blueprints.yaml',
    'modified' => 1568788240,
    'data' => [
        'name' => 'Editor',
        'version' => '0.1.9',
        'description' => 'Edit theme, plugin, and markdown files from the browser.',
        'icon' => 'edit',
        'author' => [
            'name' => 'TwelveTone LLC',
            'email' => 'info@twelvetone.tv'
        ],
        'homepage' => 'https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-editor-plugin',
        'x-demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, plugin, css, stylesheet, editor, codemirror, twig, php, javascript',
        'x-bugs' => 'https://github.com/twelve-tone-llc/grav-plugin-editor/issues',
        'docs' => 'https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-editor-plugin',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'core-service-manager',
                'version' => '>=1.0.18'
            ],
            1 => [
                'name' => 'admin-power-tools',
                'version' => '>=0.1.4'
            ]
        ],
        'require_dependencies' => true,
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'section' => [
                    'type' => 'section',
                    'title' => 'File types'
                ],
                'css_enabled' => [
                    'type' => 'toggle',
                    'label' => 'CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'twig_enabled' => [
                    'type' => 'toggle',
                    'label' => 'Twig',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'js_enabled' => [
                    'type' => 'toggle',
                    'label' => 'Javascript',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'php_enabled' => [
                    'type' => 'toggle',
                    'label' => 'PHP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'yaml_enabled' => [
                    'type' => 'toggle',
                    'label' => 'YAML',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'markdown_enabled' => [
                    'type' => 'toggle',
                    'label' => 'Markdown',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
