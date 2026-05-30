<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::insert([
            ['name' => 'Onic ID','game_id' => '2','country_id' => '2',],
            ['name' => 'RRQ Hoshi','game_id' => '2','country_id' => '2',],
            ['name' => 'Team Liquid PH', 'game_id' => '2', 'country_id' => '1'],
            ['name' => 'Onic PH', 'game_id' => '2', 'country_id' => '1'],
            ['name' => 'SRG OG', 'game_id' => '2', 'country_id' => '3'],
            ['name' => 'Homebois', 'game_id' => '2', 'country_id' => '3'],
            ['name' => 'Team Flash', 'game_id' => '2', 'country_id' => '4'],
            ['name' => 'CFU Gaming', 'game_id' => '2', 'country_id' => '8'],
            ['name' => 'Ultra Legends', 'game_id' => '2', 'country_id' => '9'],
            ['name' => 'Corinthians', 'game_id' => '2', 'country_id' => '10'],
            ['name' => 'Team Spirit', 'game_id' => '2', 'country_id' => '11'],
            ['name' => 'Aurora Turkiye', 'game_id' => '2', 'country_id' => '12'],
            ['name' => 'Area 77', 'game_id' => '2', 'country_id' => '13'],
            ['name' => 'Mythic SEAL', 'game_id' => '2', 'country_id' => '7'],
            ['name' => 'DianFengYaoGuai', 'game_id' => '2', 'country_id' => '14'],
            ['name' => 'Virtus.pro', 'game_id' => '2', 'country_id' => '11'],
            ['name' => 'PARIVISION', 'game_id' => 1, 'country_id' => '11'],
            ['name' => 'Tundra Esports', 'game_id' => 1, 'country_id' => '15'],
            ['name' => 'Nigma Galaxy', 'game_id' => 1, 'country_id' => '16'],
            ['name' => 'Xtreme Gaming', 'game_id' => 1, 'country_id' => '14'],
            ['name' => 'BOOM Esports', 'game_id' => 1, 'country_id' => '2'],
            ['name' => 'BetBoom Team', 'game_id' => 1, 'country_id' => '11'],
            ['name' => 'Gaimin Gladiators', 'game_id' => 1, 'country_id' => '13'],
            ['name' => 'Team Tidebound', 'game_id' => 1, 'country_id' => '14'],
            ['name' => 'Team Yandex', 'game_id' => 1, 'country_id' => '11'],
            ['name' => "Yakult Brothers", 'game_id' => 1, 'country_id' => '14'],
            ['name' => "Team Liquid", 'game_id' => 1, 'country_id' => '19'],
            ['name' => "Team Spirit", 'game_id' => 1, 'country_id' => '11'],
            ['name' => "Team Falcons", 'game_id' => 1, 'country_id' => '18'],
            ['name' => "Natus Vincere", 'game_id' => 1, 'country_id' => '17'],
            ['name' => "Team Nemesis", 'game_id' => 1, 'country_id' => '1'],
            ['name' => "Wildcard", 'game_id' => 1, 'country_id' => '13'],
            ['name' => "Heroic", 'game_id' => 1, 'country_id' => '13'],
            ['name' => "AP.Bren", 'game_id' => 2, 'country_id' => '1'],
            ['name' => "Aurora PH", 'game_id' => 2, 'country_id' => '1'],
            ['name' => "Omega Esports", 'game_id' => 2, 'country_id' => '1'],
            ['name' => "Team Falcons PH", 'game_id' => 2, 'country_id' => '1'],
            ['name' => "TNC Pro Team", 'game_id' => 2, 'country_id' => '1'],
            ['name' => "Twisted Minds PH", 'game_id' => 2, 'country_id' => '1'],
            ['name' => "Alter Ego", 'game_id' => 2, 'country_id' => '2'],
            ['name' => "Boostgate Esports", 'game_id' => 2, 'country_id' => '12'],
            ['name' => "OG", 'game_id' => 1, 'country_id' => '1'],
        ]);
    }
}
