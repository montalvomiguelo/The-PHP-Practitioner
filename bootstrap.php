<?php

use Acme\QueryBuilder;
use Acme\Connection;

ini_set('display_errors', '1');
error_reporting(E_ALL);

require 'vendor/autoload.php';

$app = [];

$app['config'] = require 'config.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
