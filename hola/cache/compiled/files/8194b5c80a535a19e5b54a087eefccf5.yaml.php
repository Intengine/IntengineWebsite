<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/hola/user/themes/hola/blueprints.yaml',
    'modified' => 1574235672,
    'data' => [
        'name' => 'Hola',
        'version' => '1.1.2',
        'description' => 'Hola is a modern and stylish vCard website template.',
        'icon' => 'id-card-o',
        'author' => [
            'name' => 'Devlom',
            'email' => 'info@devlom.com',
            'url' => 'https://devlom.com'
        ],
        'homepage' => 'https://devlom.com/en/blog/hola-stylish-grav-theme',
        'demo' => 'http://demo.devlom.com/grav/hola/',
        'keywords' => 'hola, theme, styleshout, vcard, devlom, responsive, html5, css3',
        'bugs' => 'https://github.com/devlom/grav-theme-hola/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.4.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'header_section' => [
                    'type' => 'section',
                    'title' => 'Header Defaults',
                    'underline' => true
                ],
                'custom_logo' => [
                    'type' => 'file',
                    'label' => 'Custom Logo',
                    'size' => 'large',
                    'destination' => 'theme://images/logo',
                    'multiple' => false,
                    'markdown' => true,
                    'description' => 'Will be used instead of default logo `theme://images/grav-logo.svg`',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'footer_section' => [
                    'type' => 'section',
                    'title' => 'Footer Defaults',
                    'underline' => true
                ],
                'footer-text' => [
                    'type' => 'text',
                    'label' => 'Copyright Bottom Message'
                ],
                'footer-design' => [
                    'type' => 'text',
                    'label' => 'About Design And Project Description'
                ],
                'footer-additional-text' => [
                    'type' => 'text',
                    'label' => 'Additional Text Beneath Footer Copyright Text'
                ],
                'footer-social' => [
                    'type' => 'list',
                    'label' => 'Social icons',
                    'style' => 'vertical',
                    'fields' => [
                        '.socialIconClass' => [
                            'type' => 'text',
                            'label' => 'Icon Class'
                        ],
                        '.socialIconText' => [
                            'type' => 'text',
                            'label' => 'Icon Name'
                        ],
                        '.socialIconLink' => [
                            'type' => 'text',
                            'label' => 'Url'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
