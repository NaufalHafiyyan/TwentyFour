<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile', 'Profile::index');
$routes->get('/data-produk', 'DataProduk::index');
$routes->get('/data-kategori', 'DataKategori::index');
$routes->resource('anggota');

