<?php
// Este arvhico contirne el modelo de la clase de Barbero
namespace App;

use Illuminate\Database\Eloquent\Model;

// Se crea la clase de Modelo Barbero
class Barber extends Model
{
     /**
     *
     *
     * @var array
     */
    protected $fillable = [
        'barberName', 'barberDocument', 'barberPhone','barberEmail',
    ];
}
