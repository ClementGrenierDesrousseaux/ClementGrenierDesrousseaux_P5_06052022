<?php

use Router\Router;

require('../vendor/autoload.php');

session_start();
$_SESSION['name'] = "Clement";


$router = new Router($_GET['url']);

$router->get('/', 'App\Controller\IndexController@index');
$router->get('/articles', 'App\Controller\listArticlesController@index');
$router->get('/article/:id', 'App\Controller\oneArticleController@index');

$router->get('/login', 'App\Controller\LoginController@index');


$router->get('/admin', 'App\Controller\AdminController@adminIndex');
$router->get('/admin/articles', 'App\Controller\AdminController@adminArticles');
$router->get('/admin/article/:id', 'App\Controller\AdminController@adminArticleModify');




$router->run();