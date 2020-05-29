<?php
// Este arvhico contirne el modelo de la clase de citas
namespace App;

use Illuminate\Database\Eloquent\Model;

// Se crea la clase Cita 
class CreateDate extends Model
{
    /**
     *
     *
     * @var array
     */
    protected $fillable = [
        'userName', 'userPhone', 'day','time','barber'
    ];
}
