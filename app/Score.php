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
        return $this->belongsTo('App\User');
    }

    public function round()
    {
        return $this->belongsTo('App\Round');
    }

    public function rounduser()
    {
        return $this->belongsTo('App\RoundUser');
    }
}
