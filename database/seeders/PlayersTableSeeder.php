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
        
            ['team_id' => 2, 'name' => 'Edward', 'country' => 'Philippines', 'position' => 'EXP Laner'],
            ['team_id' => 2, 'name' => 'Wise', 'country' => 'Philippines', 'position' => 'Jungler'],
            ['team_id' => 2, 'name' => 'Hadji', 'country' => 'Philippines', 'position' => 'Mid Laner'],
            ['team_id' => 2, 'name' => 'Oheb', 'country' => 'Philippines', 'position' => 'Gold Laner'],
            ['team_id' => 2, 'name' => 'Yue', 'country' => 'Philippines', 'position' => 'Roamer'],
        
            ['team_id' => 3, 'name' => 'FlapTzy', 'country' => 'Philippines', 'position' => 'EXP Laner'],
            ['team_id' => 3, 'name' => 'KyleTzy', 'country' => 'Philippines', 'position' => 'Jungler'],
            ['team_id' => 3, 'name' => 'Pheww', 'country' => 'Philippines', 'position' => 'Mid Laner'],
            ['team_id' => 3, 'name' => 'Super Marco', 'country' => 'Philippines', 'position' => 'Gold Laner'],
            ['team_id' => 3, 'name' => 'SANJI', 'country' => 'Philippines', 'position' => 'Roamer'],
        
            ['team_id' => 4, 'name' => 'R7', 'country' => 'Indonesia', 'position' => 'EXP Laner'],
            ['team_id' => 4, 'name' => 'Albert', 'country' => 'Indonesia', 'position' => 'Jungler'],
            ['team_id' => 4, 'name' => 'Clay', 'country' => 'Indonesia', 'position' => 'Mid Laner'],
            ['team_id' => 4, 'name' => 'Skylar', 'country' => 'Indonesia', 'position' => 'Gold Laner'],
            ['team_id' => 4, 'name' => 'Vyn', 'country' => 'Indonesia', 'position' => 'Roamer'],
        
            ['team_id' => 5, 'name' => 'XINNN', 'country' => 'Indonesia', 'position' => 'EXP Laner'],
            ['team_id' => 5, 'name' => 'Lemon', 'country' => 'Indonesia', 'position' => 'Jungler'],
            ['team_id' => 5, 'name' => 'Tazz', 'country' => 'Indonesia', 'position' => 'Mid Laner'],
            ['team_id' => 5, 'name' => 'DreamS', 'country' => 'Indonesia', 'position' => 'Gold Laner'],
            ['team_id' => 5, 'name' => 'Kiboy', 'country' => 'Indonesia', 'position' => 'Roamer'],
        
            ['team_id' => 6, 'name' => 'Ange1', 'country' => 'Philippines', 'position' => 'EXP Laner'],
            ['team_id' => 6, 'name' => 'Ghost', 'country' => 'Philippines', 'position' => 'Jungler'],
            ['team_id' => 6, 'name' => 'Bane', 'country' => 'Philippines', 'position' => 'Mid Laner'],
            ['team_id' => 6, 'name' => 'Saint', 'country' => 'Philippines', 'position' => 'Gold Laner'],
            ['team_id' => 6, 'name' => 'Dexter', 'country' => 'Philippines', 'position' => 'Roamer'],
        
            ['team_id' => 7, 'name' => 'Axel', 'country' => 'Malaysia', 'position' => 'EXP Laner'],
            ['team_id' => 7, 'name' => 'Maxx', 'country' => 'Malaysia', 'position' => 'Jungler'],
            ['team_id' => 7, 'name' => 'Rin', 'country' => 'Malaysia', 'position' => 'Mid Laner'],
            ['team_id' => 7, 'name' => 'Zack', 'country' => 'Malaysia', 'position' => 'Gold Laner'],
            ['team_id' => 7, 'name' => 'Yura', 'country' => 'Malaysia', 'position' => 'Roamer'],
        
            ['team_id' => 8, 'name' => 'Qing', 'country' => 'China', 'position' => 'EXP Laner'],
            ['team_id' => 8, 'name' => 'Lei', 'country' => 'China', 'position' => 'Jungler'],
            ['team_id' => 8, 'name' => 'Bao', 'country' => 'China', 'position' => 'Mid Laner'],
            ['team_id' => 8, 'name' => 'Ming', 'country' => 'China', 'position' => 'Gold Laner'],
            ['team_id' => 8, 'name' => 'Nan', 'country' => 'China', 'position' => 'Roamer'],
        
            ['team_id' => 9, 'name' => 'Rio', 'country' => 'Brazil', 'position' => 'EXP Laner'],
            ['team_id' => 9, 'name' => 'Joao', 'country' => 'Brazil', 'position' => 'Jungler'],
            ['team_id' => 9, 'name' => 'Felipe', 'country' => 'Brazil', 'position' => 'Mid Laner'],
            ['team_id' => 9, 'name' => 'Lucas', 'country' => 'Brazil', 'position' => 'Gold Laner'],
            ['team_id' => 9, 'name' => 'Mateus', 'country' => 'Brazil', 'position' => 'Roamer'],
        
            ['team_id' => 10, 'name' => 'Kenji', 'country' => 'Japan', 'position' => 'EXP Laner'],
            ['team_id' => 10, 'name' => 'Tomo', 'country' => 'Japan', 'position' => 'Jungler'],
            ['team_id' => 10, 'name' => 'Hiro', 'country' => 'Japan', 'position' => 'Mid Laner'],
            ['team_id' => 10, 'name' => 'Aki', 'country' => 'Japan', 'position' => 'Gold Laner'],
            ['team_id' => 10, 'name' => 'Sota', 'country' => 'Japan', 'position' => 'Roamer'],
        
            ['team_id' => 11, 'name' => 'Mika', 'country' => 'Thailand', 'position' => 'EXP Laner'],
            ['team_id' => 11, 'name' => 'Tawan', 'country' => 'Thailand', 'position' => 'Jungler'],
            ['team_id' => 11, 'name' => 'Krit', 'country' => 'Thailand', 'position' => 'Mid Laner'],
            ['team_id' => 11, 'name' => 'Jirayu', 'country' => 'Thailand', 'position' => 'Gold Laner'],
            ['team_id' => 11, 'name' => 'Phon', 'country' => 'Thailand', 'position' => 'Roamer'],
        
            ['team_id' => 12, 'name' => 'Aris', 'country' => 'Greece', 'position' => 'EXP Laner'],
            ['team_id' => 12, 'name' => 'Niko', 'country' => 'Greece', 'position' => 'Jungler'],
            ['team_id' => 12, 'name' => 'Stelios', 'country' => 'Greece', 'position' => 'Mid Laner'],
            ['team_id' => 12, 'name' => 'Leon', 'country' => 'Greece', 'position' => 'Gold Laner'],
            ['team_id' => 12, 'name' => 'Petros', 'country' => 'Greece', 'position' => 'Roamer'],
        
            ['team_id' => 13, 'name' => 'Ivan', 'country' => 'Russia', 'position' => 'EXP Laner'],
            ['team_id' => 13, 'name' => 'Sergei', 'country' => 'Russia', 'position' => 'Jungler'],
            ['team_id' => 13, 'name' => 'Alexei', 'country' => 'Russia', 'position' => 'Mid Laner'],
            ['team_id' => 13, 'name' => 'Nikita', 'country' => 'Russia', 'position' => 'Gold Laner'],
            ['team_id' => 13, 'name' => 'Dmitri', 'country' => 'Russia', 'position' => 'Roamer'],
        
            ['team_id' => 14, 'name' => 'Luis', 'country' => 'Mexico', 'position' => 'EXP Laner'],
            ['team_id' => 14, 'name' => 'Carlos', 'country' => 'Mexico', 'position' => 'Jungler'],
            ['team_id' => 14, 'name' => 'Fernando', 'country' => 'Mexico', 'position' => 'Mid Laner'],
            ['team_id' => 14, 'name' => 'Jorge', 'country' => 'Mexico', 'position' => 'Gold Laner'],
            ['team_id' => 14, 'name' => 'Miguel', 'country' => 'Mexico', 'position' => 'Roamer'],
        
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
