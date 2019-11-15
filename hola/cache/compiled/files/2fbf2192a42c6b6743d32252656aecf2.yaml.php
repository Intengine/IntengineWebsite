<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/hola/user/config/site.yaml',
    'modified' => 1573822305,
    'data' => [
        'title' => 'Intengine',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Intengine',
            'email' => 'sylwester.pilarz93@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'author'
        ],
        'metadata' => [
            'description' => 'Hola is a modern and stylish vCard website template. Designed to be a resume, vCard, portfolio template, it’s the perfect template for creative designers, developers, freelancers, photographer or any creative profession.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
