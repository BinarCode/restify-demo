<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Enable MCP Server
    |--------------------------------------------------------------------------
    |
    | Enable or disable the Laravel Restify MCP server. When disabled, the
    | server will not be registered and all MCP functionality will be inactive.
    |
    */
    'enabled' => env('RESTIFY_MCP_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | MCP Server Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for the Laravel Restify MCP server, following the pattern
    | established by Laravel Boost for consistent MCP server management.
    |
    */

    'mcp' => [
        /*
        |--------------------------------------------------------------------------
        | Tools Configuration
        |--------------------------------------------------------------------------
        |
        | Configure which MCP tools should be available in the server.
        | Tools provide functionality for searching docs, getting examples, etc.
        |
        */
        'tools' => [
            'exclude' => [
                // Add tool class names to exclude them from auto-discovery
                // 'BinarCode\LaravelRestifyMcp\Mcp\Tools\SearchRestifyDocs',
            ],
            'include' => [
                // Add additional tool class names to include beyond auto-discovery
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Resources Configuration
        |--------------------------------------------------------------------------
        |
        | Configure which MCP resources should be exposed by the server.
        | Resources provide static information like documentation content.
        |
        */
        'resources' => [
            'exclude' => [
                // Add resource class names to exclude them from auto-discovery
                // 'BinarCode\LaravelRestifyMcp\Mcp\Resources\RestifyDocumentation',
            ],
            'include' => [
                // Add additional resource class names to include beyond auto-discovery
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Prompts Configuration
        |--------------------------------------------------------------------------
        |
        | Configure which MCP prompts should be available in the server.
        | Prompts provide templated interactions for common use cases.
        |
        */
        'prompts' => [
            'exclude' => [
                // Add prompt class names to exclude them from auto-discovery
                // 'BinarCode\LaravelRestifyMcp\Mcp\Prompts\RestifyHowTo',
            ],
            'include' => [
                // Add additional prompt class names to include beyond auto-discovery
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Documentation Configuration
    |--------------------------------------------------------------------------
    |
    | Configure how the package accesses and processes Laravel Restify
    | documentation files.
    |
    */
    'docs' => [
        /*
        |--------------------------------------------------------------------------
        | Documentation Paths
        |--------------------------------------------------------------------------
        |
        | Paths to the Laravel Restify documentation. By default, looks in the
        | vendor directory, but can be overridden for local development.
        |
        */
        'paths' => [
            'primary' => env('RESTIFY_DOCS_PATH', base_path('vendor/binaryk/laravel-restify/docs-v2/content/en')),
            'fallback' => __DIR__.'/../src/Docs/en',
        ],

        /*
        |--------------------------------------------------------------------------
        | Documentation Versions
        |--------------------------------------------------------------------------
        |
        | Configure which documentation versions to expose and which is current.
        |
        */
        'versions' => [
            'current' => env('RESTIFY_CURRENT_VERSION', 'v2'),
            'supported' => ['v2', 'v1'],
        ],

        /*
        |--------------------------------------------------------------------------
        | Content Processing
        |--------------------------------------------------------------------------
        |
        | Configure how documentation content is processed and optimized.
        |
        */
        'processing' => [
            'max_content_length' => env('RESTIFY_MCP_MAX_CONTENT', 10000),
            'extract_code_blocks' => true,
            'extract_headings' => true,
            'summary_length' => 300,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Configuration
    |--------------------------------------------------------------------------
    |
    | Documentation parsing and indexing can be intensive. Configure caching
    | to improve performance.
    |
    */
    'cache' => [
        'enabled' => env('RESTIFY_MCP_CACHE_ENABLED', true),
        'store' => env('RESTIFY_MCP_CACHE_STORE', config('cache.default')),
        'ttl' => env('RESTIFY_MCP_CACHE_TTL', 3600), // 1 hour
        'key_prefix' => env('RESTIFY_MCP_CACHE_PREFIX', 'restify_mcp'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Search Configuration
    |--------------------------------------------------------------------------
    |
    | Configure the search functionality for documentation content.
    |
    */
    'search' => [
        'default_limit' => 10,
        'max_limit' => 50,
        'min_query_length' => 2,
        'boost_scores' => [
            'title' => 3.0,
            'heading' => 2.0,
            'content' => 1.0,
            'code_example' => 1.5,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Token Optimization
    |--------------------------------------------------------------------------
    |
    | Configuration for optimizing response sizes to work well with AI models
    | while maintaining comprehensive information.
    |
    */
    'optimization' => [
        'default_token_limit' => 10000,
        'max_token_limit' => 100000,
        'truncate_strategy' => 'smart', // 'smart', 'hard', 'none'
        'prioritize_code_examples' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Categories Configuration
    |--------------------------------------------------------------------------
    |
    | Define the categories of documentation that can be searched and filtered.
    | This helps organize the documentation for better AI interaction.
    |
    */
    'categories' => [
        'installation' => [
            'name' => 'Installation & Setup',
            'paths' => ['installation.md', 'quickstart.md'],
        ],
        'repositories' => [
            'name' => 'Repositories',
            'paths' => ['api/repositories.md', 'api/repository-pattern.md'],
        ],
        'fields' => [
            'name' => 'Fields',
            'paths' => ['api/fields.md', 'api/field-types.md'],
        ],
        'filters' => [
            'name' => 'Filters & Search',
            'paths' => ['search/*.md', 'filters/*.md'],
        ],
        'auth' => [
            'name' => 'Authentication',
            'paths' => ['auth/*.md'],
        ],
        'actions' => [
            'name' => 'Actions',
            'paths' => ['api/actions.md', 'actions/*.md'],
        ],
        'performance' => [
            'name' => 'Performance',
            'paths' => ['performance/*.md'],
        ],
        'testing' => [
            'name' => 'Testing',
            'paths' => ['testing/*.md'],
        ],
    ],
];
