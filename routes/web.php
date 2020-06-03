<?php

// Este archivo contiene todos las rutas de la aplciacion
/*
|Este archivo lo agrega laravel si no conoce de laravel no lo  toque--------------------------------------------------------------------------
| Aqui se crean todas las rutas que la aplicacion estas rutas son cargadas por un proveider que agrega Laravel en que se una un midleware de llamado web y permite crear apis faiclmente
|a--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. 
|
*/
// ruta inicial 
// Route::get('/', function () {
//     return view('welcome');
// });
// ruta inicial
Route::get('/', 'WellcomeController@index')->name('welcome');
// Route::get('/', 'WellcomeController@index')->name('/');
// Instancia de Funcion de  autenticaciones



Auth::routes();


// tura de home de panel de control 
Route::get('/home', 'HomeController@index')->name('home');




// ruta crear Citas
Route::post('/createNewDate','CreateDateController@CreateDate');
// ruta crear Servicios
Route::post('/createNewService','ServiceController@CreateService');
// ruta crear Empleados (Barberos)
Route::post('/createNewBarber','BarberController@CreateBarber');




// ruta del filtro citas por dia
Route::post('/filterByDay','HomeController@filterByDay')->name('filterByDay');

// ruta de filtro citas por rango de dias
Route::post('/filterByRange','HomeController@filterByRange')->name('filterByRange');





// Ruta perfil
Route::get('/profile', 'UserController@index')->name('profile');

// ruta para actualizar nombre de perfil
Route::get('/updateProfileName/{iduser}/{nameUser}', 'UserController@updateName')->name('updateProfileName');

// ruta para actualizar  telefono
Route::get('/updateProfilePhone/{iduser}/{phoneUser}', 'UserController@updatePhone')->name('updateProfilePhone');




// Ruta para exportar citas en  excel
Route::get('/exportAllDates', 'HomeController@exportDates')->name('exportAllDates');

// ruta para ecportax ussuarios excel
Route::get('/exportAllusers', 'HomeController@exportUsers')->name('exportAllusers');



//  Ruta rerpote PDF de citas
Route::get('/reporteClientes', 'HomeController@reporteClientes')->name('reporteClientes');

// Ruta Reporte PDF de usuarios
Route::get('/reporteCitas', 'HomeController@reporteCitas')->name('reporteCitas');




//Ruta para Borrar una cita
Route::get('/deleteDate/{iddate}', 'CreateDateController@deleteDate')->name('deleteDate');
// Ruta par Borrar un usuario
Route::get('/deleteUser/{idUser}', 'UserController@deleteUser')->name('deleteUser');
// Ruta par Borrar un usuario
Route::get('/deleteService/{idService}', 'ServiceController@deleteService')->name('deleteUser');




