<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{

    protected $fillable = [
        'name','number','description','status'
    ];
}

