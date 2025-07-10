<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');
$routes->get('/quienes_somos', 'Home::quienes_somos');
$routes->get('/acercade', 'Home::acercade');
$routes->get('/registro', 'Home::registro');
$routes->get('/login', 'Home::login');
$routes->get('/servicios', 'Home::servicios');

// registro
$routes->get('create', 'usuario_controller::create');
$routes->post('FormValidation', 'usuario_controller::FormValidation');
    
// login
$routes->get('login_form', 'login_controller::login');
$routes->post('login', 'login_controller::auth');
    
$routes->get('panel', 'panel_controller::index',['filter' => 'auth']); //con filtro de autenticación

// logout
$routes->get('logout', 'login_controller::logout');
    
// recuperar contraseña
$routes->get('forgot_password', 'login_controller::forgot_password');
$routes->post('send_password_reset', 'login::send_password_reset');
