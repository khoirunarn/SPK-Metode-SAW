<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->get('/kriteria', 'Kriteria::index');
$routes->get('/alternatif', 'Alternatif::index');

// Routes for Kriteria
$routes->get('/kriteria/create', 'Kriteria::create');
$routes->post('/kriteria/store', 'Kriteria::store');
$routes->get('/kriteria/edit/(:num)', 'Kriteria::edit/$1');
$routes->post('/kriteria/update/(:num)', 'Kriteria::update/$1');
$routes->get('/kriteria/delete/(:num)', 'Kriteria::delete/$1');

// Routes for Alternatif
$routes->get('/alternatif', 'Alternatif::index');
$routes->get('/alternatif/create', 'Alternatif::create');
$routes->post('/alternatif/store', 'Alternatif::store');
$routes->get('/alternatif/edit/(:num)', 'Alternatif::edit/$1');
$routes->post('/alternatif/update/(:num)', 'Alternatif::update/$1');
$routes->get('/alternatif/delete/(:num)', 'Alternatif::delete/$1');

// Routes for Matriks
$routes->get('/matriks', 'Matriks::index');  // Menampilkan Matriks (halaman utama)
$routes->get('/matriks/create', 'Matriks::create');  // Form tambah Matriks
$routes->post('/matriks/store', 'Matriks::store');   // Menyimpan Matriks baru
$routes->get('/matriks/edit/(:num)', 'Matriks::edit/$1'); // Form edit Matriks
$routes->post('/matriks/update/(:num)', 'Matriks::update/$1'); // Update Matriks
$routes->get('/matriks/delete/(:num)', 'Matriks::delete/$1'); // Hapus Matriks

// Routes for Normalisasi
$routes->get('/normalisasi', 'Normalisasi::index');
$routes->get('/normalisasi/hitung', 'Normalisasi::hitungNormalisasi');
$routes->post('normalisasi/hitungNormalisasi', 'Normalisasi::hitungNormalisasi');
$routes->get('/peringkingan', 'Peringkingan::index');

$routes->post('/peringkingan/hitungUlang', 'Peringkingan::hitungUlang');
