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
            ['team_id' => 1, 'name' => 'Lutpiii', 'country' => 'Indonesia', 'position' => 'EXP Laner'],
            ['team_id' => 1, 'name' => 'Kairi', 'country' => 'Philippines', 'position' => 'Jungler'],
            ['team_id' => 1, 'name' => 'Sanz', 'country' => 'Indonesia', 'position' => 'Mid Laner'],
            ['team_id' => 1, 'name' => 'Savero', 'country' => 'Indonesia', 'position' => 'Gold Laner'],
            ['team_id' => 1, 'name' => 'Kiboy', 'country' => 'Indonesia', 'position' => 'Roamer'],
        
            ['team_id' => 2, 'name' => 'Dyrennn', 'country' => 'Philippines', 'position' => 'EXP Laner'],
            ['team_id' => 2, 'name' => 'Sutsujin', 'country' => 'Philippines', 'position' => 'Jungler'],
            ['team_id' => 2, 'name' => 'Rinz', 'country' => 'Philippines', 'position' => 'Mid Laner'],
            ['team_id' => 2, 'name' => 'Toyy', 'country' => 'Philippines', 'position' => 'Gold Laner'],
            ['team_id' => 2, 'name' => 'Idok', 'country' => 'Philippines', 'position' => 'Roamer'],
        
            ['team_id' => 3, 'name' => 'Sanford', 'country' => 'Philippines', 'position' => 'EXP Laner'],
            ['team_id' => 3, 'name' => 'KarlTzy', 'country' => 'Philippines', 'position' => 'Jungler'],
            ['team_id' => 3, 'name' => 'Sanji', 'country' => 'Philippines', 'position' => 'Mid Laner'],
            ['team_id' => 3, 'name' => 'Oheb', 'country' => 'Philippines', 'position' => 'Gold Laner'],
            ['team_id' => 3, 'name' => 'Jaypee', 'country' => 'Philippines', 'position' => 'Roamer'],
        
            ['team_id' => 4, 'name' => 'Kirk', 'country' => 'Indonesia', 'position' => 'EXP Laner'],
            ['team_id' => 4, 'name' => 'Kingkong', 'country' => 'Indonesia', 'position' => 'Jungler'],
            ['team_id' => 4, 'name' => 'Super Frince', 'country' => 'Indonesia', 'position' => 'Mid Laner'],
            ['team_id' => 4, 'name' => 'Kelra', 'country' => 'Indonesia', 'position' => 'Gold Laner'],
            ['team_id' => 4, 'name' => 'Brusko', 'country' => 'Indonesia', 'position' => 'Roamer'],
        
            ['team_id' => 5, 'name' => 'Kramm', 'country' => 'Indonesia', 'position' => 'EXP Laner'],
            ['team_id' => 5, 'name' => 'Sekys', 'country' => 'Indonesia', 'position' => 'Jungler'],
            ['team_id' => 5, 'name' => 'Stormie', 'country' => 'Indonesia', 'position' => 'Mid Laner'],
            ['team_id' => 5, 'name' => 'Innocent', 'country' => 'Indonesia', 'position' => 'Gold Laner'],
            ['team_id' => 5, 'name' => 'Yums', 'country' => 'Indonesia', 'position' => 'Roamer'],
        
            ['team_id' => 6, 'name' => 'Vell', 'country' => 'Philippines', 'position' => 'EXP Laner'],
            ['team_id' => 6, 'name' => 'EyyMal', 'country' => 'Philippines', 'position' => 'Jungler'],
            ['team_id' => 6, 'name' => 'Izanami', 'country' => 'Philippines', 'position' => 'Mid Laner'],
            ['team_id' => 6, 'name' => 'Melqt', 'country' => 'Philippines', 'position' => 'Gold Laner'],
            ['team_id' => 6, 'name' => 'Ivann', 'country' => 'Philippines', 'position' => 'Roamer'],
        
            ['team_id' => 7, 'name' => 'Kennn', 'country' => 'Malaysia', 'position' => 'EXP Laner'],
            ['team_id' => 7, 'name' => 'Hadess', 'country' => 'Malaysia', 'position' => 'Jungler'],
            ['team_id' => 7, 'name' => 'KurtTzy', 'country' => 'Malaysia', 'position' => 'Mid Laner'],
            ['team_id' => 7, 'name' => 'Vanix', 'country' => 'Malaysia', 'position' => 'Gold Laner'],
            ['team_id' => 7, 'name' => ' JPL', 'country' => 'Malaysia', 'position' => 'Roamer'],
        
            ['team_id' => 8, 'name' => 'Wadu', 'country' => 'China', 'position' => 'EXP Laner'],
            ['team_id' => 8, 'name' => 'Detective', 'country' => 'China', 'position' => 'Jungler'],
            ['team_id' => 8, 'name' => 'Oppi', 'country' => 'China', 'position' => 'Mid Laner'],
            ['team_id' => 8, 'name' => 'Xingg', 'country' => 'China', 'position' => 'Gold Laner'],
            ['team_id' => 8, 'name' => 'Boxi', 'country' => 'China', 'position' => 'Roamer'],
        
            ['team_id' => 9, 'name' => 'DARK LORD', 'country' => 'Brazil', 'position' => 'EXP Laner'],
            ['team_id' => 9, 'name' => 'Throwboy', 'country' => 'Brazil', 'position' => 'Jungler'],
            ['team_id' => 9, 'name' => 'Quanok', 'country' => 'Brazil', 'position' => 'Mid Laner'],
            ['team_id' => 9, 'name' => 'Pharaoh', 'country' => 'Brazil', 'position' => 'Gold Laner'],
            ['team_id' => 9, 'name' => 'RiseCrim', 'country' => 'Brazil', 'position' => 'Roamer'],
        
            ['team_id' => 10, 'name' => 'Hesu', 'country' => 'Japan', 'position' => 'EXP Laner'],
            ['team_id' => 10, 'name' => 'Flick', 'country' => 'Japan', 'position' => 'Jungler'],
            ['team_id' => 10, 'name' => 'Frosttlaneve', 'country' => 'Japan', 'position' => 'Mid Laner'],
            ['team_id' => 10, 'name' => 'UpaaTzy', 'country' => 'Japan', 'position' => 'Gold Laner'],
            ['team_id' => 10, 'name' => 'Luiizz', 'country' => 'Japan', 'position' => 'Roamer'],
        
            ['team_id' => 11, 'name' => 'Kid Bomba', 'country' => 'Thailand', 'position' => 'EXP Laner'],
            ['team_id' => 11, 'name' => 'Oneshot', 'country' => 'Thailand', 'position' => 'Jungler'],
            ['team_id' => 11, 'name' => 'Sunset Lover', 'country' => 'Thailand', 'position' => 'Mid Laner'],
            ['team_id' => 11, 'name' => 'Hiko', 'country' => 'Thailand', 'position' => 'Gold Laner'],
            ['team_id' => 11, 'name' => 'SAWO', 'country' => 'Thailand', 'position' => 'Roamer'],
        
            ['team_id' => 12, 'name' => 'Lunar', 'country' => 'Greece', 'position' => 'EXP Laner'],
            ['team_id' => 12, 'name' => 'Tienzy', 'country' => 'Greece', 'position' => 'Jungler'],
            ['team_id' => 12, 'name' => 'Rosa', 'country' => 'Greece', 'position' => 'Mid Laner'],
            ['team_id' => 12, 'name' => 'Sigibum', 'country' => 'Greece', 'position' => 'Gold Laner'],
            ['team_id' => 12, 'name' => 'APEX47', 'country' => 'Greece', 'position' => 'Roamer'],
        
            ['team_id' => 13, 'name' => 'URESHIII', 'country' => 'Russia', 'position' => 'EXP Laner'],
            ['team_id' => 13, 'name' => 'Shiro', 'country' => 'Russia', 'position' => 'Jungler'],
            ['team_id' => 13, 'name' => 'HUNTER', 'country' => 'Russia', 'position' => 'Mid Laner'],
            ['team_id' => 13, 'name' => 'ISO', 'country' => 'Russia', 'position' => 'Gold Laner'],
            ['team_id' => 13, 'name' => 'JOYBOJ', 'country' => 'Russia', 'position' => 'Roamer'],
        
            ['team_id' => 14, 'name' => 'Khunn', 'country' => 'Mexico', 'position' => 'EXP Laner'],
            ['team_id' => 14, 'name' => 'Kenn', 'country' => 'Mexico', 'position' => 'Jungler'],
            ['team_id' => 14, 'name' => 'Niko', 'country' => 'Mexico', 'position' => 'Mid Laner'],
            ['team_id' => 14, 'name' => 'Zippx', 'country' => 'Mexico', 'position' => 'Gold Laner'],
            ['team_id' => 14, 'name' => 'Bo Ye', 'country' => 'Mexico', 'position' => 'Roamer'],
        
            ['team_id' => 15, 'name' => 'Zzzed', 'country' => 'China', 'position' => 'Roamer'],
            ['team_id' => 15, 'name' => 'Kielvj','country' => 'Philippines','position' => 'EXP Laner'],
            ['team_id' => 15,'name' => 'Super Kenn','country' => 'Indonesia','position' => 'Jungler'],
            ['team_id' => 15,'name' => 'Yione','country' => 'China','position' => 'Mid Laner'],
            ['team_id' => 15,'name' => 'Loong','country' => 'China','position' => 'Gold Laner'],

            ['team_id' => 16, 'name' => 'Pluto ', 'country' => 'Russia', 'position' => 'Roamer'],
            ['team_id' => 16, 'name' => 'BadKot', 'country' => 'China', 'position' => 'EXP Laner'],
            ['team_id' => 16, 'name' => 'Andoryuuu', 'country' => 'China', 'position' => 'Jungler'],
            ['team_id' => 16, 'name' => 'sorrybae', 'country' => 'China', 'position' => 'Mid Laner'],
            ['team_id' => 16, 'name' => 'Super Egorka', 'country' => 'China', 'position' => 'Gold Laner'],

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
            ['team_id' => 21, 'name' => 'JaCkky', 'country' => 'Laos', 'position' => 'Midlane'],
            ['team_id' => 21, 'name' => 'Armel', 'country' => 'Philippines', 'position' => 'Carry'],
            ['team_id' => 21, 'name' => 'Jabz', 'country' => 'Thailand', 'position' => 'Carry'],
            ['team_id' => 21, 'name' => 'Tims', 'country' => 'Philippines', 'position' => 'Carry'],
            ['team_id' => 21, 'name' => 'Jaunuel', 'country' => 'Philippines', 'position' => 'Carry'],

            // BETBOOM Esports
            ['team_id' => 22, 'name' => 'Pure', 'country' => 'Russia', 'position' => 'Midlane'],
            ['team_id' => 22, 'name' => 'gpk~', 'country' => 'Russia', 'position' => 'Carry'],
            ['team_id' => 22, 'name' => 'MieRo', 'country' => 'Russia', 'position' => 'Carry'],
            ['team_id' => 22, 'name' => 'Save-', 'country' => 'Moldova', 'position' => 'Carry'],
            ['team_id' => 22, 'name' => 'Kataomi`', 'country' => 'Russia`', 'position' => 'Carry'],

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
        ];
            

        foreach ($playersData as $data) {
            $team = Team::find($data['team_id']);
            if (!$team) continue;

            $player = Player::create([
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
