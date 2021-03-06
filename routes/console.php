<?php
// Archivo que agrega la ravel por defecto
// PAra mas informacion ir a la documentacion ofical de Laravel https://laravel.com/
use Illuminate\Foundation\Inspiring;

/*
 Esta archivo lo agrega laravel por defecto
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
