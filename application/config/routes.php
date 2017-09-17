<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Beranda 
$route['admin/beranda/dataacaraaktif'] = "event/dataacaraaktif";
$route['admin/beranda/dataacarabelumaktif'] = "event/dataacarabelumaktif";

//Kelola admin
$route['admin/kelolaadmin/tambah'] = "admin/tambah";
$route['admin/kelolaadmin/ubah/(:any)'] = "admin/ubah/$1";
$route['admin/kelolaadmin/hapus/(:any)'] = "admin/hapus/$1";

//Kelola Panitia
$route['admin/kelolapanitia'] = "panitia/kelolapanitia";
$route['admin/kelolapanitia/tambah'] = "panitia/form_tambahpanitia"; 
$route['admin/kelolapanitia/tampil/(:any)'] = "panitia/tampil/$1"; 
$route['admin/kelolapanitia/hapus/(:any)'] = "panitia/hapus/$1";

//Aktivasi Acara
$route['admin/aktivasiacara'] = "event/kelolaevent";
$route['admin/aktivasiacara/tampil/(:any)'] = "event/tampil/$1";
$route['admin/aktivasiacara/konfirmasi'] = "event/konfirmasi";
$route['admin/aktivasiacara/hapus/(:any)'] = "event/hapus/$1";

//Kelola CFD
$route['admin/kelolacfd'] = "cfd/kelolacfd";
$route['admin/kelolacfd/tambah'] = "cfd/tambah_cfd"; 
$route['admin/kelolacfd/ubah/(:any)'] = "cfd/ubah/$1";
$route['admin/kelolacfd/tampil/(:any)'] = "cfd/tampil/$1";