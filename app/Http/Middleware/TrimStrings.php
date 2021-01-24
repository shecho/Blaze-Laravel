<?php
// Este archivo lo agregfa laravel por defecto y son funcionalidades propias del framework para mas informacion ir a doculemntacion oficila www.laravel/midleware
namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
        'password',
        'password_confirmation',
    ];
}
