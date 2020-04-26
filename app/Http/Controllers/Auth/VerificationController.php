<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |Este controlador es responsavle de manejhar la verificacion del iamil para cualquie usiro registrado en la aplicacion
  
    |
    */

    use VerifiesEmails;

    /**
     * REdireccion
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     *Crea un nuevo controlador
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
