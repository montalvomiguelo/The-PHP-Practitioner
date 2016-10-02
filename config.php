<?php

return [
    'database' => [
        'name' => 'db/mytodo.sqlite',
        'username' => null,
        'password' => null,
        'connection' => 'sqlite:',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
