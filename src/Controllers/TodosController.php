<?php

namespace Acme\Controllers;

use Acme\App;

class TodosController {

    public function index()
    {
        $todos = App::get('database')->fetchAll('todos');

        include 'views/index.tpl.php';
    }

    public function store()
    {
        $description = (!empty($_POST['description'])) ? $_POST['description'] : '';

        if (empty($description))
        {
            header("Location: ./add");
            die();
        }

        App::get('database')->query('INSERT INTO todos (description, completed) VALUES (:description, 0)', compact('description'));
        header("Location: ./");
        die();
    }

    public function create()
    {
        include 'views/add.tpl.php';
    }

}
