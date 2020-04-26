<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateDate extends Model
{
    // use Notifiable;

    /**
     *Este archivo contiene el modelo de la clases citas
     *
     * @var array
     */
    protected $fillable = [
        'userName', 'userPhone', 'day','time','barber'
    ];
}
