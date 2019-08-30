<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://fullpage/fullpage.yaml',
    'modified' => 1567154923,
    'data' => [
        'enabled' => true,
        'order' => [
            'by' => 'folder',
            'dir' => 'asc'
        ],
        'theme_css' => true,
        'builtin_css' => true,
        'builtin_js' => true,
        'color_function' => '50',
        'header_font' => '\'Helvetica Neue\', Helvetica, Arial, sans-serif',
        'block_font' => 'Palatino, \'Palatino Linotype\', \'Palatino LT STD\', \'Book Antiqua\', Georgia, serif',
        'change_titles' => true,
        'inject_footer' => '',
        'shortcodes' => true,
        'transition' => true,
        'styles' => [
            0 => [
                'background' => '#0B110D'
            ],
            1 => [
                'background' => '#2C4D56'
            ],
            2 => [
                'background' => '#C3AA72'
            ],
            3 => [
                'background' => '#DC7612'
            ],
            4 => [
                'background' => '#BD3200'
            ]
        ],
        'options' => [
            'navigation' => false,
            'navigationPosition' => 'right',
            'showActiveTooltip' => false,
            'slidesNavigation' => false,
            'slidesNavPosition' => 'bottom',
            'css3' => true,
            'autoScrolling' => true,
            'fitToSection' => true,
            'scrollBar' => false,
            'loopTop' => false,
            'loopBottom' => false,
            'loopHorizontal' => true,
            'touchSensitivity' => 15,
            'keyboardScrolling' => true,
            'animateAnchor' => true,
            'recordHistory' => true,
            'controlArrows' => true,
            'verticalCentered' => true,
            'sectionSelector' => '.section',
            'slideSelector' => '.slide',
            'lazyLoading' => true
        ]
    ]
];
