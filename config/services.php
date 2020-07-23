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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    
    'facebook' => [ 
        'client_id' => '1639469416233954',
        'client_secret' => '399e2540a3802016424f6a93f149c71a',
        'redirect' => 'http://localhost/Task/newTask/public/callback-facebook',
    ],
    'google' => [ 
        'client_id' => '963794533444-c1ojo7sb9alsnfejaupkdmtnpttb35bh.apps.googleusercontent.com',
        'client_secret' => '21PB3Jn7llBHFIlpFh0flEOD',
        'redirect' => 'http://localhost/Task/newTask/public/callback-google',
    ],

];
