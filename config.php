<?php

return [
    'database' => [
        'name' => 'mytodo',
        'username' => null,
        'password' => null,
        'connection' => 'sqlite:',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
