<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['admin'] = 'admin/overview';
$route['default_controller'] = 'kelompok_controller';

$route['datasekolah/tambah'] = 'user/tambah';
$route['datasekolah/tambah/simpan'] = 'user/tambah_simpan';
$route['datasekolah/edit/(:num)'] = 'user/edit/$1';
$route['datasekolah/edit/simpan/(:num)'] = 'user/edit_simpan/$1';
$route['datasekolah/hapus/(:num)'] = 'user/hapus/$1';

$route['datajurusan/tambah'] = 'jurusan_controller/tambah';
$route['datajurusan/tambah/simpan'] = 'jurusan_controller/tambah_simpan';
$route['datajurusan/edit/(:num)'] = 'jurusan_controller/edit/$1';
$route['datajurusan/edit/simpan/(:num)'] = 'jurusan_controller/edit_simpan/$1';
$route['datajurusan/hapus/(:num)'] = 'jurusan_controller/hapus/$1';

$route['datakelompok/tambah'] = 'kelompok_controller/tambah';
$route['datakelompok/tambah/simpan'] = 'kelompok_controller/tambah_simpan';
$route['datakelompok/edit/(:num)'] = 'kelompok_controller/edit/$1';
$route['datakelompok/edit/simpan/(:num)'] = 'kelompok_controller/edit_simpan/$1';
$route['datakelompok/hapus/(:num)'] = 'kelompok_controller/hapus/$1';
$route['datakelompok/daftar/(:num)'] = 'kelompok_controller/daftar/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
