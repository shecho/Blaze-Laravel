<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
     /**
     *
     *
     * @var array
     */
    protected $fillable = [
        'barberName', 'barberDocument', 'barberPhone','barberEmail','barberFacebook','barberInstagram','barberImageUrl'
    ];
}
