<?php

$todos = $app['database']->fetchAll('todos');

include 'views/index.tpl.php';
