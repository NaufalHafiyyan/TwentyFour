<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile', 'Profile::index');
$routes->get('/data-produk', 'DataProduk::index');
$routes->get('/tambah-produk', 'TambahProduk::index');
$routes->post('/tambah-produk', 'TambahProduk::index');
$routes->get('/data-kategori', 'DataKategori::index');
$routes->get('/produk-detail/(:num)', 'ProdukDetail::index/$1');
$routes->resource('anggota');

