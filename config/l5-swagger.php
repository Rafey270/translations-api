<?php

return [
    'default' => 'default',

    'documentations' => [
        'default' => [
            'api' => [
                'title' => 'L5 Swagger UI',
            ],

            'routes' => [
                'api' => 'api/documentation',
                'docs' => 'api/docs',
            ],

            'paths' => [
                'docs' => storage_path('api-docs'),
                'annotations' => [], // Disable annotation scanning
                'docs_json' => 'api-docs.json',
                'docs_yaml' => 'swagger.yaml',
                'format_to_use_for_docs' => 'yaml',
                'excludes' => [],
                'base' => env('L5_SWAGGER_BASE_PATH', '/api'),
            ],

            'proxy' => false,
        ],
    ],

    'defaults' => [
        'routes' => [
            'docs' => 'docs',
        ],
        'paths' => [
            'docs' => storage_path('api-docs'),
        ],
    ],
];
