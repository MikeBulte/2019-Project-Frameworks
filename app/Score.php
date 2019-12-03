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

    public function rounduser()
    {
        return $this->belongsTo(RoundUser::class, 'round_user_id');
    }
}
