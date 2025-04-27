<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home/index', 'Home::index');
$routes->get('/', 'Kategori::index');
$routes->get('kategori/index', 'Kategori::index');
$routes->get('kategori/k1', 'Kategori::k1');
$routes->get('kategori/k2', 'Kategori::k2');
$routes->get('kategori/k3', 'Kategori::k3');
$routes->get('kategori/k4', 'Kategori::k4');
$routes->get('kategori/k5', 'Kategori::k5');