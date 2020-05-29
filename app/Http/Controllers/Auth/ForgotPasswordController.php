<?php
// Este controlador se encarga de reenviar el correo para reenviaar la contrasena
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador se usa para resetear el correo electronuco
    |
    */

    use SendsPasswordResetEmails;
}
