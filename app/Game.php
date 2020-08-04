<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //protected $table = 'some_name'; 

    //convert array to json and vice versa
    protected $casts = [
        'platforms' => 'array'
    ];
}
