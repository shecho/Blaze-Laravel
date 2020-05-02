<?php
//Este archivo contiene el modelo servicios
namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     // use Notifiable;

    /**
     *Este archivo contiene el modelo de los  servicios
     *
     * @var array
     */
    protected $fillable = [
        'serviceName', 'servicePrice', 'serviceDescription'
    ];
}
