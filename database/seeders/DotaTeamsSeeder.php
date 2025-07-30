<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class DotaTeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::insert([
            ['name' => 'PARIVISION', 'game_id' => 1, 'country' => 'China'],
            ['name' => 'Tundra Esports', 'game_id' => 1, 'country' => 'Europe'],
            ['name' => 'Nigma Galaxy', 'game_id' => 1, 'country' => 'Europe'],
            ['name' => 'Xtreme Gaming', 'game_id' => 1, 'country' => 'SEA'],
            ['name' => 'BOOM Esports', 'game_id' => 1, 'country' => 'Indonesia'],
            ['name' => 'BetBoom Team', 'game_id' => 1, 'country' => 'Russia'],
            ['name' => 'Gaimin Gladiators', 'game_id' => 1, 'country' => 'Europe'],
            ['name' => 'Team Tidebound', 'game_id' => 1, 'country' => 'China'],
            ['name' => 'Team Yandex', 'game_id' => 1, 'country' => 'Russia'],
            ['name' => "Yakult Brothers", 'game_id' => 1, 'country' => 'Asia'],
        ]);
    }
}
