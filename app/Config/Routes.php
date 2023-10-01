<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/details/(:any)', 'Home::details/$1');
$routes->get('/admin', 'Home::admin');
$routes->get('/admin/(:any)', 'Home::admin/$1');
$routes->post('/save', 'Home::save');
$routes->get('/delete/(:any)', 'Home::delete/$1');
$routes->get('/edit/(:any)', 'Home::edit/$1');


$routes->get('/register', 'UserController::register');
$routes->get('/login', 'UserController::login');

