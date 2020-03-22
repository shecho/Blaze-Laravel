<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateDate extends Model
{
    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userName', 'userPhone', 'day','time'
    ];
}
