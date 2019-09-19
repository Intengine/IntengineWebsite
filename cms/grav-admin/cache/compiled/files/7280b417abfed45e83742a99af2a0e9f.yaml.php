<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mac/Desktop/IntengineWebsite/cms/grav-admin/user/plugins/timeline/languages.yaml',
    'modified' => 1568900624,
    'data' => [
        'en' => [
            'PLUGIN_TIMELINE' => [
                'ADMIN' => [
                    'NAME' => 'Timeline',
                    'EVENTS' => 'Events',
                    'ITEM' => 'Item',
                    'HEADER' => 'Header',
                    'TITLE' => 'Title',
                    'SUBTITLE' => 'Subtitle',
                    'DATE' => 'Date',
                    'DATE_FORMAT' => 'Date format',
                    'LANGUAGE' => 'Default language',
                    'CONTENT' => 'Content',
                    'EVENT_OPTIONS' => 'Event Options',
                    'TYPE' => 'Type',
                    'PLACE' => 'Place',
                    'LOCALITY' => 'Locality',
                    'REGION' => 'Region',
                    'ADD_EVENT' => 'Add event',
                    'CACHE' => 'Cache state',
                    'CACHE_OPTIONS' => [
                        'PERSIST' => 'Persist',
                        'TRANSIENT' => 'Transient',
                        'NATIVE' => 'Native',
                        'DISABLED' => 'Disabled'
                    ],
                    'TRUNCATE' => 'Truncate words',
                    'LINKED_DATA' => 'Linked Data',
                    'HELP' => [
                        'CACHE' => 'Where to store plugin\'s internal data',
                        'HEADER' => 'Only title will appear as separator, leave empty for blank separator.',
                        'TYPE' => 'Type of event, following schema.org.',
                        'PLACE' => 'Fixed or physical location.',
                        'LOCALITY' => 'Position or site.',
                        'REGION' => 'Physical geography.',
                        'TRUNCATE' => 'Limits the amount of words in each note, to an integer or boolean state for default (100)',
                        'LINKED_DATA' => 'Enable or disable Linked Data output'
                    ],
                    'DESCRIPTION' => [
                        'CACHE' => 'Native for /user/plugins/timeline/data, Persist for /user/data/timeline, Transient for /cache/timeline, Disabled for no caching.',
                        'LINKED_DATA' => 'Enable or disable Linked Data output'
                    ]
                ]
            ]
        ]
    ]
];
