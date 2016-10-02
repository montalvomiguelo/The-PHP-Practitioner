<?php

use Acme\QueryBuilder;
use Acme\Connection;
use Acme\App;

ini_set('display_errors', '1');
error_reporting(E_ALL);

require 'vendor/autoload.php';

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
