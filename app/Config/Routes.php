<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//! Rutas para el controlador de home - funcion prueba
$routes->get('pagina_principal', 'Home::pagina_principal');
