<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pages::index');
$routes->get('/registrasi', 'Pages::index');
$routes->get('/masuk', 'Pages::masuk');
$routes->get('/dashboard', 'Pages::dashboard');
