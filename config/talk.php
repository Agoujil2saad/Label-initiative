<?php

return [
    'user' => [
        'model' => 'App\User'
    ],
    'broadcast' => [
        'enable' => true,
        'app_name' => 'Label Initiative Chat System',
        'pusher' => [
            'app_id'        => '391345',
            'app_key'       => '0d9e7bb247cf6cfb5a90',
            'app_secret'    => '60f9a65138215c0c46b2',
            'options' => [
                 'cluster' => 'eu',
                 'encrypted' => true
            ]
        ]
    ]
];
