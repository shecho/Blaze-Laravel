<?php
// Este controlador se encarga de resetear las contrasena
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |Este controladofr es el rsponsable de majerar el reteseo de la contrasena 
    
    */

    use ResetsPasswords;
    

    /**
     * redireccion
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
