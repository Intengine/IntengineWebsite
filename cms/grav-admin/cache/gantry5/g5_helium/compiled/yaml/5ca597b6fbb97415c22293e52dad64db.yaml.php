<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-theme://config/default/page/head.yaml',
    'modified' => 1569347405,
    'data' => [
        'meta' => [
            
        ],
        'head_bottom' => '',
        'atoms' => [
            0 => [
                'id' => 'wow-js-3776',
                'type' => 'wow-js',
                'title' => 'WOW.js',
                'attributes' => [
                    'enabled' => '1',
                    'offset' => '200',
                    'mobile' => 'true'
                ]
            ],
            1 => [
                'id' => 'smoothscroll-5768',
                'type' => 'smoothscroll',
                'title' => 'Smooth Scrolling',
                'attributes' => [
                    'enabled' => '1',
                    'duration' => '900',
                    'easing' => 'swing'
                ]
            ],
            2 => [
                'id' => 'fixed-header-1886',
                'type' => 'fixed-header',
                'title' => 'Fixed Header',
                'attributes' => [
                    'enabled' => '1',
                    'cssselector' => '#g-navigation',
                    'mobile' => 'enable',
                    'secondtrigger' => '0',
                    'secondoffset' => ''
                ]
            ],
            3 => [
                'id' => 'assets-3348',
                'type' => 'assets',
                'title' => 'Custom CSS / JS',
                'attributes' => [
                    'enabled' => '1',
                    'css' => [
                        0 => [
                            'location' => '',
                            'inline' => '.navbar-fixed-top.scrolled {
  background-color: #fff !important;
  transition: background-color 200ms linear;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'MenuOnScroll'
                        ]
                    ],
                    'javascript' => [
                        0 => [
                            'location' => '',
                            'inline' => '$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass(\'scrolled\', $(this).scrollTop() > $nav.height());
  });
});',
                            'in_footer' => '0',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'MenuOnScroll'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
