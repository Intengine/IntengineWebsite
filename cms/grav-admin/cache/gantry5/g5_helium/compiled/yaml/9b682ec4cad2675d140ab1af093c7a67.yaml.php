<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/gantry5/engines/nucleus/particles/feed.yaml',
    'modified' => 1570014719,
    'data' => [
        'name' => 'Feed Buttons',
        'description' => 'Feed Buttons Particle for Grav Feed Plugin',
        'type' => 'particle',
        'icon' => 'fa-rss',
        'dependencies' => [
            'platform' => [
                'grav' => [
                    'plugin' => [
                        'feed' => true
                    ]
                ]
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable feed particles.',
                    'default' => true
                ]
            ]
        ]
    ]
];
