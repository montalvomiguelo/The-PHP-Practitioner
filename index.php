<?php

use Acme\Router;
use Acme\Request;

require 'bootstrap.php';

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
