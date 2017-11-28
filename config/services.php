<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

	

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
'twitter' => [
    'consumer_key'    => getenv('rTopsDfKPjVomwhGtLgCfMgEt'),
    'consumer_secret' => getenv('8gPKOW3n7yHq1tSVOypwEXx8XTIglEsqi85mam4edMBA10Ojwh'),
    'access_token'    => getenv('212658326-RF1wIGpbSRvXxKUCHaUq1Q0oufFm7xc0vf2PtmCq'),
    'access_secret'   => getenv('=Y9kZBAtP23peb6BYjBuq9zZ8u1n9zoLoGc3It9c2fv6F1')
],


];
