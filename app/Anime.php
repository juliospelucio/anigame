<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'author', 'episodes', 'score', 'year',
    ];
}
