<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');

$routes->post('/submit', 'Home::submit');

$routes->get('images/(:segment)', 'Home::image/$1');

$routes->group('admin', ['filter' => ['group:admin']], function ($routes) {
    $routes->get('', 'AdminController::index');
    $routes->get('dashboard', 'AdminController::index');

    // Daftar Kue Routes
    $routes->get('daftar-kue', 'AdminController::daftarKue');
    $routes->get('daftar-kue/tambah', 'AdminController::daftarKueTambah');
    $routes->post('daftar-kue/create', 'AdminController::createKue');
    
    // Edit Kue Routes
    $routes->get('daftar-kue/edit/(:num)', 'AdminController::daftarKueEdit/$1');
    $routes->post('daftar-kue/change/(:num)', 'AdminController::changeKue/$1');

    // Hapus Kue Routes
    $routes->get('daftar-kue/hapus/(:num)', 'AdminController::hapusKue/$1');
    $routes->post('daftar-kue/hapus/(:num)', 'AdminController::hapusKue/$1');

    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
    $routes->get('transaksi/hapus', 'AdminController::transaksiHapus');

    $routes->get('pelanggan', 'AdminController::pelanggan');
    $routes->get('pelanggan/hapus', 'AdminController::pelangganHapus');
});

service('auth')->routes($routes);
