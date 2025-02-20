<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


 $defaultController = 'Home';

$routes->get('/', 'Home::index');

//$routes->get('/create', 'Home::cristo');

/**  Rutas admin/usuarios  */
$routes->get('/usuarios', 'UsuarioController::index');
$routes->get('/usuarios/create', 'UsuarioController::create');
$routes->post('/usuarios/create', 'UsuarioController::store');
$routes->get('/usuarios/edit/(:num)', 'UsuarioController::edit/$1');
$routes->post('/usuarios/edit/(:num)', 'UsuarioController::update/$1');
$routes->post('/usuarios/destroy/(:num)', 'UsuarioController::destroy/$1');


/**API REST RUTAS */
$routes->get('/categorias', 'CategoriaController::index');
$routes->post('/categorias/store-process', 'CategoriaController::store');