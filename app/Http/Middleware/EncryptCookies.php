<?php
// Este archivo lo agregfa laravel por defecto y son funcionalidades propias del framework para mas informacion ir a doculemntacion oficila www.laravel/midleware
namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
