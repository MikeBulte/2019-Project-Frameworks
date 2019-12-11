<?php

use App\Round;
use Illuminate\Database\Seeder;

class RoundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $round                = new Round();
        $round->bracket_round = false;
        $round->name          = 'Ronde 1';
        $round->save();

        $round                = new Round();
        $round->bracket_round = false;
        $round->name          = 'Ronde 2';
        $round->save();

        $round                = new Round();
        $round->bracket_round = false;
        $round->name          = 'Ronde 3';
        $round->save();

        $round                = new Round();
        $round->bracket_round = true;
        $round->name          = 'Ronde 4';
        $round->save();

        $round                = new Round();
        $round->bracket_round = true;
        $round->name          = 'Ronde 5';
        $round->save();

        $round                = new Round();
        $round->bracket_round = true;
        $round->name          = 'Ronde 6';
        $round->save();
    }
}
