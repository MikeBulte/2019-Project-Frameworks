<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores')->insert([
            [
                'user_id'       => 1,
                'round_id'      => 1,
                'game_table_id' => 1,
                'amount'        => 80,
                'weight'        => 50,
                'validated'     => true,
            ],
            [
                'user_id'       => 2,
                'round_id'      => 1,
                'game_table_id' => 1,
                'amount'        => 30,
                'weight'        => 40,
                'validated'     => true,
            ],
            [
                'user_id'       => 3,
                'round_id'      => 1,
                'game_table_id' => 1,
                'amount'        => 45,
                'weight'        => 50,
                'validated'     => true,
            ],
            [
                'user_id'       => 3,
                'round_id'      => 2,
                'game_table_id' => 3,
                'amount'        => 20,
                'weight'        => 30,
                'validated'     => true,
            ],
            [
                'user_id'       => 3,
                'round_id'      => 3,
                'game_table_id' => 5,
                'amount'        => 100,
                'weight'        => 100,
                'validated'     => false,
            ],
            [
                'user_id'       => 1,
                'round_id'      => 2,
                'game_table_id' => 7,
                'amount'        => 60,
                'weight'        => 40,
                'validated'     => true,
            ]
        ]);
    }
}
