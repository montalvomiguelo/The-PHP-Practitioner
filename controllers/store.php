<?php

$description = (!empty($_POST['description'])) ? $_POST['description'] : '';

if (empty($description))
{
    header("Location: ./add");
    die();
}

$app['database']->query('INSERT INTO todos (description, completed) VALUES (:description, 0)', compact('description'));
header("Location: ./");
die();

