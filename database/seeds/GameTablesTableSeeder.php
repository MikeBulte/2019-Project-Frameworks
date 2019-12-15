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
            ['name' => 'Table 4'],
            ['name' => 'Table 5'],
            ['name' => 'Table 6'],
            ['name' => 'Table 7'],
            ['name' => 'Table 8'],
            ['name' => 'Table 9'],
            ['name' => 'Table 10'],
            ['name' => 'Table 11'],
            ['name' => 'Table 12'],
        ]);
    }
}
