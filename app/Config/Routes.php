<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//app/Config/Routes.php
$routes->get('/', 'Home::index');
// CRUD Routes
$routes->get('users-list', 'Clientes::cliente');
$routes->get('user-form', 'Clientes::nuevo');
$routes->post('submit-form', 'Clientes::guardar');
$routes->get('edit-view/(:num)', 'Clientes::singleUser/$1');
$routes->post('update', 'Clientes::update');
$routes->get('delete/(:num)', 'Clientes::delete/$1');


