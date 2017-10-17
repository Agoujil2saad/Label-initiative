<?php

return [
    'user' => [
        'model' => 'App\User'
    ],
    'broadcast' => [
        'enable' => true,
        'app_name' => 'Label Initiative Chat System',
        'pusher' => [
            'app_id'        => env('PUSHER_APP_ID','391345'),
            'app_key'       => env('PUSHER_APP_KEY','0d9e7bb247cf6cfb5a90'),
            'app_secret'    => env('PUSHER_APP_SECRET','60f9a65138215c0c46b2'),
            'options' => [
                 'cluster' => 'eu',
                 'encrypted' => true
            ]
        ]
    ]
];
