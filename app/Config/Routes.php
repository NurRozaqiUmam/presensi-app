<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->post('login', 'Login::login_action');
$routes->get('logout', 'Login::logout');

$routes->get('admin/home', 'Admin\Home::index', ['filter' => 'adminFilter']);
$routes->get('admin/jabatan', 'Admin\Jabatan::index', ['filter' => 'adminFilter']);
$routes->get('admin/jabatan/create', 'Admin\Jabatan::create', ['filter' => 'adminFilter']);
$routes->post('admin/jabatan/store', 'Admin\Jabatan::store', ['filter' => 'adminFilter']);
$routes->get('admin/jabatan/edit/(:segment)', 'Admin\Jabatan::edit/$1', ['filter' => 'adminFilter']);
$routes->post('admin/jabatan/update/(:segment)', 'Admin\Jabatan::update/$1', ['filter' => 'adminFilter']);
$routes->get('admin/jabatan/delete/(:segment)', 'Admin\Jabatan::delete/$1', ['filter' => 'adminFilter']);

$routes->get('admin/lokasi_presensi', 'Admin\LokasiPresensi::index', ['filter' => 'adminFilter']);
$routes->get('admin/lokasi_presensi/create', 'Admin\LokasiPresensi::create', ['filter' => 'adminFilter']);
$routes->post('admin/lokasi_presensi/store', 'Admin\LokasiPresensi::store', ['filter' => 'adminFilter']);
$routes->get('admin/lokasi_presensi/edit/(:segment)', 'Admin\LokasiPresensi::edit/$1', ['filter' => 'adminFilter']);
$routes->post('admin/lokasi_presensi/update/(:segment)', 'Admin\LokasiPresensi::update/$1', ['filter' => 'adminFilter']);
$routes->get('admin/lokasi_presensi/delete/(:segment)', 'Admin\LokasiPresensi::delete/$1', ['filter' => 'adminFilter']);
$routes->get('admin/lokasi_presensi/detail/(:segment)', 'Admin\LokasiPresensi::detail/$1', ['filter' => 'adminFilter']);

$routes->get('pegawai/home', 'Pegawai\Home::index', ['filter' => 'pegawaiFilter']);
