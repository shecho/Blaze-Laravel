<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
     /**
     *
     *
     * @var array
     */
    protected $fillable = [
        'ServiceName', 'barberId', 'barberPhone','barberEmail',
    ];
}
