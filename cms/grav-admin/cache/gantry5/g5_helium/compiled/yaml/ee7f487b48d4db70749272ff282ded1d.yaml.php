<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/themes/g5_helium/blueprints/styles/intro.yaml',
    'modified' => 1569407020,
    'data' => [
        'name' => 'Intro Styles',
        'description' => 'Intro section styles for the Helium theme',
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
