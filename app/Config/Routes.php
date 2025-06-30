<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

// rutas para usuarios
$routes->group('usuario_controller', function($routes) {
    // registro
    $routes->get('create', 'usuario_controller::create');
    $routes->post('FormValidation', 'usuario_controller::FormValidation');
    
    // login
    $routes->get('login_form', 'usuario_controller::login_form');
    $routes->post('login', 'usuario_controller::login');
    
    // logout
    $routes->get('logout', 'usuario_controller::logout');
    
    // recuperar contraseña
    $routes->get('forgot_password', 'usuario_controller::forgot_password');
    $routes->post('send_password_reset', 'usuario_controller::send_password_reset');
});

$routes->get('/index', 'Home::index');
$routes->get('/quienes_somos', 'Home::quienes_somos');
$routes->get('/acercade', 'Home::acercade');
$routes->get('/registro', 'Home::registro');
$routes->get('/login', 'Home::login');
$routes->get('/servicios', 'Home::servicios');