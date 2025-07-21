<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::insert([
            ['name' => 'Dota 2'],
            ['name' => 'Mobile Legends'],
            ['name' => 'Valorant'],
            ['name' => 'CS 2'],
        ]);
    }
}
