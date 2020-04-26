<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Esta es la ruta principal de app
    Aaqui puedes crear todas la rutas que quieras
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
