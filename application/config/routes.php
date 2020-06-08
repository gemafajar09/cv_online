<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'User';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ==================================
// url admin
// ==================================
$route['admin']['get'] = 'Admin/index';
$route['daftar']['get'] = 'Admin/daftar';
$route['logins']['post'] = 'Admin/login';
$route['logouts']['get'] = 'Admin/logout';
$route['registers==']['post'] = 'Admin/register';
$route['halamans']['get'] = 'Admin/halaman';
// slider
$route['sliders']['get'] = 'Slider/index';
$route['sliderSimpan']['post'] = 'Slider/simpanSlider';
$route['sliderHapus']['post'] = 'Slider/hapusSlider';
// template cv
$route['templates']['get'] = 'Cv_template/index';
$route['templateSimpan']['post'] = 'Cv_template/simpanTemplate';
$route['templateHapus']['post'] = 'Cv_template/hapusTemplate';
// member
$route['members']['get'] = 'Member/index';
$route['hapusMember']['post'] = 'Member/hapusMember';
// Soal
$route['soal']['get'] = 'Soal/index';
$route['simpanSoal']['post'] = 'Soal/simpanSoal';
$route['inputSoal/(:num)']['get'] = 'Soal/inputSoal/$1';
// ==================================

$route['halaman']['get'] = 'User/halaman';
$route['login']['post'] = 'USer/login';
$route['register']['post'] = 'User/daftar';
$route['keluar']['get'] = 'User/logout';
// create cv
$route['create']['get'] = 'CreateCv/index';
$route['buat1']['post'] = 'CreateCv/buatCv';
$route['buat2']['get'] = 'CreateCv/dataDiri';
$route['buat3']['post'] = 'CreateCv/simpanDataDiri';
// history
$route['history']['get'] = 'History/index';
