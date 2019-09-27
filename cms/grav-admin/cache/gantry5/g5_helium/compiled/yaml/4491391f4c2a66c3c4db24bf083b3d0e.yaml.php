<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/particles/smoothscroll.yaml',
    'modified' => 1569569722,
    'data' => [
        'name' => 'Smooth Scrolling',
        'description' => 'Configure Smooth Scrolling of links',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Smooth Scrolling atom.',
                    'default' => true
                ],
                'duration' => [
                    'type' => 'input.text',
                    'description' => 'Enter the duration (time in milliseconds).',
                    'label' => 'Duration (ms)',
                    'default' => 900
                ],
                'easing' => [
                    'type' => 'select.selectize',
                    'description' => 'Choose the easing type',
                    'label' => 'Easing',
                    'default' => 'swing',
                    'placeholder' => 'Select...',
                    'options' => [
                        'swing' => 'swing',
                        'linear' => 'linear'
                    ]
                ]
            ]
        ]
    ]
];
