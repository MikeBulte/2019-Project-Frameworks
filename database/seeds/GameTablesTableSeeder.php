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
            ['name' => 'Tafel 1'],
            ['name' => 'Tafel 2'],
            ['name' => 'Tafel 3'],
            ['name' => 'Tafel 4'],
            ['name' => 'Tafel 5'],
            ['name' => 'Tafel 6'],
            ['name' => 'Tafel 7'],
            ['name' => 'Tafel 8'],
            ['name' => 'Tafel 9'],
            ['name' => 'Tafel 10'],
            ['name' => 'Tafel 11'],
            ['name' => 'Tafel 12'],
            ['name' => 'Tafel 13'],
            ['name' => 'Tafel 14'],
            ['name' => 'Tafel 15'],
        ]);
    }
}
