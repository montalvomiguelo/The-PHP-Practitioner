<?php

use Acme\App;

$todos = App::get('database')->fetchAll('todos');

include 'views/index.tpl.php';
