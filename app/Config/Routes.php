<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//! Rutas para el controlador de home - funcion prueba
$routes->get('pagina_principal', 'Home::pagina_principal');
$routes->post('home/registrar_usuario', 'Home::registrar_usuario');
$routes->post('home/eliminar_usuario', 'Home::eliminar_usuario');
