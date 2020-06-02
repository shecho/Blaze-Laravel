<?php
// Este arvhico contirne el modelo de la clase de Servicio
namespace App;

use Illuminate\Database\Eloquent\Model;

// Se crea la clase Servicio
class Service extends Model
{
   
     /**
     *
     *
     * @var array
     */
    protected $fillable = [
        'serviceName', 'serviceDescription','servicePrice'
    ];
}
