<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/index', 'Home::index');
$routes->get('/quienes_somos', 'Home::quienes_somos');
$routes->get('/acercade', 'Home::acercade');
$routes->get('/registro', 'Home::registro');
$routes->get('/login', 'Home::login');
$routes->get('/servicios', 'Home::servicios');