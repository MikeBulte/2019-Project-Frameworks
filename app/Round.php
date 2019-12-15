<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $fillable = [
        'bracket_round', 'name'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->using(RoundUser::class);
    }

//    public function roundusers()
//    {
//        return $this->hasMany(RoundUser::class);
//    }
}
