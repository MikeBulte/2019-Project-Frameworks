<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $fillable = [
        'bracket_round', 'name'
    ];

    public function scores()
    {
        return $this->hasMany('App\Comment');
    }
}
