<?php

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
Route::get('/', function () {
    return view('welcome');
});
// ruta de autenticar
Auth::routes();

// tura de home
Route::get('/home', 'HomeController@index')->name('home');

// ruta crear Citas
Route::post('/createNewDate','CreateDateController@CreateDate');
// ruta del filtro por dya
Route::post('/filterByDay','HomeController@filterByDay')->name('filterByDay');
// ruta de filtro por rango de dias
Route::post('/filterByRange','HomeController@filterByRange')->name('filterByRange');
// Ruta perfil
Route::get('/profile', 'UserController@index')->name('profile');
// ruta para actualizar nombre de perfil
Route::get('/updateProfileName/{iduser}/{nameUser}', 'UserController@updateName')->name('updateProfileName');
// ruta para actualizar  telefono
Route::get('/updateProfilePhone/{iduser}/{phoneUser}', 'UserController@updatePhone')->name('updateProfilePhone');
// ruta para borrar una cita
Route::get('/deleteDate/{iddate}', 'CreateDateController@deleteDate')->name('deleteDate');
// Ruta para exportar citas 
Route::get('/exportAllDates', 'HomeController@exportDates')->name('exportAllDates');
// ruta para ecportax ecell de ussuarios
Route::get('/exportAllusers', 'HomeController@exportUsers')->name('exportAllusers');



//  Ruta rerpote PDF de citas
Route::get('/reporte1', 'HomeController@reporte1')->name('reporte1');

// Ruta Reporte PDF de usuarios
Route::get('/reporte2', 'HomeController@reporte99')->name('reporte1');







