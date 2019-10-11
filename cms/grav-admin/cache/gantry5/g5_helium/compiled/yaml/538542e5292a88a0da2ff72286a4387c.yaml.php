<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/themes/g5_helium/particles/copyright.yaml',
    'modified' => 1570788199,
    'data' => [
        'name' => 'Copyright',
        'description' => 'Display copyright information.',
        'type' => 'particle',
        'icon' => 'fa-copyright',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'date.start' => [
                    'type' => 'input.text',
                    'label' => 'Start Year',
                    'description' => 'Select the copyright start year.',
                    'default' => 'now'
                ],
                'date.end' => [
                    'type' => 'input.text',
                    'label' => 'End Year',
                    'description' => 'Select the copyright end year.',
                    'default' => 'now'
                ],
                'owner' => [
                    'type' => 'input.text',
                    'label' => 'Copyright owner',
                    'description' => 'Add copyright owner name.'
                ],
                'link' => [
                    'type' => 'input.text',
                    'label' => 'Owner Link',
                    'description' => 'Add link for owner.'
                ],
                'target' => [
                    'type' => 'select.select',
                    'label' => 'Owner Link Target',
                    'description' => 'Target browser window when owner link is clicked.',
                    'placeholder' => 'Select...',
                    'default' => '_blank',
                    'options' => [
                        '_parent' => 'Self',
                        '_blank' => 'New Window'
                    ]
                ],
                'additional.text' => [
                    'type' => 'input.text',
                    'label' => 'Additional Text',
                    'description' => 'Additional text that you\'d like to add below the copyright.'
                ],
                'css.class' => [
                    'type' => 'input.text',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ]
            ]
        ]
    ]
];
