<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/createNewDate','CreateDateController@CreateDate');
Route::post('/filterByDay','HomeController@filterByDay')->name('filterByDay');
Route::post('/filterByRange','HomeController@filterByRange')->name('filterByRange');
Route::get('/profile', 'UserController@index')->name('profile');


/* crear el profile
 */
    


/* crear date */

/*  */

