<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoundUser extends Model
{
    protected $fillable = [
        ''
    ];

    public function scores()
    {
        return $this->hasMany('App\Score');
    }

    public function gametable()
    {
        return $this->belongsTo('App\GameTable');
    }
}
