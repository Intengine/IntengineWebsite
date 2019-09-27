<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/particles/jluikit.yaml',
    'modified' => 1569569722,
    'data' => [
        'name' => 'UIkit3 for Gantry5',
        'description' => 'The UIkit 3 Framework for JoomLeads\'s Particles.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable atom.',
                    'default' => true
                ],
                'jslocation' => [
                    'type' => 'select.select',
                    'label' => 'JS Location',
                    'description' => 'Select where the UIkit JS assets should be loaded. The default is added to the head tag.',
                    'placeholder' => 'Select...',
                    'default' => 'head',
                    'options' => [
                        'footer' => 'Footer',
                        'head' => 'Head'
                    ]
                ],
                'copyright' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'JL UIkit3 for Gantry 5 <strong>Version: 2.0.8</strong> Copyright (C) <a href="https://joomlead.com/" target="_blank">JoomLead</a>'
                ]
            ]
        ]
    ]
];
