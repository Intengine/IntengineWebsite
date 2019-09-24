<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/sylwesterpilarz/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/gantry5/engines/nucleus/admin/blueprints/layout/section.yaml',
    'modified' => 1569251814,
    'data' => [
        'name' => 'Section',
        'description' => 'Layout section.',
        'type' => 'section',
        'form' => [
            'fields' => [
                'boxed' => [
                    'type' => 'select.selectize',
                    'label' => 'Layout',
                    'description' => 'Select the Layout container behavior. \'Inherit\' refers to Page Settings.',
                    'isset' => true,
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'options' => [
                        '' => 'Inherit from Page Settings',
                        0 => 'Fullwidth (Boxed Content)',
                        2 => 'Fullwidth (Flushed Content)',
                        1 => 'Boxed',
                        3 => 'Remove Container'
                    ]
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'Enter CSS class names.',
                    'default' => NULL
                ],
                'variations' => [
                    'type' => 'input.section-variations',
                    'label' => 'Variations',
                    'description' => 'Enter Section Variations.',
                    'default' => NULL
                ],
                'extra' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'Tag Attributes',
                    'description' => 'Extra Tag attributes.',
                    'key_placeholder' => 'Key (data-*, style, ...)',
                    'value_placeholder' => 'Value',
                    'exclude' => [
                        0 => 'id',
                        1 => 'class'
                    ]
                ],
                '_inherit' => [
                    'type' => 'gantry.inherit'
                ]
            ]
        ]
    ]
];