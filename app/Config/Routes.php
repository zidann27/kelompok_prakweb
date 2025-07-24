<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/crud', 'Crud::index');
$routes->get('/crud/tambah', 'Crud::tambah');
$routes->post('/crud/simpan', 'Crud::simpan');
$routes->get('/crud/edit/(:segment)', 'Crud::edit/$1');
$routes->post('/crud/update/(:segment)', 'Crud::update/$1');
$routes->get('/crud/delete/(:segment)', 'Crud::delete/$1');