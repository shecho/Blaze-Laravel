<?php
// Este archivo contoene el modelo de la clase usuario
namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
// Crea la clase Usuario
class User extends Authenticatable
{
    // use SoftDeletes;
    use Notifiable;

    /**
     * Datos de llenado
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone'
    ];

    /**
     *  
     * Datos ocultos
     * @var array
     */
    // protected $dates = ['deleted_at'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Datos de casteo de fecha
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
