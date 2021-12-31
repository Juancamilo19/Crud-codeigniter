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
|	https://codeigniter.com/user_guide/general/routing.html
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
//Bandas
$route['usuarios'] = 'user/Main';
//Agregar bandas
$route['nuevo-usuario'] = 'user/Add';
$route['nuevo-usuario'] = 'user/Add/index';
$route['nuevo-usuario/save'] = 'user/Add/save';
//Editar Bandas
$route['usuario/(:num)'] = 'user/Edit/index/$1';  
$route['usuario/update/(:num)'] = 'user/Edit/update/$1';
//Borrar Bandas
$route['usuario/delete/(:num)'] = 'user/Main/delete/$1';
//Albums
$route['albums'] = 'user/MainAlbum';
//Agregar Albums
$route['nuevo-album'] = 'user/AddAlbum';
$route['nuevo-album/index'] = 'user/AddAlbum/index';
$route['nuevo-album/save'] = 'user/AddAlbum/save';
//Editar Albums
$route['album/(:num)'] = 'user/EditAlbum/index/$1';   
$route['album/update/(:num)'] = 'user/EditAlbum/update/$1';
//Borrar Albums
$route['album/delete/(:num)'] = 'user/MainAlbum/delete/$1';
//canciones
$route['canciones'] = 'user/MainCancion';
//Agregar Canciones
$route['nueva-cancion'] = 'user/AddCancion';
$route['nueva-cancion/index'] = 'user/AddCancion/index';
$route['nueva-cancion/save'] = 'user/AddCancion/save';
//Editar Canciones
$route['cancion/(:num)'] = 'user/EditCancion/index/$1';   
$route['cancion/update/(:num)'] = 'user/EditCancion/update/$1';
//Borrar Canciones
$route['cancion/delete/(:num)'] = 'user/MainCancion/delete/$1';
//Generos
$route['generos'] = 'user/MainGenero';
//Agregar Generos
$route['nuevo-genero'] = 'user/AddGenero';
$route['nuevo-genero/save'] = 'user/AddGenero/save';
$route['genero/(:num)'] = 'user/EditGenero/index/$1'; 
//Editar Generos  
$route['genero/update/(:num)'] = 'user/EditGenero/update/$1';
//Borrar Generos
$route['genero/delete/(:num)'] = 'user/MainGenero/delete/$1';
//Rutas por Defecto
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

