<?php

$router->get('', 'TodosController@index');
$router->get('create', 'TodosController@create');
$router->post('todos', 'TodosController@store');
