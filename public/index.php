<?php

use Router\Router;

require('../vendor/autoload.php');

$router = new Router($_GET['url']);

$router->get('/', 'App\Controller\IndexController@index');
$router->get('/articles', 'App\Controller\BlogController@listeArticles');
$router->get('/article/:id', 'App\Controller\BlogController@show');

$router->run();