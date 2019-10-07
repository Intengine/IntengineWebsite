<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/sylwesterpilarz/Desktop/IntengineWebsite/cms/grav-admin/user/themes/g5_helium/blueprints/styles/above.yaml',
    'modified' => 1570461505,
    'data' => [
        'name' => 'Above Styles',
        'description' => 'Above section styles for the Helium theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#f4f5f7'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#424753'
                ]
            ]
        ]
    ]
];
