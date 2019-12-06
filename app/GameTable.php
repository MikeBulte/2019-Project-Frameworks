<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameTable extends Model
{
    protected $fillable = [
        'name'
    ];

    public function roundusers()
    {
        return $this->hasMany('App\RoundUser');
    }
}
