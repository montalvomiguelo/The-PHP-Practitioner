<?php

ini_set('display_errors', '1');

error_reporting(E_ALL);

$app = [];

$app['config'] = require 'config.php';

spl_autoload_register(function ($class) {
    $sources = array(
        "src/{$class}.php",
        "controllers/{$class}.php",
    );

    foreach ($sources as $source) {
        if (file_exists($source)) {
            require $source;
        }
    }

});

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
