<?php

use App\Exceptions\NotFoundException;
use Router\Router;

require('../vendor/autoload.php');

session_start();

$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();

$router = new Router($_GET['url']);

/* URL FRONT */
$router->get('/', 'App\Controller\IndexController@index');
$router->get('/articles', 'App\Controller\listArticlesController@index');
$router->get('/article/:id', 'App\Controller\oneArticleController@index');
$router->post('/article/:id', 'App\Controller\oneArticleController@createComment');
$router->get('/contact', 'App\Controller\contactForm@index');
$router->post('/contact', 'App\Controller\contactForm@index');


/* URL OF LOGIN / REGISTER */
$router->get('/login', 'App\Controller\LoginController@index');
$router->post('/login', 'App\Controller\LoginController@index');
$router->get('/register', 'App\Controller\RegisterController@index');
$router->post('/register', 'App\Controller\RegisterController@index');

/* URL ADMIN */
$router->get('/admin', 'App\Controller\Admin\AdminController@adminIndex');

$router->get('/admin/articles', 'App\Controller\Admin\AdminController@adminArticles');

$router->get('/admin/articles/create', 'App\Controller\Admin\AdminCreateArticle@index');
$router->post('/admin/articles/create', 'App\Controller\Admin\AdminCreateArticle@index');

$router->get('/admin/article/:id', 'App\Controller\Admin\AdminArticleModify@index');
$router->post('/admin/article/:id', 'App\Controller\Admin\AdminArticleModify@index');

$router->get('/admin/article/delete/:id', 'App\Controller\Admin\AdminController@adminDeleteOneArticle');
$router->get('/admin/disconnect', 'App\Controller\Admin\AdminController@disconnectUser');
$router->get('/admin/commentaires', 'App\Controller\Admin\AdminController@getCommentsNonApprouved');
$router->post('/admin/commentaires/delete/:id', 'App\Controller\Admin\AdminDeleteComment@deleteComment');
$router->post('/admin/commentaires/approuve/:id', 'App\Controller\Admin\AdminApprouveComment@approuveComment');

$router->get('/admin/message', 'App\Controller\Admin\AdminContactMessage@index');



try {
    $router->run();
} catch (NotFoundException $e) {
    echo $e->error404();
}
