<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameTable extends Model
{
    protected $fillable = [
        'name'
    ];

    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
