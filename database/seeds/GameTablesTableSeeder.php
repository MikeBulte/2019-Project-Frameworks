<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameTablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_tables')->insert([
            ['name' => 'Table 1'],
            ['name' => 'Table 2'],
            ['name' => 'Table 3'],
        ]);
    }
}
