<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $fillable = [
        'bracket_round', 'name'
    ];

    public function roundusers()
    {
        return $this->hasMany(RoundUser::class);
    }
}
