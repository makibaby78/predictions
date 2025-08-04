<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Support\Carbon;

class PlayersTableSeeder extends Seeder
{
    public function run(): void
    {
        $playersData = [
            ['team_id' => 1, 'game_id' => 2, 'name' => 'Lutpiii', 'country' => 'Indonesia', 'position' => 'EXP Laner'],
            ['team_id' => 1, 'game_id' => 2, 'name' => 'Kairi', 'country' => 'Philippines', 'position' => 'Jungler'],
            ['team_id' => 1, 'game_id' => 2, 'name' => 'Sanz', 'country' => 'Indonesia', 'position' => 'Mid Laner'],
            ['team_id' => 1, 'game_id' => 2, 'name' => 'Savero', 'country' => 'Indonesia', 'position' => 'Gold Laner'],
            ['team_id' => 1, 'game_id' => 2, 'name' => 'Kiboy', 'country' => 'Indonesia', 'position' => 'Roamer'],
        
            ['team_id' => 2, 'game_id' => 2, 'name' => 'Dyrennn', 'country' => 'Philippines', 'position' => 'EXP Laner'],
            ['team_id' => 2, 'game_id' => 2, 'name' => 'Sutsujin', 'country' => 'Philippines', 'position' => 'Jungler'],
            ['team_id' => 2, 'game_id' => 2, 'name' => 'Rinz', 'country' => 'Philippines', 'position' => 'Mid Laner'],
            ['team_id' => 2, 'game_id' => 2, 'name' => 'Toyy', 'country' => 'Philippines', 'position' => 'Gold Laner'],
            ['team_id' => 2, 'game_id' => 2, 'name' => 'Idok', 'country' => 'Philippines', 'position' => 'Roamer'],
        
            ['team_id' => 3, 'game_id' => 2, 'name' => 'Sanford', 'country' => 'Philippines', 'position' => 'EXP Laner'],
            ['team_id' => 3, 'game_id' => 2, 'name' => 'KarlTzy', 'country' => 'Philippines', 'position' => 'Jungler'],
            ['team_id' => 3, 'game_id' => 2, 'name' => 'Sanji', 'country' => 'Philippines', 'position' => 'Mid Laner'],
            ['team_id' => 3, 'game_id' => 2, 'name' => 'Oheb', 'country' => 'Philippines', 'position' => 'Gold Laner'],
            ['team_id' => 3, 'game_id' => 2, 'name' => 'Jaypee', 'country' => 'Philippines', 'position' => 'Roamer'],
        
            ['team_id' => 4, 'game_id' => 2, 'name' => 'Kirk', 'country' => 'Indonesia', 'position' => 'EXP Laner'],
            ['team_id' => 4, 'game_id' => 2, 'name' => 'Kingkong', 'country' => 'Indonesia', 'position' => 'Jungler'],
            ['team_id' => 4, 'game_id' => 2, 'name' => 'Super Frince', 'country' => 'Indonesia', 'position' => 'Mid Laner'],
            ['team_id' => 4, 'game_id' => 2, 'name' => 'Kelra', 'country' => 'Indonesia', 'position' => 'Gold Laner'],
            ['team_id' => 4, 'game_id' => 2, 'name' => 'Brusko', 'country' => 'Indonesia', 'position' => 'Roamer'],
        
            ['team_id' => 5, 'game_id' => 2, 'name' => 'Kramm', 'country' => 'Indonesia', 'position' => 'EXP Laner'],
            ['team_id' => 5, 'game_id' => 2, 'name' => 'Sekys', 'country' => 'Indonesia', 'position' => 'Jungler'],
            ['team_id' => 5, 'game_id' => 2, 'name' => 'Stormie', 'country' => 'Indonesia', 'position' => 'Mid Laner'],
            ['team_id' => 5, 'game_id' => 2, 'name' => 'Innocent', 'country' => 'Indonesia', 'position' => 'Gold Laner'],
            ['team_id' => 5, 'game_id' => 2, 'name' => 'Yums', 'country' => 'Indonesia', 'position' => 'Roamer'],
        
            ['team_id' => 6, 'game_id' => 2, 'name' => 'Vell', 'country' => 'Philippines', 'position' => 'EXP Laner'],
            ['team_id' => 6, 'game_id' => 2, 'name' => 'EyyMal', 'country' => 'Philippines', 'position' => 'Jungler'],
            ['team_id' => 6, 'game_id' => 2, 'name' => 'Izanami', 'country' => 'Philippines', 'position' => 'Mid Laner'],
            ['team_id' => 6, 'game_id' => 2, 'name' => 'Melqt', 'country' => 'Philippines', 'position' => 'Gold Laner'],
            ['team_id' => 6, 'game_id' => 2, 'name' => 'Ivann', 'country' => 'Philippines', 'position' => 'Roamer'],
        
            ['team_id' => 7, 'game_id' => 2, 'name' => 'Kennn', 'country' => 'Malaysia', 'position' => 'EXP Laner'],
            ['team_id' => 7, 'game_id' => 2, 'name' => 'Hadess', 'country' => 'Malaysia', 'position' => 'Jungler'],
            ['team_id' => 7, 'game_id' => 2, 'name' => 'KurtTzy', 'country' => 'Malaysia', 'position' => 'Mid Laner'],
            ['team_id' => 7, 'game_id' => 2, 'name' => 'Vanix', 'country' => 'Malaysia', 'position' => 'Gold Laner'],
            ['team_id' => 7, 'game_id' => 2, 'name' => ' JPL', 'country' => 'Malaysia', 'position' => 'Roamer'],
        
            ['team_id' => 8, 'game_id' => 2, 'name' => 'Wadu', 'country' => 'China', 'position' => 'EXP Laner'],
            ['team_id' => 8, 'game_id' => 2, 'name' => 'Detective', 'country' => 'China', 'position' => 'Jungler'],
            ['team_id' => 8, 'game_id' => 2, 'name' => 'Oppi', 'country' => 'China', 'position' => 'Mid Laner'],
            ['team_id' => 8, 'game_id' => 2, 'name' => 'Xingg', 'country' => 'China', 'position' => 'Gold Laner'],
            ['team_id' => 8, 'game_id' => 2, 'name' => 'Boxi', 'country' => 'China', 'position' => 'Roamer'],
        
            ['team_id' => 9, 'game_id' => 2, 'name' => 'DARK LORD', 'country' => 'Brazil', 'position' => 'EXP Laner'],
            ['team_id' => 9, 'game_id' => 2, 'name' => 'Throwboy', 'country' => 'Brazil', 'position' => 'Jungler'],
            ['team_id' => 9, 'game_id' => 2, 'name' => 'Quanok', 'country' => 'Brazil', 'position' => 'Mid Laner'],
            ['team_id' => 9, 'game_id' => 2, 'name' => 'Pharaoh', 'country' => 'Brazil', 'position' => 'Gold Laner'],
            ['team_id' => 9, 'game_id' => 2, 'name' => 'RiseCrim', 'country' => 'Brazil', 'position' => 'Roamer'],
        
            ['team_id' => 10, 'game_id' => 2, 'name' => 'Hesu', 'country' => 'Japan', 'position' => 'EXP Laner'],
            ['team_id' => 10, 'game_id' => 2, 'name' => 'Flick', 'country' => 'Japan', 'position' => 'Jungler'],
            ['team_id' => 10, 'game_id' => 2, 'name' => 'Frosttlaneve', 'country' => 'Japan', 'position' => 'Mid Laner'],
            ['team_id' => 10, 'game_id' => 2, 'name' => 'UpaaTzy', 'country' => 'Japan', 'position' => 'Gold Laner'],
            ['team_id' => 10, 'game_id' => 2, 'name' => 'Luiizz', 'country' => 'Japan', 'position' => 'Roamer'],
        
            ['team_id' => 11, 'game_id' => 2, 'name' => 'Kid Bomba', 'country' => 'Thailand', 'position' => 'EXP Laner'],
            ['team_id' => 11, 'game_id' => 2, 'name' => 'Oneshot', 'country' => 'Thailand', 'position' => 'Jungler'],
            ['team_id' => 11, 'game_id' => 2, 'name' => 'Sunset Lover', 'country' => 'Thailand', 'position' => 'Mid Laner'],
            ['team_id' => 11, 'game_id' => 2, 'name' => 'Hiko', 'country' => 'Thailand', 'position' => 'Gold Laner'],
            ['team_id' => 11, 'game_id' => 2, 'name' => 'SAWO', 'country' => 'Thailand', 'position' => 'Roamer'],
        
            ['team_id' => 12, 'game_id' => 2, 'name' => 'Lunar', 'country' => 'Greece', 'position' => 'EXP Laner'],
            ['team_id' => 12, 'game_id' => 2, 'name' => 'Tienzy', 'country' => 'Greece', 'position' => 'Jungler'],
            ['team_id' => 12, 'game_id' => 2, 'name' => 'Rosa', 'country' => 'Greece', 'position' => 'Mid Laner'],
            ['team_id' => 12, 'game_id' => 2, 'name' => 'Sigibum', 'country' => 'Greece', 'position' => 'Gold Laner'],
            ['team_id' => 12, 'game_id' => 2, 'name' => 'APEX47', 'country' => 'Greece', 'position' => 'Roamer'],
        
            ['team_id' => 13, 'game_id' => 2, 'name' => 'URESHIII', 'country' => 'Russia', 'position' => 'EXP Laner'],
            ['team_id' => 13, 'game_id' => 2, 'name' => 'Shiro', 'country' => 'Russia', 'position' => 'Jungler'],
            ['team_id' => 13, 'game_id' => 2, 'name' => 'HUNTER', 'country' => 'Russia', 'position' => 'Mid Laner'],
            ['team_id' => 13, 'game_id' => 2, 'name' => 'ISO', 'country' => 'Russia', 'position' => 'Gold Laner'],
            ['team_id' => 13, 'game_id' => 2, 'name' => 'JOYBOJ', 'country' => 'Russia', 'position' => 'Roamer'],
        
            ['team_id' => 14, 'game_id' => 2, 'name' => 'Khunn', 'country' => 'Mexico', 'position' => 'EXP Laner'],
            ['team_id' => 14, 'game_id' => 2, 'name' => 'Kenn', 'country' => 'Mexico', 'position' => 'Jungler'],
            ['team_id' => 14, 'game_id' => 2, 'name' => 'Niko', 'country' => 'Mexico', 'position' => 'Mid Laner'],
            ['team_id' => 14, 'game_id' => 2, 'name' => 'Zippx', 'country' => 'Mexico', 'position' => 'Gold Laner'],
            ['team_id' => 14, 'game_id' => 2, 'name' => 'Bo Ye', 'country' => 'Mexico', 'position' => 'Roamer'],
        
            ['team_id' => 15, 'game_id' => 2, 'name' => 'Zzzed', 'country' => 'China', 'position' => 'Roamer'],
            ['team_id' => 15, 'game_id' => 2, 'name' => 'Kielvj','country' => 'Philippines','position' => 'EXP Laner'],
            ['team_id' => 15,'game_id' => 2, 'name' => 'Super Kenn','country' => 'Indonesia','position' => 'Jungler'],
            ['team_id' => 15,'game_id' => 2, 'name' => 'Yione','country' => 'China','position' => 'Mid Laner'],
            ['team_id' => 15,'game_id' => 2, 'name' => 'Loong','country' => 'China','position' => 'Gold Laner'],

            ['team_id' => 16, 'game_id' => 2, 'name' => 'Pluto ', 'country' => 'Russia', 'position' => 'Roamer'],
            ['team_id' => 16, 'game_id' => 2, 'name' => 'BadKot', 'country' => 'China', 'position' => 'EXP Laner'],
            ['team_id' => 16, 'game_id' => 2, 'name' => 'Andoryuuu', 'country' => 'China', 'position' => 'Jungler'],
            ['team_id' => 16, 'game_id' => 2, 'name' => 'sorrybae', 'country' => 'China', 'position' => 'Mid Laner'],
            ['team_id' => 16, 'game_id' => 2, 'name' => 'Super Egorka', 'country' => 'China', 'position' => 'Gold Laner'],

            ['team_id' => 17, 'game_id' => 1, 'name' => 'Satanic', 'country' => 'China', 'position' => 'Carry'],
            ['team_id' => 17, 'game_id' => 1, 'name' => 'No[o]ne', 'country' => 'China', 'position' => 'Mid'],
            ['team_id' => 17, 'game_id' => 1, 'name' => 'DM', 'country' => 'China', 'position' => 'Offlane'],
            ['team_id' => 17, 'game_id' => 1, 'name' => 'Dukalis', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 17, 'game_id' => 1, 'name' => '9Class', 'country' => 'China', 'position' => 'Support'],

            // Tundra
            ['team_id' => 18, 'game_id' => 1, 'name' => 'Crystallis', 'country' => 'China', 'position' => 'Carry'],
            ['team_id' => 18, 'game_id' => 1, 'name' => 'bzm', 'country' => 'China', 'position' => 'Mid'],
            ['team_id' => 18, 'game_id' => 1, 'name' => '33', 'country' => 'China', 'position' => 'Offlane'],
            ['team_id' => 18, 'game_id' => 1, 'name' => 'Saksa', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 18, 'game_id' => 1, 'name' => 'Whitemon', 'country' => 'China', 'position' => 'Support'],

            // Nigma
            ['team_id' => 19, 'game_id' => 1, 'name' => 'Ghost', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 19, 'game_id' => 1, 'name' => 'SumaiL', 'country' => 'China', 'position' => 'Carry'],
            ['team_id' => 19, 'game_id' => 1, 'name' => 'No!ob™', 'country' => 'China', 'position' => 'Offlane'],
            ['team_id' => 19, 'game_id' => 1, 'name' => 'OmaR`', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 19, 'game_id' => 1, 'name' => 'GH', 'country' => 'China', 'position' => 'Support'],

            // Xtreme Gaming
            ['team_id' => 20, 'game_id' => 1, 'name' => 'Ame', 'country' => 'China', 'position' => 'Carry'],
            ['team_id' => 20, 'game_id' => 1, 'name' => 'Xm', 'country' => 'China', 'position' => 'Mid'],
            ['team_id' => 20, 'game_id' => 1, 'name' => 'Xxs', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 20, 'game_id' => 1, 'name' => 'Poloson', 'country' => 'Malaysia/China', 'position' => 'Support'], // standby
            ['team_id' => 20, 'game_id' => 1, 'name' => 'xNova‑', 'country' => 'Singapore', 'position' => 'Support (stand‑in)'],

            // BOOM Esports
            ['team_id' => 21, 'game_id' => 1, 'name' => 'JaCkky', 'country' => 'Laos', 'position' => 'Midlane'],
            ['team_id' => 21, 'game_id' => 1, 'name' => 'Armel', 'country' => 'Philippines', 'position' => 'Carry'],
            ['team_id' => 21, 'game_id' => 1, 'name' => 'Jabz', 'country' => 'Thailand', 'position' => 'Carry'],
            ['team_id' => 21, 'game_id' => 1, 'name' => 'Tims', 'country' => 'Philippines', 'position' => 'Carry'],
            ['team_id' => 21, 'game_id' => 1, 'name' => 'Jaunuel', 'country' => 'Philippines', 'position' => 'Carry'],

            // BETBOOM Esports
            ['team_id' => 22, 'game_id' => 1, 'name' => 'Pure', 'country' => 'Russia', 'position' => 'Midlane'],
            ['team_id' => 22, 'game_id' => 1, 'name' => 'gpk~', 'country' => 'Russia', 'position' => 'Carry'],
            ['team_id' => 22, 'game_id' => 1, 'name' => 'MieRo', 'country' => 'Russia', 'position' => 'Carry'],
            ['team_id' => 22, 'game_id' => 1, 'name' => 'Save-', 'country' => 'Moldova', 'position' => 'Carry'],
            ['team_id' => 22, 'game_id' => 1, 'name' => 'Kataomi`', 'country' => 'Russia`', 'position' => 'Carry'],

            // Gaimin Gladiators
            ['team_id' => 23, 'game_id' => 1, 'name' => 'watson', 'country' => 'Europe/MENA', 'position' => 'Carry'],
            ['team_id' => 23, 'game_id' => 1, 'name' => 'Quinn', 'country' => 'Europe', 'position' => 'Mid'],
            ['team_id' => 23, 'game_id' => 1, 'name' => 'Ace', 'country' => 'Europe', 'position' => 'Offlane'],
            ['team_id' => 23, 'game_id' => 1, 'name' => 'Malady', 'country' => 'Europe', 'position' => 'Support'],
            ['team_id' => 23, 'game_id' => 1, 'name' => 'tOfu', 'country' => 'Europe', 'position' => 'Support'],
        
            // Team Tidebound (All Gamers Global)
            ['team_id' => 24, 'game_id' => 1, 'name' => 'Shiro', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 24, 'game_id' => 1, 'name' => 'NothingToSay', 'country' => 'China', 'position' => 'Carry'],
            ['team_id' => 24, 'game_id' => 1, 'name' => 'Bach', 'country' => 'China', 'position' => 'Offlane'],
            ['team_id' => 24, 'game_id' => 1, 'name' => 'yu`', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 24, 'game_id' => 1, 'name' => 'plAnet', 'country' => 'China', 'position' => 'Support'],

            // Team Yandex
            ['team_id' => 25, 'game_id' => 1, 'name' => 'TA2000', 'country' => 'Russia/Eastern Europe', 'position' => 'Carry'],
            ['team_id' => 25, 'game_id' => 1, 'name' => 'CHIRA_JUNIOR', 'country' => 'Eastern Europe', 'position' => 'Mid'],
            ['team_id' => 25, 'game_id' => 1, 'name' => 'Noticed', 'country' => 'Eastern Europe', 'position' => 'Offlane'],
            ['team_id' => 25, 'game_id' => 1, 'name' => 'prblms', 'country' => 'Eastern Europe', 'position' => 'Support'],
            ['team_id' => 25, 'game_id' => 1, 'name' => 'Solo', 'country' => 'Eastern Europe', 'position' => 'Support'],
        
            // Yakult Brothers
            ['team_id' => 26, 'game_id' => 1, 'name' => 'flyfly', 'country' => 'China', 'position' => 'Carry'],
            ['team_id' => 26, 'game_id' => 1, 'name' => 'Emo', 'country' => 'China', 'position' => 'Mid'],
            ['team_id' => 26, 'game_id' => 1, 'name' => 'Beyond', 'country' => 'China', 'position' => 'Offlane'],
            ['team_id' => 26, 'game_id' => 1, 'name' => 'Oli', 'country' => 'China', 'position' => 'Support'],
            ['team_id' => 26, 'game_id' => 1, 'name' => 'BoBoKa', 'country' => 'China', 'position' => 'Support'],
        ];
            

        foreach ($playersData as $data) {
            $team = Team::find($data['team_id']);
            if (!$team) continue;

            $player = Player::create([
                'game_id' => $data['game_id'], 
                'name' => $data['name'],
                'country' => $data['country'],
                'position' => $data['position'],
            ]);

            $player->teams()->attach($team->id, [
                'joined_at' => Carbon::now()
            ]);
        }
    }
}
