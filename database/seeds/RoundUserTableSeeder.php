<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoundUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('round_user')->insert([
            [
                'round_id'      => 1,
                'user_id'       => 1,
                'game_table_id' => 1,
            ],
            [
                'round_id'      => 1,
                'user_id'       => 2,
                'game_table_id' => 1,
            ],
            [
                'round'         => 2,
                'user_id'       => 2,
                'game_table_id' => 1,
            ]
        ]);
    }
}
