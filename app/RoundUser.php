<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoundUser extends Model
{
    protected $table = 'round_user';

    public function scores()
    {
        return $this->hasMany('App\Score');
    }

    public function gametable()
    {
        return $this->belongsTo('App\GameTable', 'game_table_id');
    }

    public function round()
    {
        return $this->belongsTo(Round::class, 'round_id');
    }
}
