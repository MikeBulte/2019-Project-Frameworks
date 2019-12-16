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
        return $this->belongsTo(User::class);
    }

    public function round()
    {
        return $this->belongsTo(Round::class);
    }

    public function game_table()
    {
        return $this->belongsTo(GameTable::class, 'game_table_id');
    }
}
