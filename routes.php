<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->get('about/contact', 'controllers/contact.php');
$router->get('contact', 'controllers/contact.php');
$router->get('add', 'controllers/add.php');
$router->post('store', 'controllers/store.php');
