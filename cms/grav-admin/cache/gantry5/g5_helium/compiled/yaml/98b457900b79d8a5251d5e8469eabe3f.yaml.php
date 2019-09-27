<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/themes/g5_helium/blueprints/styles/base.yaml',
    'modified' => 1569569725,
    'data' => [
        'name' => 'Base Styles',
        'description' => 'Base styles for the Helium theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Text Color',
                    'default' => '#424753'
                ]
            ]
        ]
    ]
];
