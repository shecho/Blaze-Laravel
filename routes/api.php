<?php
// Este archivo contiene las rutas generals de la api 
// // Archivo que agrega laravel por defecto
// Para mas informacion ir a la documentacion ofical de Laravel https://laravel.com/
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Esta es la ruta principal de app
  
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
