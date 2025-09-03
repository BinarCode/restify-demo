<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie', 'mcp/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'https://laravel-restify.com',
        'https://api.laravel-restify.com',
        'http://localhost:3000',
        'http://localhost:8000',
    ],

    'allowed_origins_patterns' => [
        '#^https://.*\.laravel-restify\.com$#',
    ],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 86400,

    'supports_credentials' => true,

];
