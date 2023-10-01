<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UserController::Login');
$routes->get('/index', 'Home::index');
$routes->get('/details/(:any)', 'Home::details/$1');
$routes->get('/admin', 'Home::admin');
$routes->get('/admin/(:any)', 'Home::admin/$1');
$routes->post('/save', 'Home::save');
$routes->get('/delete/(:any)', 'Home::delete/$1');
$routes->get('/edit/(:any)', 'Home::edit/$1');


$routes->get('/adminview', 'UserController::adminview');
$routes->get('/registerview', 'UserController::registerview');
$routes->post('/register', 'UserController::register');
$routes->get('/signin', 'UserController::Login');
$routes->post('/LoginAuth', 'UserController::LoginAuth');

