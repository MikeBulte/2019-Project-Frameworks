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
                'round_user_id' => 1,
                'amount'        => 80,
                'weight'        => 50,
                'validated'     => true,
            ],
            [
                'user_id'       => 2,
                'round_user_id' => 2,
                'amount'        => 30,
                'weight'        => 20,
                'validated'     => true,
            ],
            [
                'user_id'       => 1,
                'round_user_id' => 3,
                'amount'        => 60,
                'weight'        => 40,
                'validated'     => true,
            ]
        ]);
    }
}
