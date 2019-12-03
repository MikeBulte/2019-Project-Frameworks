<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoundUser extends Model
{
    protected $table = 'round_user';

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function gametable()
    {
        return $this->belongsTo(GameTable::class, 'game_table_id');
    }

    public function round()
    {
        return $this->belongsTo(Round::class, 'round_id');
    }
}
