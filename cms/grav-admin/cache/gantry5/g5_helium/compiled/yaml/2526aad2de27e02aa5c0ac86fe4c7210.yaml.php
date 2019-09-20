<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/sylwesterpilarz/Desktop/IntengineWebsite/cms/grav-admin/user/themes/g5_helium/blueprints/styles/utility.yaml',
    'modified' => 1568995194,
    'data' => [
        'name' => 'Utility Styles',
        'description' => 'Utility section styles for the Helium theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#424753'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ]
            ]
        ]
    ]
];
