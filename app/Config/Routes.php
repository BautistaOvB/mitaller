<?php

use CodeIgniter\Router\RouteCollection;
use Config\Services;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false); 
$routes->set404Override();

$routes->setAutoRoute(true);

/* @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('inicio', 'Home::inicio');

$routes->get('about', 'Home::QuienesSomos');
$routes->get('comercializacion', 'Home::comercializacion');
$routes->get('terminos', 'Home::terminos');
$routes->get('contacto', 'Home::contacto');
//$routes->get('productos', 'Productos::index');
