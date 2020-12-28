<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['admin'] = 'admin/overview';
$route['default_controller'] = 'kelompok_controller';

$route['datasekolah'] = 'user';
$route['datasekolah/tambah'] = 'user/tambah';
$route['datasekolah/simpan'] = 'user/simpan';
$route['datasekolah/edit/(:num)'] = 'user/edit/$1';
$route['datasekolah/update/(:num)'] = 'user/update/$1';
$route['datasekolah/hapus/(:num)'] = 'user/hapus/$1';

$route['datajurusan'] = 'jurusan_controller';
$route['datajurusan/tambah'] = 'jurusan_controller/tambah';
$route['datajurusan/simpan'] = 'jurusan_controller/simpan';
$route['datajurusan/edit/(:num)'] = 'jurusan_controller/edit/$1';
$route['datajurusan/update/(:num)'] = 'jurusan_controller/update/$1';
$route['datajurusan/hapus/(:num)'] = 'jurusan_controller/hapus/$1';

$route['datakelompok'] = 'kelompok_controller';
$route['datakelompok/tambah'] = 'kelompok_controller/tambah';
$route['datakelompok/simpan'] = 'kelompok_controller/simpan';
$route['datakelompok/edit/(:num)'] = 'kelompok_controller/edit/$1';
$route['datakelompok/update/(:num)'] = 'kelompok_controller/update/$1';
$route['datakelompok/hapus/(:num)'] = 'kelompok_controller/hapus/$1';

$route['datapeserta'] = 'peserta_controller';
$route['datapeserta/list/(:num)'] = 'peserta_controller/list/$1';
$route['datapeserta/tambah/(:num)'] = 'peserta_controller/tambah/$1';
$route['datapeserta/simpan'] = 'peserta_controller/simpan';
$route['datapeserta/edit/(:num)'] = 'peserta_controller/edit/$1';
$route['datapeserta/update/(:num)'] = 'peserta_controller/update/$1';
$route['datapeserta/hapus/(:num)'] = 'peserta_controller/hapus/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
