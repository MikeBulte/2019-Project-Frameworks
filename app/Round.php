<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $fillable = [
        'bracket_round', 'name'
    ];

    public function gameTablePerRound()
    {
        $this->game_tables;
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }

    public function game_tables()
    {
        return $this->belongsToMany(GameTable::class, 'scores', 'round_id', 'game_table_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'scores', 'round_id', 'user_id');
    }
}
