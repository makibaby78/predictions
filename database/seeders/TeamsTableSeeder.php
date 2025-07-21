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
            [
                'name' => 'Onic ID',
                'game_id' => '2',
                'country' => 'Indonesia',
            ],
            [
                'name' => 'RRQ Hoshi',
                'game_id' => '2',
                'country' => 'Indonesia',
            ],
            [
                'name' => 'Team Liquid PH',
                'game_id' => '2',
                'country' => 'Philippines',
            ],
            [
                'name' => 'Onic PH',
                'game_id' => '2',
                'country' => 'Philippines',
            ],
            [
                'name' => 'SRG OG',
                'game_id' => '2',
                'country' => 'Malaysia',
            ],
            [
                'name' => 'Homebois',
                'game_id' => '2',
                'country' => 'Malaysia',
            ],
            [
                'name' => 'Team Flash',
                'game_id' => '2',
                'country' => 'Singapore',
            ],
            [
                'name' => 'CFU Gaming',
                'game_id' => '2',
                'country' => 'Cambodia',
            ],
            [
                'name' => 'Ultra Legends',
                'game_id' => '2',
                'country' => 'Egypt',
            ],
            [
                'name' => 'Corinthians',
                'game_id' => '2',
                'country' => 'Brazil',
            ],
            [
                'name' => ' Team Spirit',
                'game_id' => '2',
                'country' => 'Russia',
            ],
            [
                'name' => 'Aurora Turkiye',
                'game_id' => '2',
                'country' => 'Turkey',
            ],
            [
                'name' => 'Area 77',
                'game_id' => '2',
                'country' => 'United States',
            ],
            [
                'name' => 'Mythic SEAL',
                'game_id' => '2',
                'country' => 'Myanmar',
            ],
            [
                'name' => 'DianFengYaoGuai',
                'game_id' => '2',
                'country' => 'China',
            ],
            [
                'name' => 'Virtus.pro',
                'game_id' => '2',
                'country' => 'Russia',
            ],
        ]);
    }
}
