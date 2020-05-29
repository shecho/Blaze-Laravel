<?php
//Este archivo contiene el modelo de la clase servicios
namespace App;

use Illuminate\Database\Eloquent\Model;

// Crea la clase servicio
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
