<?php

use Router\Router;

require('../vendor/autoload.php');



$router = new Router($_GET['url']);

$router->get('/', 'App\Controller\IndexController@index');
$router->get('/articles', 'App\Controller\BlogController@listeArticles');
$router->get('/article/:id', 'App\Controller\BlogController@show');

$router->get('/login', 'App\Controller\LoginController@index');


$router->get('/admin', 'App\Controller\AdminController@testAffichage');




$router->run();