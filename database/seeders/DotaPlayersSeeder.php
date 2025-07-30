<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class DotaPlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Player::insert([
            // PARIVISION
            ['team_id' => 17, 'name' => 'Satanic', 'country' => 'China', 'position' => 'Carry'],
            ['team_id' => 17, 'name' => 'No[o]ne', 'country' => 'China', 'position' => 'Mid'],
            ['team_id' => 17, 'name' => 'DM', 'country' => 'China', 'position' => 'Offlane'],
            ['team_id' => 17, 'name' => 'Dukalis', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 17, 'name' => '9Class', 'country' => 'China', 'position' => 'Support'],

            // Tundra
            ['team_id' => 18, 'name' => 'Crystallis', 'country' => 'China', 'position' => 'Carry'],
            ['team_id' => 18, 'name' => 'bzm', 'country' => 'China', 'position' => 'Mid'],
            ['team_id' => 18, 'name' => '33', 'country' => 'China', 'position' => 'Offlane'],
            ['team_id' => 18, 'name' => 'Saksa', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 18, 'name' => 'Whitemon', 'country' => 'China', 'position' => 'Support'],

            // Nigma
            ['team_id' => 19, 'name' => 'Ghost', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 19, 'name' => 'SumaiL', 'country' => 'China', 'position' => 'Carry'],
            ['team_id' => 19, 'name' => 'No!ob™', 'country' => 'China', 'position' => 'Offlane'],
            ['team_id' => 19, 'name' => 'OmaR`', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 19, 'name' => 'GH', 'country' => 'China', 'position' => 'Support'],

            // Xtreme Gaming
            ['team_id' => 20, 'name' => 'Ame', 'country' => 'China', 'position' => 'Carry'],
            ['team_id' => 20, 'name' => 'Xm', 'country' => 'China', 'position' => 'Mid'],
            ['team_id' => 20, 'name' => 'Xxs', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 20, 'name' => 'Poloson', 'country' => 'Malaysia/China', 'position' => 'Support'], // standby
            ['team_id' => 20, 'name' => 'xNova‑', 'country' => 'Singapore', 'position' => 'Support (stand‑in)'],

            // BOOM Esports
            ['team_id' => 21, 'name' => 'Armel', 'country' => 'Philippines', 'position' => 'Midlane'],
            ['team_id' => 21, 'name' => 'Armel', 'country' => 'Philippines', 'position' => 'Carry'],
            ['team_id' => 21, 'name' => 'Armel', 'country' => 'Philippines', 'position' => 'Carry'],
            ['team_id' => 21, 'name' => 'Armel', 'country' => 'Philippines', 'position' => 'Carry'],
            ['team_id' => 21, 'name' => 'Armel', 'country' => 'Philippines', 'position' => 'Carry'],

            // BETBOOM Esports
            ['team_id' => 22, 'name' => 'Armel', 'country' => 'Philippines', 'position' => 'Midlane'],
            ['team_id' => 22, 'name' => 'Armel', 'country' => 'Philippines', 'position' => 'Carry'],
            ['team_id' => 22, 'name' => 'Armel', 'country' => 'Philippines', 'position' => 'Carry'],
            ['team_id' => 22, 'name' => 'Armel', 'country' => 'Philippines', 'position' => 'Carry'],
            ['team_id' => 22, 'name' => 'Armel', 'country' => 'Philippines', 'position' => 'Carry'],

            // Gaimin Gladiators
            ['team_id' => 23, 'name' => 'watson', 'country' => 'Europe/MENA', 'position' => 'Carry'],
            ['team_id' => 23, 'name' => 'Quinn', 'country' => 'Europe', 'position' => 'Mid'],
            ['team_id' => 23, 'name' => 'Ace', 'country' => 'Europe', 'position' => 'Offlane'],
            ['team_id' => 23, 'name' => 'Malady', 'country' => 'Europe', 'position' => 'Support'],
            ['team_id' => 23, 'name' => 'tOfu', 'country' => 'Europe', 'position' => 'Support'],
        
            // Team Tidebound (All Gamers Global)
            ['team_id' => 24, 'name' => 'Shiro', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 24, 'name' => 'NothingToSay', 'country' => 'China', 'position' => 'Carry'],
            ['team_id' => 24, 'name' => 'Bach', 'country' => 'China', 'position' => 'Offlane'],
            ['team_id' => 24, 'name' => 'yu`', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 24, 'name' => 'plAnet', 'country' => 'China', 'position' => 'Support'],

            // Team Yandex
            ['team_id' => 25, 'name' => 'TA2000', 'country' => 'Russia/Eastern Europe', 'position' => 'Carry'],
            ['team_id' => 25, 'name' => 'CHIRA_JUNIOR', 'country' => 'Eastern Europe', 'position' => 'Mid'],
            ['team_id' => 25, 'name' => 'Noticed', 'country' => 'Eastern Europe', 'position' => 'Offlane'],
            ['team_id' => 25, 'name' => 'prblms', 'country' => 'Eastern Europe', 'position' => 'Support'],
            ['team_id' => 25, 'name' => 'Solo', 'country' => 'Eastern Europe', 'position' => 'Support'],
        
            // Yakult Brothers
            ['team_id' => 26, 'name' => 'flyfly', 'country' => 'China', 'position' => 'Carry'],
            ['team_id' => 26, 'name' => 'Emo', 'country' => 'China', 'position' => 'Mid'],
            ['team_id' => 26, 'name' => 'Beyond', 'country' => 'China', 'position' => 'Offlane'],
            ['team_id' => 26, 'name' => 'Oli', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 26, 'name' => 'BoBoKa', 'country' => 'China', 'position' => 'Support'],
        ]);        
    }
}