<?php

use Acme\Router;
use Acme\Request;

require 'bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
