<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '205799708858-oaqo09jhcni907isl9kj5qvmcg0lel88.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
    'facebook' => [
        'client_id' => '573920084339353',
        'client_secret' => '01efa0e99eeed9850d1828ab27f534f2',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'github' => [
        'client_id' => 'fd6f05e354215d4bfb18',
        'client_secret' => 'd6022365ea231a9ab698c96a38ba33c64d9c85e0',
        'redirect' => 'http://localhost:8000/auth/github/callback',
    ],
];
