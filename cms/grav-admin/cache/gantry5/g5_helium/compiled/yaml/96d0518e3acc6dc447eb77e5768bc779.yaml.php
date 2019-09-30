<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/data/gantry5/themes/g5_helium/particles/jloverlay.yaml',
    'modified' => 1569830828,
    'data' => [
        'name' => 'JL Overlay',
        'description' => 'Display an image with a content overlay.',
        'type' => 'particle',
        'icon' => 'fa-file-image-o',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_content' => [
                            'label' => 'Content',
                            'overridable' => false,
                            'fields' => [
                                'image' => [
                                    'type' => 'input.imagepicker',
                                    'label' => 'Image',
                                    'description' => 'An image field with an image picker.',
                                    'placeholder' => 'Pick an image'
                                ],
                                'image_alt' => [
                                    'type' => 'input.text',
                                    'label' => 'Image Alt',
                                    'description' => 'Enter the image\'s alt attribute.',
                                    'placeholder' => 'Image ALT'
                                ],
                                'title' => [
                                    'type' => 'input.text',
                                    'label' => 'Title',
                                    'description' => 'Customize the Title.',
                                    'placeholder' => 'Enter Title'
                                ],
                                'meta' => [
                                    'type' => 'input.text',
                                    'label' => 'Meta',
                                    'description' => 'Customize the Meta.',
                                    'placeholder' => 'Enter Meta'
                                ],
                                'content' => [
                                    'type' => 'textarea.textarea',
                                    'label' => 'Description',
                                    'description' => 'Customize the description.',
                                    'placeholder' => 'Enter Description'
                                ],
                                'link' => [
                                    'type' => 'input.text',
                                    'label' => 'Link',
                                    'description' => 'Enter the image\'s link if needed.',
                                    'placeholder' => 'http://'
                                ],
                                'buttontext' => [
                                    'type' => 'input.text',
                                    'label' => 'Link Text',
                                    'description' => 'Specify the button label.',
                                    'placeholder' => 'Learn more'
                                ],
                                'target' => [
                                    'type' => 'select.selectize',
                                    'label' => 'Target',
                                    'description' => 'Target browser window when item is clicked.',
                                    'placeholder' => 'Select...',
                                    'default' => '_self',
                                    'options' => [
                                        '_self' => 'Self',
                                        '_blank' => 'New Window'
                                    ]
                                ],
                                'hover_image' => [
                                    'type' => 'input.imagepicker',
                                    'label' => 'Hover Image',
                                    'description' => 'Select an optional image that appears on hover.',
                                    'placeholder' => 'Pick an image'
                                ],
                                'class' => [
                                    'type' => 'input.selectize',
                                    'label' => 'CSS Classes',
                                    'description' => 'CSS class name for the particle.'
                                ]
                            ]
                        ],
                        '_tab_overlay' => [
                            'label' => 'Overlay',
                            'overridable' => false,
                            'fields' => [
                                'overlay_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Overlay Settings'
                                ],
                                'overlay_mode' => [
                                    'type' => 'select.select',
                                    'label' => 'Mode',
                                    'description' => 'When using cover mode, you need to set the text color manually.',
                                    'default' => 'cover',
                                    'options' => [
                                        'cover' => 'Cover',
                                        'caption' => 'Caption'
                                    ]
                                ],
                                'overlay_hover' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Overlay On Hover',
                                    'description' => 'Display content overlay on hover.',
                                    'default' => false
                                ],
                                'overlay_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Overlay Style',
                                    'description' => 'Select the style for the overlay.',
                                    'default' => 'jl-overlay-primary',
                                    'options' => [
                                        'none' => 'None',
                                        'jl-overlay-default' => 'Overlay Default',
                                        'jl-overlay-primary' => 'Overlay Primary',
                                        'jl-tile-default' => 'Tile Default',
                                        'jl-tile-muted' => 'Tile Muted',
                                        'jl-tile-primary' => 'Tile Primary',
                                        'jl-tile-secondary' => 'Tile Secondary'
                                    ]
                                ],
                                'overlay_color' => [
                                    'type' => 'select.select',
                                    'label' => 'Color',
                                    'description' => 'Set light or dark color mode.',
                                    'default' => 'light',
                                    'options' => [
                                        'default' => 'Default',
                                        'light' => 'Light',
                                        'dark' => 'Dark'
                                    ]
                                ],
                                'overlay_padding' => [
                                    'type' => 'select.select',
                                    'label' => 'Padding',
                                    'description' => 'Set the padding between the overlay and its content.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'small' => 'Small',
                                        'remove' => 'None',
                                        'large' => 'Large'
                                    ]
                                ],
                                'overlay_position' => [
                                    'type' => 'select.select',
                                    'label' => 'Position',
                                    'description' => 'Set the padding between the overlay and its content.',
                                    'default' => 'center',
                                    'options' => [
                                        'top' => 'Top',
                                        'bottom' => 'Bottom',
                                        'left' => 'Left',
                                        'right' => 'Right',
                                        'top-left' => 'Top Left',
                                        'top-center' => 'Top Center',
                                        'top-right' => 'Top Right',
                                        'bottom-left' => 'Bottom Left',
                                        'bottom-center' => 'Bottom Center',
                                        'bottom-right' => 'Bottom Right',
                                        'center' => 'Center',
                                        'center-left' => 'Center Left',
                                        'center-right' => 'Center Right'
                                    ]
                                ],
                                'overlay_margin' => [
                                    'type' => 'select.select',
                                    'label' => 'Margin',
                                    'description' => 'Apply a margin between the overlay and the image container IF the overlay style is Selected.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'large' => 'Large'
                                    ]
                                ],
                                'overlay_maxwidth' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width',
                                    'description' => 'Set the maximum content width.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large'
                                    ]
                                ],
                                'overlay_transition' => [
                                    'type' => 'select.select',
                                    'label' => 'Overlay Transition',
                                    'description' => 'Select a hover transition for the overlay.',
                                    'default' => 'fade',
                                    'options' => [
                                        'fade' => 'Fade',
                                        'scale-up' => 'Scale Up',
                                        'scale-down' => 'Scale Down',
                                        'slide-top-small' => 'Slide Top Small',
                                        'slide-bottom-small' => 'Slide Bottom Small',
                                        'slide-left-small' => 'Slide Left Small',
                                        'slide-right-small' => 'Slide Right Small',
                                        'slide-top-medium' => 'Slide Top Medium',
                                        'slide-bottom-medium' => 'Slide Bottom Medium',
                                        'slide-left-medium' => 'Slide Left Medium',
                                        'slide-right-medium' => 'Slide Right Medium',
                                        'slide-top' => 'Slide Top 100%',
                                        'slide-bottom' => 'Slide Bottom 100%',
                                        'slide-left' => 'Slide Left 100%',
                                        'slide-right' => 'Slide Right 100%'
                                    ]
                                ]
                            ]
                        ],
                        '_tab_style' => [
                            'label' => 'Style',
                            'overridable' => false,
                            'fields' => [
                                'image_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Image Style'
                                ],
                                'image_transition' => [
                                    'type' => 'select.select',
                                    'label' => 'Image Transition',
                                    'description' => 'Select a hover transition for the overlay.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None (Fade if hover image)',
                                        'scale-up' => 'Scale Up',
                                        'scale-down' => 'Scale Down'
                                    ]
                                ],
                                'box_shadow' => [
                                    'type' => 'select.select',
                                    'label' => 'Box Shadow',
                                    'description' => 'Select the image\'s box shadow size.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large'
                                    ]
                                ],
                                'box_shadow_hover' => [
                                    'type' => 'select.select',
                                    'label' => 'Hover Box Shadow',
                                    'description' => 'Select the image\'s box shadow size on hover.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large'
                                    ]
                                ],
                                'image_note' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Setting just one value preserves the original proportions. The image will be resized automatically.'
                                ],
                                'image_width' => [
                                    'type' => 'input.number',
                                    'label' => 'Width',
                                    'description' => 'Enter the image\'s width',
                                    'min' => 0,
                                    'placeholder' => 'auto'
                                ],
                                'image_height' => [
                                    'type' => 'input.number',
                                    'label' => 'Height',
                                    'description' => 'Enter the image\'s height',
                                    'min' => 0,
                                    'placeholder' => 'auto'
                                ],
                                'title_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Title Style'
                                ],
                                'title_transition' => [
                                    'type' => 'select.select',
                                    'label' => 'Transition',
                                    'description' => 'Select a hover transition for the title.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'fade' => 'Fade',
                                        'scale-up' => 'Scale Up',
                                        'scale-down' => 'Scale Down',
                                        'slide-top-small' => 'Slide Top Small',
                                        'slide-bottom-small' => 'Slide Bottom Small',
                                        'slide-left-small' => 'Slide Left Small',
                                        'slide-right-small' => 'Slide Right Small',
                                        'slide-top-medium' => 'Slide Top Medium',
                                        'slide-bottom-medium' => 'Slide Bottom Medium',
                                        'slide-left-medium' => 'Slide Left Medium',
                                        'slide-right-medium' => 'Slide Right Medium',
                                        'slide-top' => 'Slide Top 100%',
                                        'slide-bottom' => 'Slide Bottom 100%',
                                        'slide-left' => 'Slide Left 100%',
                                        'slide-right' => 'Slide Right 100%'
                                    ]
                                ],
                                'title_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Style',
                                    'description' => 'Heading styles differ in font-size but may also come with a predefined color, size and font.',
                                    'default' => 'h3',
                                    'options' => [
                                        'default' => 'Default',
                                        'heading-small' => 'Small',
                                        'heading-medium' => 'Medium',
                                        'heading-large' => 'Large',
                                        'heading-xlarge' => 'XLarge',
                                        'heading-2xlarge' => '2XLarge',
                                        'h1' => 'H1',
                                        'h2' => 'H2',
                                        'h3' => 'H3',
                                        'h4' => 'H4',
                                        'h5' => 'H5',
                                        'h6' => 'H6'
                                    ]
                                ],
                                'title_decoration' => [
                                    'type' => 'select.select',
                                    'label' => 'Decoration',
                                    'description' => 'Decorate the headline with a divider, bullet or a line that is vertically centered to the heading.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'divider' => 'Divider',
                                        'bullet' => 'Bullet',
                                        'line' => 'Line'
                                    ]
                                ],
                                'predefined_title_color' => [
                                    'type' => 'select.select',
                                    'label' => 'Predefined Color',
                                    'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'muted' => 'Muted',
                                        'emphasis' => 'Emphasis',
                                        'primary' => 'Primary',
                                        'secondary' => 'Secondary',
                                        'success' => 'Success',
                                        'warning' => 'Warning',
                                        'danger' => 'Danger',
                                        'background' => 'Background'
                                    ]
                                ],
                                'title_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Custom Color',
                                    'description' => 'Customize the title color instead using predefined title color mode.'
                                ],
                                'title_fontsize' => [
                                    'type' => 'input.number',
                                    'label' => 'Font Size',
                                    'min' => 0,
                                    'description' => 'Customize the title text font size'
                                ],
                                'title_text_transform' => [
                                    'type' => 'select.select',
                                    'label' => 'Transform',
                                    'description' => 'The following options will transform text into uppercased, capitalized or lowercased characters.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Inherit',
                                        'uppercase' => 'Uppercase',
                                        'capitalize' => 'Capitalize',
                                        'lowercase' => 'Lowercase'
                                    ]
                                ],
                                'title_element' => [
                                    'type' => 'select.select',
                                    'label' => 'HTML Element',
                                    'description' => 'Choose one of the elements to fit your semantic structure.',
                                    'default' => 'h3',
                                    'options' => [
                                        'h1' => 'H1',
                                        'h2' => 'H2',
                                        'h3' => 'H3',
                                        'h4' => 'H4',
                                        'h5' => 'H5',
                                        'h6' => 'H6',
                                        'div' => 'div'
                                    ]
                                ],
                                'title_margin' => [
                                    'type' => 'select.select',
                                    'label' => 'Margin Top',
                                    'description' => 'Set the top margin.',
                                    'default' => 'default',
                                    'options' => [
                                        'small' => 'Small',
                                        'default' => 'Default',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        'remove' => 'None'
                                    ]
                                ],
                                'meta_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Meta Style'
                                ],
                                'meta_transition' => [
                                    'type' => 'select.select',
                                    'label' => 'Transition',
                                    'description' => 'Select a hover transition for the meta.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'fade' => 'Fade',
                                        'scale-up' => 'Scale Up',
                                        'scale-down' => 'Scale Down',
                                        'slide-top-small' => 'Slide Top Small',
                                        'slide-bottom-small' => 'Slide Bottom Small',
                                        'slide-left-small' => 'Slide Left Small',
                                        'slide-right-small' => 'Slide Right Small',
                                        'slide-top-medium' => 'Slide Top Medium',
                                        'slide-bottom-medium' => 'Slide Bottom Medium',
                                        'slide-left-medium' => 'Slide Left Medium',
                                        'slide-right-medium' => 'Slide Right Medium',
                                        'slide-top' => 'Slide Top 100%',
                                        'slide-bottom' => 'Slide Bottom 100%',
                                        'slide-left' => 'Slide Left 100%',
                                        'slide-right' => 'Slide Right 100%'
                                    ]
                                ],
                                'meta_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Style',
                                    'description' => 'Select a predefined meta text style, including color, size and font-family.',
                                    'default' => 'text-meta',
                                    'options' => [
                                        'default' => 'Default',
                                        'text-meta' => 'Meta',
                                        'heading-2xlarge' => '2XLarge',
                                        'heading-xlarge' => 'XLarge',
                                        'heading-large' => 'Large',
                                        'heading-medium' => 'Medium',
                                        'heading-small' => 'Small',
                                        'h1' => 'H1',
                                        'h2' => 'H2',
                                        'h3' => 'H3',
                                        'h4' => 'H4',
                                        'h5' => 'H5',
                                        'h6' => 'H6'
                                    ]
                                ],
                                'pre_meta_color' => [
                                    'type' => 'select.select',
                                    'label' => 'Predefined Color',
                                    'description' => 'Select the predefined meta color.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'muted' => 'Muted',
                                        'emphasis' => 'Emphasis',
                                        'primary' => 'Primary',
                                        'secondary' => 'Secondary',
                                        'success' => 'Success',
                                        'warning' => 'Warning',
                                        'danger' => 'Danger'
                                    ]
                                ],
                                'meta_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Custom Color',
                                    'description' => 'Customize the meta color. You need to set the Predefined Color to Default before using the color customization.'
                                ],
                                'meta_fontsize' => [
                                    'type' => 'input.number',
                                    'label' => 'Font Size',
                                    'min' => 0,
                                    'description' => 'Customize the meta text font size'
                                ],
                                'meta_text_transform' => [
                                    'type' => 'select.select',
                                    'label' => 'Transform',
                                    'description' => 'The following options will transform text into uppercased, capitalized or lowercased characters.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Inherit',
                                        'uppercase' => 'Uppercase',
                                        'capitalize' => 'Capitalize',
                                        'lowercase' => 'Lowercase'
                                    ]
                                ],
                                'meta_alignment' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment',
                                    'description' => 'Align the meta text above/below the title or below the content.',
                                    'default' => 'bottom',
                                    'options' => [
                                        'top' => 'Above Title',
                                        'bottom' => 'Below Title',
                                        'content' => 'Below Content'
                                    ]
                                ],
                                'meta_margin' => [
                                    'type' => 'select.select',
                                    'label' => 'Margin Top',
                                    'description' => 'Set the top margin.',
                                    'default' => 'default',
                                    'options' => [
                                        'small' => 'Small',
                                        'default' => 'Default',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        'remove' => 'None'
                                    ]
                                ],
                                'content_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Content Style'
                                ],
                                'content_transition' => [
                                    'type' => 'select.select',
                                    'label' => 'Transition',
                                    'description' => 'Select a hover transition for the content.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'fade' => 'Fade',
                                        'scale-up' => 'Scale Up',
                                        'scale-down' => 'Scale Down',
                                        'slide-top-small' => 'Slide Top Small',
                                        'slide-bottom-small' => 'Slide Bottom Small',
                                        'slide-left-small' => 'Slide Left Small',
                                        'slide-right-small' => 'Slide Right Small',
                                        'slide-top-medium' => 'Slide Top Medium',
                                        'slide-bottom-medium' => 'Slide Bottom Medium',
                                        'slide-left-medium' => 'Slide Left Medium',
                                        'slide-right-medium' => 'Slide Right Medium',
                                        'slide-top' => 'Slide Top 100%',
                                        'slide-bottom' => 'Slide Bottom 100%',
                                        'slide-left' => 'Slide Left 100%',
                                        'slide-right' => 'Slide Right 100%'
                                    ]
                                ],
                                'content_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Style',
                                    'description' => 'Select a predefined content style.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'lead' => 'Lead'
                                    ]
                                ],
                                'content_text_color' => [
                                    'type' => 'select.select',
                                    'label' => 'Predefined Color',
                                    'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'muted' => 'Muted',
                                        'emphasis' => 'Emphasis',
                                        'primary' => 'Primary',
                                        'secondary' => 'Secondary',
                                        'success' => 'Success',
                                        'warning' => 'Warning',
                                        'danger' => 'Danger'
                                    ]
                                ],
                                'customize_content_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Customize Color',
                                    'description' => 'Customize the content color instead using predefined text color. You need to set the Predefined Color to Default before using the color customization.'
                                ],
                                'customize_content_fontsize' => [
                                    'type' => 'input.number',
                                    'label' => 'Font Size',
                                    'min' => 0,
                                    'description' => 'Customize the content text font size'
                                ],
                                'content_text_transform' => [
                                    'type' => 'select.select',
                                    'label' => 'Transform',
                                    'description' => 'The following options will transform text into uppercased, capitalized or lowercased characters.',
                                    'default' => '',
                                    'options' => [
                                        '' => 'Inherit',
                                        'uppercase' => 'Uppercase',
                                        'capitalize' => 'Capitalize',
                                        'lowercase' => 'Lowercase'
                                    ]
                                ],
                                'content_margin_top' => [
                                    'type' => 'select.select',
                                    'label' => 'Margin Top',
                                    'description' => 'Set the top margin.',
                                    'default' => 'default',
                                    'options' => [
                                        'small' => 'Small',
                                        'default' => 'Default',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        'remove' => 'None'
                                    ]
                                ],
                                'link_settings' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Link Style'
                                ],
                                'link_transition' => [
                                    'type' => 'select.select',
                                    'label' => 'Transition',
                                    'description' => 'Select a hover transition for the the button.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'fade' => 'Fade',
                                        'scale-up' => 'Scale Up',
                                        'scale-down' => 'Scale Down',
                                        'slide-top-small' => 'Slide Top Small',
                                        'slide-bottom-small' => 'Slide Bottom Small',
                                        'slide-left-small' => 'Slide Left Small',
                                        'slide-right-small' => 'Slide Right Small',
                                        'slide-top-medium' => 'Slide Top Medium',
                                        'slide-bottom-medium' => 'Slide Bottom Medium',
                                        'slide-left-medium' => 'Slide Left Medium',
                                        'slide-right-medium' => 'Slide Right Medium',
                                        'slide-top' => 'Slide Top 100%',
                                        'slide-bottom' => 'Slide Bottom 100%',
                                        'slide-left' => 'Slide Left 100%',
                                        'slide-right' => 'Slide Right 100%'
                                    ]
                                ],
                                'link_type' => [
                                    'type' => 'select.select',
                                    'label' => 'Type',
                                    'description' => 'Show the link as a button or choose between linking just the image and title or the whole particle.<br/>Style/Button Size and Margin top no longer working if you set link type to Particle',
                                    'default' => 'button',
                                    'options' => [
                                        'button' => 'Button',
                                        'content' => 'Title',
                                        'element' => 'Particle'
                                    ]
                                ],
                                'buttontarget' => [
                                    'type' => 'select.selectize',
                                    'label' => 'Target',
                                    'description' => 'Open the link in a same or new window.',
                                    'placeholder' => 'Select...',
                                    'default' => '_self',
                                    'options' => [
                                        '_self' => 'Self',
                                        '_blank' => 'New Window'
                                    ]
                                ],
                                'buttonclass' => [
                                    'type' => 'select.select',
                                    'label' => 'Style',
                                    'description' => 'Set the button style.',
                                    'default' => 'default',
                                    'options' => [
                                        'link' => 'Link',
                                        'link-muted' => 'Link Muted',
                                        'link-text' => 'Link Text',
                                        'default' => 'Button Default',
                                        'primary' => 'Button Primary',
                                        'secondary' => 'Button Secondary',
                                        'danger' => 'Button Danger',
                                        'text' => 'Button Text'
                                    ]
                                ],
                                'link_button_size' => [
                                    'type' => 'select.select',
                                    'label' => 'Button Size',
                                    'description' => 'Set the button size. Button size not working with Link button style like Link, Link Muted, Link Text and Button text.',
                                    'default' => 'default',
                                    'options' => [
                                        'small' => 'Small',
                                        'default' => 'Default',
                                        'large' => 'Large'
                                    ]
                                ],
                                'link_margin_top' => [
                                    'type' => 'select.select',
                                    'label' => 'Margin Top',
                                    'description' => 'Set the top margin.',
                                    'default' => 'default',
                                    'options' => [
                                        'small' => 'Small',
                                        'default' => 'Default',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        'remove' => 'None'
                                    ]
                                ]
                            ]
                        ],
                        '_tab_general' => [
                            'label' => 'General',
                            'overridable' => false,
                            'fields' => [
                                'particle_title_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Particle Title Style'
                                ],
                                'particle_title' => [
                                    'type' => 'input.text',
                                    'label' => 'Title',
                                    'description' => 'Add an optional particle title.',
                                    'placeholder' => 'Enter particle title'
                                ],
                                'particle_title_style' => [
                                    'type' => 'select.select',
                                    'label' => 'Style',
                                    'description' => 'Heading styles differ in font-size but may also come with a predefined color, size and font.',
                                    'default' => 'h3',
                                    'options' => [
                                        'default' => 'Default',
                                        'heading-small' => 'Small',
                                        'heading-medium' => 'Medium',
                                        'heading-large' => 'Large',
                                        'heading-xlarge' => 'XLarge',
                                        'heading-2xlarge' => '2XLarge',
                                        'h1' => 'H1',
                                        'h2' => 'H2',
                                        'h3' => 'H3',
                                        'h4' => 'H4',
                                        'h5' => 'H5',
                                        'h6' => 'H6'
                                    ]
                                ],
                                'particle_title_decoration' => [
                                    'type' => 'select.select',
                                    'label' => 'Decoration',
                                    'description' => 'Decorate the headline with a divider, bullet or a line that is vertically centered to the heading.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'divider' => 'Divider',
                                        'bullet' => 'Bullet',
                                        'line' => 'Line'
                                    ]
                                ],
                                'particle_title_align' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment',
                                    'description' => 'Center, left and right alignment for Particle title.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Inherit',
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right',
                                        'justify' => 'Justify'
                                    ]
                                ],
                                'particle_predefined_color' => [
                                    'type' => 'select.select',
                                    'label' => 'Predefined Color',
                                    'description' => 'Select the text color. If the Background option is selected, styles that don\'t apply a background image use the primary color instead.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'muted' => 'Muted',
                                        'emphasis' => 'Emphasis',
                                        'primary' => 'Primary',
                                        'secondary' => 'Secondary',
                                        'success' => 'Success',
                                        'warning' => 'Warning',
                                        'danger' => 'Danger'
                                    ]
                                ],
                                'particle_title_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Custom Color',
                                    'description' => 'Customize the title color instead using predefined color mode. Set the Predefined color to default before using this color customization mode.'
                                ],
                                'particle_title_fontsize' => [
                                    'type' => 'input.number',
                                    'label' => 'Font Size',
                                    'description' => 'Customize the particle title font size.',
                                    'min' => 0
                                ],
                                'particle_title_element' => [
                                    'type' => 'select.select',
                                    'label' => 'HTML Element',
                                    'description' => 'Choose one of the elements to fit your semantic structure.',
                                    'default' => 'h3',
                                    'options' => [
                                        'h1' => 'H1',
                                        'h2' => 'H2',
                                        'h3' => 'H3',
                                        'h4' => 'H4',
                                        'h5' => 'H5',
                                        'h6' => 'H6',
                                        'div' => 'div'
                                    ]
                                ],
                                'general_content_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'General Particle Settings'
                                ],
                                'align' => [
                                    'type' => 'select.select',
                                    'label' => 'Text Alignment',
                                    'description' => 'Center, left and right alignment may depend on a breakpoint and require a fallback.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Inherit',
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right',
                                        'justify' => 'Justify'
                                    ]
                                ],
                                'breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment Breakpoint',
                                    'description' => 'Define the device width from which the alignment will apply.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'fallback' => [
                                    'type' => 'select.select',
                                    'label' => 'Alignment Fallback',
                                    'description' => 'Define an alignment fallback for device widths below the breakpoint.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Inherit',
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right',
                                        'justify' => 'Justify'
                                    ]
                                ],
                                'g_maxwidth' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width',
                                    'description' => 'Set the maximum content width.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'small' => 'Small',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        'xxlarge' => 'XX-Large'
                                    ]
                                ],
                                'g_maxwidth_alignment' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width Alignment',
                                    'description' => 'Define the alignment in case the container exceeds the element\'s max-width.',
                                    'default' => 'left',
                                    'options' => [
                                        'left' => 'Left',
                                        'center' => 'Center',
                                        'right' => 'Right'
                                    ]
                                ],
                                'g_maxwidth_breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Max Width Breakpoint',
                                    'description' => 'Define the device width from which the element\'s max-width will apply.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'margin' => [
                                    'type' => 'select.select',
                                    'label' => 'Margin',
                                    'description' => 'Set the vertical margin.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Keep existing',
                                        'small' => 'Small',
                                        'default' => 'Default',
                                        'medium' => 'Medium',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large',
                                        'remove-vertical' => 'None'
                                    ]
                                ],
                                'visibility' => [
                                    'type' => 'select.select',
                                    'label' => 'Visibility',
                                    'description' => 'Display the element only on this device width and larger.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'general_animation_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'Particle Animation Settings'
                                ],
                                'animation' => [
                                    'type' => 'select.select',
                                    'label' => 'Animation',
                                    'description' => 'Apply an animation to particles once they enter the viewport. This will animate all particles inside the section.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'None',
                                        'fade' => 'Fade',
                                        'scale-up' => 'Scale Up',
                                        'scale-down' => 'Scale Down',
                                        'slide-top-small' => 'Slide Top Small',
                                        'slide-bottom-small' => 'Slide Bottom Small',
                                        'slide-left-small' => 'Slide Left Small',
                                        'slide-right-small' => 'Slide Right Small',
                                        'slide-top-medium' => 'Slide Top Medium',
                                        'slide-bottom-medium' => 'Slide Bottom Medium',
                                        'slide-left-medium' => 'Slide Left Medium',
                                        'slide-right-medium' => 'Slide Right Medium',
                                        'slide-top' => 'Slide Top 100%',
                                        'slide-bottom' => 'Slide Bottom 100%',
                                        'slide-left' => 'Slide Left 100%',
                                        'slide-right' => 'Slide Right 100%',
                                        'parallax' => 'Parallax'
                                    ]
                                ],
                                'animation_delay' => [
                                    'type' => 'input.number',
                                    'label' => 'Animation Delay',
                                    'description' => 'Set the delay animations for particle. Delay time in ms.',
                                    'min' => 0,
                                    'placeholder' => 200
                                ],
                                'animation_repeat' => [
                                    'type' => 'select.select',
                                    'label' => 'Animation Repeat',
                                    'description' => 'Repeat an animation to particle once it enter the viewport.',
                                    'default' => 'disabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ]
                            ]
                        ],
                        '_tab_parallax_animation' => [
                            'label' => 'Parallax',
                            'overridable' => false,
                            'fields' => [
                                'parallax_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'To use parallax animation, you need to select the parallax animation type in General tab (Animation field). Hovering the name of a setting will show a tooltip with a brief explanation on the left side.'
                                ],
                                'pa_horizontal_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Horizontal Start',
                                    'description' => 'Animate the horizontal position (translateX) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'placeholder' => 0
                                ],
                                'pa_horizontal_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Horizontal End',
                                    'description' => 'Animate the horizontal position (translateX) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'placeholder' => 0
                                ],
                                'pa_vertical_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Vertical Start',
                                    'description' => 'Animate the vertical position (translateY) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'placeholder' => 0
                                ],
                                'pa_vertical_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Vertical End',
                                    'description' => 'Animate the vertical position (translateY) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'placeholder' => 0
                                ],
                                'scale_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Scale Start',
                                    'description' => 'Animate the scaling. 100 means 100% scale, 200 means 200% scale, and 50 means 50% scale. Min 50 and Max 200',
                                    'min' => 50,
                                    'max' => 200,
                                    'placeholder' => 100
                                ],
                                'scale_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Scale End',
                                    'description' => 'Animate the scaling. 100 means 100% scale, 200 means 200% scale, and 50 means 50% scale. Min 50 and Max 200',
                                    'min' => 50,
                                    'max' => 200,
                                    'placeholder' => 100
                                ],
                                'rotate_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Rotate Start',
                                    'description' => 'Animate the rotation clockwise in degrees. Min 0 and Max 360',
                                    'min' => 0,
                                    'max' => 360,
                                    'placeholder' => 0
                                ],
                                'rotate_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Rotate End',
                                    'description' => 'Animate the rotation clockwise in degrees. Min 0 and Max 360',
                                    'min' => 0,
                                    'max' => 360,
                                    'placeholder' => 0
                                ],
                                'opacity_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Opacity Start',
                                    'description' => 'Animate the opacity. 100 means 100% opacity, 0 means 0% opacity and 50 means 50%. Min 0 and Max 100',
                                    'min' => 0,
                                    'max' => 100,
                                    'placeholder' => 100
                                ],
                                'opacity_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Opacity End',
                                    'description' => 'Animate the opacity. 100 means 100% opacity, 0 means 0% opacity and 50 means 50%. Min 0 and Max 100',
                                    'min' => 0,
                                    'max' => 100,
                                    'placeholder' => 100
                                ],
                                'easing' => [
                                    'type' => 'input.number',
                                    'label' => 'Easing',
                                    'description' => 'Determine how the speed of the animation behaves over time. A value below 100 is faster in the beginning and slower towards the end while a value above 100 behaves inversely. Min 10 and Max 200',
                                    'min' => 10,
                                    'max' => 200,
                                    'placeholder' => 10
                                ],
                                'pa_viewport' => [
                                    'type' => 'input.number',
                                    'label' => 'Viewport',
                                    'description' => 'Set the animation end point relative to viewport height, e.g. 50 for 50% of the viewport. Min 10 and Max 100',
                                    'min' => 10,
                                    'max' => 100,
                                    'placeholder' => 50
                                ],
                                'pa_breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Breakpoint',
                                    'description' => 'Display the parallax effect only on this device width and larger.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ]
                            ]
                        ],
                        '_tab_parallax' => [
                            'label' => 'Parallax Background',
                            'overridable' => false,
                            'fields' => [
                                'parallax_bg_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => 'The Parallax Background settings allow you to animate a background image depending on the scroll position of the document.'
                                ],
                                'parallax_image' => [
                                    'type' => 'input.imagepicker',
                                    'label' => 'Background Image',
                                    'description' => 'Select parallax background image for particle.',
                                    'placeholder' => 'Pick an image'
                                ],
                                'background_image_size' => [
                                    'type' => 'select.select',
                                    'label' => 'Image Size',
                                    'description' => 'Determine whether the image will fit the section dimensions by clipping it or by filling the empty areas with the background color.',
                                    'default' => 'auto',
                                    'options' => [
                                        'auto' => 'Auto',
                                        'cover' => 'Cover',
                                        'contain' => 'Contain'
                                    ]
                                ],
                                'background_image_position' => [
                                    'type' => 'select.select',
                                    'label' => 'Image Position',
                                    'description' => 'Set the initial background position, relative to the section layer.',
                                    'default' => 'center-center',
                                    'options' => [
                                        'top-left' => 'Top Left',
                                        'top-center' => 'Top Center',
                                        'top-right' => 'Top Right',
                                        'center-left' => 'Center Left',
                                        'center-center' => 'Center Center',
                                        'center-right' => 'Center Right',
                                        'bottom-left' => 'Bottom Left',
                                        'bottom-center' => 'Bottom Center',
                                        'bottom-right' => 'Bottom Right'
                                    ]
                                ],
                                'parallax_bg_breakpoint' => [
                                    'type' => 'select.select',
                                    'label' => 'Parallax Breakpoint',
                                    'description' => 'Display the parallax effect only on this device width and larger.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'parallax_bg_visibility' => [
                                    'type' => 'select.select',
                                    'label' => 'Image Visibility',
                                    'description' => 'Display the image only on this device width and larger.',
                                    'default' => 'always',
                                    'options' => [
                                        'always' => 'Always',
                                        's' => 'Small (Phone Landscape)',
                                        'm' => 'Medium (Tablet Landscape)',
                                        'l' => 'Large (Desktop)',
                                        'xl' => 'X-Large (Large Screens)'
                                    ]
                                ],
                                'parallax_bg_color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background Color',
                                    'description' => 'Use the background color in combination with blend modes, a transparent image or to fill the area, if the image doesn\'t cover the whole section.'
                                ],
                                'blendmode' => [
                                    'type' => 'select.select',
                                    'label' => 'Blend Mode',
                                    'description' => 'Determine how the image will blend with the background color.',
                                    'default' => 'inherit',
                                    'options' => [
                                        'inherit' => 'Normal',
                                        'multiply' => 'Multiply',
                                        'screen' => 'Screen',
                                        'overlay' => 'Overlay',
                                        'darken' => 'Darken',
                                        'lighten' => 'Lighten',
                                        'color-dodge' => 'Color-dodge',
                                        'color-burn' => 'Color-burn',
                                        'hard-light' => 'Hard-light',
                                        'soft-light' => 'Soft-light',
                                        'difference' => 'Difference',
                                        'exclusion' => 'Exclusion',
                                        'hue' => 'Hue',
                                        'saturation' => 'Saturation',
                                        'color' => 'Color',
                                        'luminosity' => 'Luminosity'
                                    ]
                                ],
                                'parallax_bg_overlay' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Overlay Color',
                                    'description' => 'Set an additional transparent overlay to soften the image.'
                                ],
                                'horizontal_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Horizontal Start',
                                    'description' => 'Animate the horizontal position (translateX) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'default' => 0
                                ],
                                'horizontal_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Horizontal End',
                                    'description' => 'Animate the horizontal position (translateX) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'default' => 0
                                ],
                                'vertical_start' => [
                                    'type' => 'input.number',
                                    'label' => 'Vertical Start',
                                    'description' => 'Animate the vertical position (translateY) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'default' => 0
                                ],
                                'vertical_end' => [
                                    'type' => 'input.number',
                                    'label' => 'Vertical End',
                                    'description' => 'Animate the vertical position (translateY) in pixels. Min -600 and Max 600.',
                                    'min' => -600,
                                    'max' => 600,
                                    'default' => 0
                                ],
                                'container' => [
                                    'type' => 'input.checkbox',
                                    'label' => 'Add Container',
                                    'description' => 'If you set the Fullwidth (Flushed Content) for parent section, you can use this option to define the container width for the particles inside this section.',
                                    'overridable' => false,
                                    'default' => false
                                ],
                                'viewport_height' => [
                                    'type' => 'select.select',
                                    'label' => 'Height',
                                    'description' => 'Enabling viewport height on a section that directly follows the header will subtract the header\'s height from it. On short pages, a section can be expanded to fill the browser window.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'None',
                                        'full' => 'Viewport',
                                        'percent' => 'Viewport (Minus 20%)',
                                        'section' => 'Viewport (Minus 50%)',
                                        'expand' => 'Expand'
                                    ]
                                ],
                                'padding' => [
                                    'type' => 'select.select',
                                    'label' => 'Padding',
                                    'description' => 'Set the vertical padding of the particle inside section. The padding is not needed if you set Height to Viewport mode.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'xsmall' => 'X-Small',
                                        'small' => 'Small',
                                        'large' => 'Large',
                                        'xlarge' => 'X-Large'
                                    ]
                                ],
                                'vertical_alignment' => [
                                    'type' => 'select.select',
                                    'label' => 'Vertical Alignment',
                                    'description' => 'Align the section content vertically, if the section height is larger than the content itself.',
                                    'default' => 'none',
                                    'options' => [
                                        'none' => 'Top',
                                        'middle' => 'Middle',
                                        'bottom' => 'Bottom'
                                    ]
                                ],
                                'parallax_text_color' => [
                                    'type' => 'select.select',
                                    'label' => 'Inverse Color',
                                    'description' => 'Set light or dark color mode for text, buttons and controls.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'light' => 'Light',
                                        'dark' => 'Dark'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'outside' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'JL Overlay <strong>Version: 2.0.8</strong> Copyright (C) <a href="https://joomlead.com/" target="_blank">JoomLead</a>.'
                ]
            ]
        ]
    ]
];
