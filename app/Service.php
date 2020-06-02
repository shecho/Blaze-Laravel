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
        'serviceName', 'servicePrice', 'serviceDescription'
    ];
}
