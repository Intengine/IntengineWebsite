<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/core-service-manager/blueprints.yaml',
    'modified' => 1568788240,
    'data' => [
        'name' => 'Core Service Manager',
        'version' => '1.0.18',
        'description' => 'Adds a service manager layer to the Grav API.',
        'icon' => 'plug',
        'author' => [
            'name' => 'TwelveTone LLC',
            'email' => 'info@twelvetone.tv'
        ],
        'homepage' => 'https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-core-service-manager',
        'xdemo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, plugin, core, service, manager, osgi, twig, ajax',
        'bugs' => 'https://github.com/flamenco/grav-plugin-core-service-manager/issues',
        'docs' => 'https://www.twelvetone.tv/docs/developer-tools/grav-plugins/grav-core-service-manager',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.0.0'
            ],
            1 => [
                'name' => 'admin',
                'version' => '>=1.8.3'
            ]
        ],
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
                'override_admin_twigs' => [
                    'type' => 'toggle',
                    'label' => 'Override Admin Twig',
                    'description' => 'This option should <strong>never</strong> be disabled. The setting is only provided as a troubleshooting tool.',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'show_samples' => [
                    'type' => 'toggle',
                    'label' => 'Add sample services',
                    'description' => 'For testing purposes, several sample services will be registered.',
                    'highlight' => 0,
                    'default' => 0,
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
