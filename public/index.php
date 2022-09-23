<?php

use Router\Router;

require('../vendor/autoload.php');

session_start();
//$_SESSION['name'] = "Clement";


$router = new Router($_GET['url']);

$router->get('/', 'App\Controller\IndexController@index');
$router->get('/articles', 'App\Controller\listArticlesController@index');
$router->get('/article/:id', 'App\Controller\oneArticleController@index');
$router->post('/article/:id', 'App\Controller\oneArticleController@createComment');
$router->get('/bdd', 'App\Controller\BddController@index');

$router->get('/login', 'App\Controller\LoginController@index');
$router->post('/login', 'App\Controller\LoginController@index');
$router->get('/register', 'App\Controller\RegisterController@index');
$router->post('/register', 'App\Controller\RegisterController@index');


$router->get('/admin', 'App\Controller\AdminController@adminIndex');
$router->get('/admin/articles', 'App\Controller\AdminController@adminArticles');
$router->get('/admin/articles/create', 'App\Controller\AdminController@adminArticleCreate');
$router->get('/admin/articles/createValidation', 'App\Controller\AdminController@adminArticleCreateResponse');
$router->get('/admin/article/:id', 'App\Controller\AdminController@adminArticleModify');
$router->get('/admin/articleModifyValidation', 'App\Controller\AdminController@adminArticleModifyResponse');
$router->get('/admin/article/delete/:id', 'App\Controller\AdminController@adminDeleteOneArticle');
$router->get('/admin/disconnect', 'App\Controller\AdminController@disconnectUSer');
$router->get('/admin/commentaires', 'App\Controller\AdminController@getCommentsNonApprouved');
/*$router->post('/admin/commentaires', 'App\Controller\AdminController@approuveComment');
$router->post('/admin/commentaires', 'App\Controller\AdminController@deleteComment');*/
$router->post('/admin/commentaires', 'App\Controller\AdminController@approuveOrDeleteComment');




$router->run();
