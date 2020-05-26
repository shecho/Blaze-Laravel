<?php
// Este archivo contiene las rutas generals de la api 
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
