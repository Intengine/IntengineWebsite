<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/particles/scrollreveal-js.yaml',
    'modified' => 1456580188,
    'data' => [
        'name' => 'ScrollReveal.js',
        'description' => 'Configure ScrollReveal.js.',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable ScrollReveal.js particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'This Atom adds the <a href="https://scrollrevealjs.org/" target="_blank">ScrollReveal.js</a> functionality to your website.<br />ScrollReveal.js is a library to easily reveal elements as they enter the viewport (OnScroll Animations).'
                ],
                'mobile' => [
                    'type' => 'select.select',
                    'label' => 'Mobile',
                    'description' => 'Enable or disable the animations on mobile devices.',
                    'placeholder' => 'Select...',
                    'default' => 'false',
                    'options' => [
                        'true' => 'Enabled',
                        'false' => 'Disabled'
                    ]
                ]
            ]
        ]
    ]
];
