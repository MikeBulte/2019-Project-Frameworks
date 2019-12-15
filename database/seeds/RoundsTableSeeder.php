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
        $round->name          = 'Voorronde 1';
        $round->save();

        $round                = new Round();
        $round->bracket_round = false;
        $round->name          = 'Voorronde 2';
        $round->save();

        $round                = new Round();
        $round->bracket_round = false;
        $round->name          = 'Voorronde 3';
        $round->save();

        $round                = new Round();
        $round->bracket_round = true;
        $round->name          = 'Bracketronde 4';
        $round->save();

        $round                = new Round();
        $round->bracket_round = true;
        $round->name          = 'Bracketronde 5';
        $round->save();

        $round                = new Round();
        $round->bracket_round = true;
        $round->name          = 'Bracketronde 6';
        $round->save();
    }
}
