<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'amount', 'weight', 'validated'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
