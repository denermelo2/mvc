<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/login', 'LoginController@signin'); //rota para login
$router->get('/cadastro', 'LoginController@signup'); //rota para cadastro
