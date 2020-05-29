<?php
// Este archivo crea el modelo de barber. Aunque no esta implementado se mantiene par la escalabilidad del proyecto
namespace App;

use Illuminate\Database\Eloquent\Model;

// Crea una clase Barbero
class Barber extends Model
{
    protected $primaryKey = 'barber_id';//llave primaria y auto incremental tipo int por defecto
}

