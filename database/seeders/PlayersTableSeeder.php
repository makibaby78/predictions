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
            ['team_id' => 1, 'game_id' => 2, 'name' => 'Lutpiii', 'country_id' => 2, 'position' => 'EXP Laner'],
            ['team_id' => 1, 'game_id' => 2, 'name' => 'Kairi', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 1, 'game_id' => 2, 'name' => 'Sanz', 'country_id' => 2, 'position' => 'Mid Laner'],
            ['team_id' => 1, 'game_id' => 2, 'name' => 'Savero', 'country_id' => 2, 'position' => 'Gold Laner'],
            ['team_id' => 1, 'game_id' => 2, 'name' => 'Kiboy', 'country_id' => 2, 'position' => 'Roamer'],
        
            ['team_id' => 2, 'game_id' => 2, 'name' => 'Dyrennn', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 2, 'game_id' => 2, 'name' => 'Sutsujin', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 2, 'game_id' => 2, 'name' => 'Rinz', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 2, 'game_id' => 2, 'name' => 'Toyy', 'country_id' => 1, 'position' => 'Gold Laner'],
            ['team_id' => 2, 'game_id' => 2, 'name' => 'Idok', 'country_id' => 1, 'position' => 'Roamer'],
        
            ['team_id' => 3, 'game_id' => 2, 'name' => 'Sanford', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 3, 'game_id' => 2, 'name' => 'KarlTzy', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 3, 'game_id' => 2, 'name' => 'Sanji', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 3, 'game_id' => 2, 'name' => 'Oheb', 'country_id' => 1, 'position' => 'Gold Laner'],
            ['team_id' => 3, 'game_id' => 2, 'name' => 'Jaypee', 'country_id' => 1, 'position' => 'Roamer'],
        
            ['team_id' => 4, 'game_id' => 2, 'name' => 'Kirk', 'country_id' => 2, 'position' => 'EXP Laner'],
            ['team_id' => 4, 'game_id' => 2, 'name' => 'Kingkong', 'country_id' => 2, 'position' => 'Jungler'],
            ['team_id' => 4, 'game_id' => 2, 'name' => 'Super Frince', 'country_id' => 2, 'position' => 'Mid Laner'],
            ['team_id' => 4, 'game_id' => 2, 'name' => 'Kelra', 'country_id' => 2, 'position' => 'Gold Laner'],
            ['team_id' => 4, 'game_id' => 2, 'name' => 'Brusko', 'country_id' => 2, 'position' => 'Roamer'],
        
            ['team_id' => 5, 'game_id' => 2, 'name' => 'Kramm', 'country_id' => 2, 'position' => 'EXP Laner'],
            ['team_id' => 5, 'game_id' => 2, 'name' => 'Sekys', 'country_id' => 2, 'position' => 'Jungler'],
            ['team_id' => 5, 'game_id' => 2, 'name' => 'Stormie', 'country_id' => 2, 'position' => 'Mid Laner'],
            ['team_id' => 5, 'game_id' => 2, 'name' => 'Innocent', 'country_id' => 2, 'position' => 'Gold Laner'],
            ['team_id' => 5, 'game_id' => 2, 'name' => 'Yums', 'country_id' => 2, 'position' => 'Roamer'],
        
            ['team_id' => 6, 'game_id' => 2, 'name' => 'Vell', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 6, 'game_id' => 2, 'name' => 'EyyMal', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 6, 'game_id' => 2, 'name' => 'Izanami', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 6, 'game_id' => 2, 'name' => 'Melqt', 'country_id' => 1, 'position' => 'Gold Laner'],
            ['team_id' => 6, 'game_id' => 2, 'name' => 'Ivann', 'country_id' => 1, 'position' => 'Roamer'],
        
            ['team_id' => 7, 'game_id' => 2, 'name' => 'Kennn', 'country_id' => 3, 'position' => 'EXP Laner'],
            ['team_id' => 7, 'game_id' => 2, 'name' => 'Hadess', 'country_id' => 3, 'position' => 'Jungler'],
            ['team_id' => 7, 'game_id' => 2, 'name' => 'KurtTzy', 'country_id' => 3, 'position' => 'Mid Laner'],
            ['team_id' => 7, 'game_id' => 2, 'name' => 'Vanix', 'country_id' => 3, 'position' => 'Gold Laner'],
            ['team_id' => 7, 'game_id' => 2, 'name' => ' JPL', 'country_id' => 3, 'position' => 'Roamer'],
        
            ['team_id' => 8, 'game_id' => 2, 'name' => 'Wadu', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 8, 'game_id' => 2, 'name' => 'Detective', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 8, 'game_id' => 2, 'name' => 'Oppi', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 8, 'game_id' => 2, 'name' => 'Xingg', 'country_id' => 1, 'position' => 'Gold Laner'],
            ['team_id' => 8, 'game_id' => 2, 'name' => 'Boxi', 'country_id' => 1, 'position' => 'Roamer'],
        
            ['team_id' => 9, 'game_id' => 2, 'name' => 'DARK LORD', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 9, 'game_id' => 2, 'name' => 'Throwboy', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 9, 'game_id' => 2, 'name' => 'Quanok', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 9, 'game_id' => 2, 'name' => 'Pharaoh', 'country_id' => 1, 'position' => 'Gold Laner'],
            ['team_id' => 9, 'game_id' => 2, 'name' => 'RiseCrim', 'country_id' => 1, 'position' => 'Roamer'],
        
            ['team_id' => 10, 'game_id' => 2, 'name' => 'Hesu', 'country_id' => 2, 'position' => 'EXP Laner'],
            ['team_id' => 10, 'game_id' => 2, 'name' => 'Flick', 'country_id' => 2, 'position' => 'Jungler'],
            ['team_id' => 10, 'game_id' => 2, 'name' => 'Frosttlaneve', 'country_id' => 2, 'position' => 'Mid Laner'],
            ['team_id' => 10, 'game_id' => 2, 'name' => 'UpaaTzy', 'country_id' => 2, 'position' => 'Gold Laner'],
            ['team_id' => 10, 'game_id' => 2, 'name' => 'Luiizz', 'country_id' => 2, 'position' => 'Roamer'],
        
            ['team_id' => 11, 'game_id' => 2, 'name' => 'Kid Bomba', 'country_id' => 2, 'position' => 'EXP Laner'],
            ['team_id' => 11, 'game_id' => 2, 'name' => 'Oneshot', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 11, 'game_id' => 2, 'name' => 'Sunset Lover', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 11, 'game_id' => 2, 'name' => 'Hiko', 'country_id' => 1, 'position' => 'Gold Laner'],
            ['team_id' => 11, 'game_id' => 2, 'name' => 'SAWO', 'country_id' => 1, 'position' => 'Roamer'],
        
            ['team_id' => 12, 'game_id' => 2, 'name' => 'Lunar', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 12, 'game_id' => 2, 'name' => 'Tienzy', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 12, 'game_id' => 2, 'name' => 'Rosa', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 12, 'game_id' => 2, 'name' => 'Sigibum', 'country_id' => 1, 'position' => 'Gold Laner'],
            ['team_id' => 12, 'game_id' => 2, 'name' => 'APEX47', 'country_id' => 1, 'position' => 'Roamer'],
        
            ['team_id' => 13, 'game_id' => 2, 'name' => 'URESHIII', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 13, 'game_id' => 2, 'name' => 'Shiro', 'country_id' => 2, 'position' => 'Jungler'],
            ['team_id' => 13, 'game_id' => 2, 'name' => 'HUNTER', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 13, 'game_id' => 2, 'name' => 'ISO', 'country_id' => 1, 'position' => 'Gold Laner'],
            ['team_id' => 13, 'game_id' => 2, 'name' => 'JOYBOJ', 'country_id' => 1, 'position' => 'Roamer'],
        
            ['team_id' => 14, 'game_id' => 2, 'name' => 'Khunn', 'country_id' => 8, 'position' => 'EXP Laner'],
            ['team_id' => 14, 'game_id' => 2, 'name' => 'Kenn', 'country_id' => 8, 'position' => 'Jungler'],
            ['team_id' => 14, 'game_id' => 2, 'name' => 'Niko', 'country_id' => 8, 'position' => 'Mid Laner'],
            ['team_id' => 14, 'game_id' => 2, 'name' => 'Zippx', 'country_id' => 8, 'position' => 'Gold Laner'],
            ['team_id' => 14, 'game_id' => 2, 'name' => 'Bo Ye', 'country_id' => 8, 'position' => 'Roamer'],
        
            ['team_id' => 15, 'game_id' => 2, 'name' => 'Zzzed', 'country_id' => 1, 'position' => 'Roamer'],
            ['team_id' => 15, 'game_id' => 2, 'name' => 'Kielvj','country_id' => 1,'position' => 'EXP Laner'],
            ['team_id' => 15,'game_id' => 2, 'name' => 'Super Kenn','country_id' => 2,'position' => 'Jungler'],
            ['team_id' => 15,'game_id' => 2, 'name' => 'Yione','country_id' => 1,'position' => 'Mid Laner'],
            ['team_id' => 15,'game_id' => 2, 'name' => 'Loong','country_id' => 1,'position' => 'Gold Laner'],

            ['team_id' => 16, 'game_id' => 2, 'name' => 'Pluto ', 'country_id' => 1, 'position' => 'Roamer'],
            ['team_id' => 16, 'game_id' => 2, 'name' => 'BadKot', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 16, 'game_id' => 2, 'name' => 'Andoryuuu', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 16, 'game_id' => 2, 'name' => 'sorrybae', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 16, 'game_id' => 2, 'name' => 'Super Egorka', 'country_id' => 1, 'position' => 'Gold Laner'],

            ['team_id' => 17, 'game_id' => 1, 'name' => 'Satanic', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 17, 'game_id' => 1, 'name' => 'No[o]ne', 'country_id' => 1, 'position' => 'Mid'],
            ['team_id' => 17, 'game_id' => 1, 'name' => 'DM', 'country_id' => 1, 'position' => 'Offlane'],
            ['team_id' => 17, 'game_id' => 1, 'name' => 'Dukalis', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 17, 'game_id' => 1, 'name' => '9Class', 'country_id' => 1, 'position' => 'Support'],

            // Tundra
            ['team_id' => 18, 'game_id' => 1, 'name' => 'Crystallis', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 18, 'game_id' => 1, 'name' => 'bzm', 'country_id' => 1, 'position' => 'Mid'],
            ['team_id' => 18, 'game_id' => 1, 'name' => '33', 'country_id' => 1, 'position' => 'Offlane'],
            ['team_id' => 18, 'game_id' => 1, 'name' => 'Saksa', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 18, 'game_id' => 1, 'name' => 'Whitemon', 'country_id' => 1, 'position' => 'Support'],

            // Nigma
            ['team_id' => 19, 'game_id' => 1, 'name' => 'Ghost', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 19, 'game_id' => 1, 'name' => 'SumaiL', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 19, 'game_id' => 1, 'name' => 'No!ob™', 'country_id' => 1, 'position' => 'Offlane'],
            ['team_id' => 19, 'game_id' => 1, 'name' => 'OmaR`', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 19, 'game_id' => 1, 'name' => 'GH', 'country_id' => 1, 'position' => 'Support'],

            // Xtreme Gaming
            ['team_id' => 20, 'game_id' => 1, 'name' => 'Ame', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 20, 'game_id' => 1, 'name' => 'Xm', 'country_id' => 1, 'position' => 'Mid'],
            ['team_id' => 20, 'game_id' => 1, 'name' => 'Xxs', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 20, 'game_id' => 1, 'name' => 'Poloson', 'country_id' => 1, 'position' => 'Support'], // standby
            ['team_id' => 20, 'game_id' => 1, 'name' => 'xNova‑', 'country_id' => 1, 'position' => 'Support (stand‑in)'],

            // BOOM Esports
            ['team_id' => 21, 'game_id' => 1, 'name' => 'JaCkky', 'country_id' => 2, 'position' => 'Midlane'],
            ['team_id' => 21, 'game_id' => 1, 'name' => 'Armel', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 21, 'game_id' => 1, 'name' => 'Jabz', 'country_id' => 6, 'position' => 'Carry'],
            ['team_id' => 21, 'game_id' => 1, 'name' => 'Tims', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 21, 'game_id' => 1, 'name' => 'Jaunuel', 'country_id' => 1, 'position' => 'Carry'],

            // BETBOOM Esports
            ['team_id' => 22, 'game_id' => 1, 'name' => 'Pure', 'country_id' => 1, 'position' => 'Midlane'],
            ['team_id' => 22, 'game_id' => 1, 'name' => 'gpk~', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 22, 'game_id' => 1, 'name' => 'MieRo', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 22, 'game_id' => 1, 'name' => 'Save-', 'country_id' => 2, 'position' => 'Carry'],
            ['team_id' => 22, 'game_id' => 1, 'name' => 'Kataomi`', 'country_id' => 1, 'position' => 'Carry'],

            // Gaimin Gladiators
            ['team_id' => 23, 'game_id' => 1, 'name' => 'watson', 'country_id' => 2, 'position' => 'Carry'],
            ['team_id' => 23, 'game_id' => 1, 'name' => 'Quinn', 'country_id' => 1, 'position' => 'Mid'],
            ['team_id' => 23, 'game_id' => 1, 'name' => 'Ace', 'country_id' => 2, 'position' => 'Offlane'],
            ['team_id' => 23, 'game_id' => 1, 'name' => 'Malady', 'country_id' => 2, 'position' => 'Support'],
            ['team_id' => 23, 'game_id' => 1, 'name' => 'tOfu', 'country_id' => 2, 'position' => 'Support'],
        
            // Team Tidebound (All Gamers Global)
            ['team_id' => 24, 'game_id' => 1, 'name' => 'Shiro', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 24, 'game_id' => 1, 'name' => 'NothingToSay', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 24, 'game_id' => 1, 'name' => 'Bach', 'country_id' => 1, 'position' => 'Offlane'],
            ['team_id' => 24, 'game_id' => 1, 'name' => 'yu`', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 24, 'game_id' => 1, 'name' => 'plAnet', 'country_id' => 1, 'position' => 'Support'],

            // Team Yandex
            ['team_id' => 25, 'game_id' => 1, 'name' => 'TA2000', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 25, 'game_id' => 1, 'name' => 'CHIRA_JUNIOR', 'country_id' => 1, 'position' => 'Mid'],
            ['team_id' => 25, 'game_id' => 1, 'name' => 'Noticed', 'country_id' => 1, 'position' => 'Offlane'],
            ['team_id' => 25, 'game_id' => 1, 'name' => 'prblms', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 25, 'game_id' => 1, 'name' => 'Solo', 'country_id' => 1, 'position' => 'Support'],
        
            // Yakult Brothers
            ['team_id' => 26, 'game_id' => 1, 'name' => 'flyfly', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 26, 'game_id' => 1, 'name' => 'Emo', 'country_id' => 1, 'position' => 'Mid'],
            ['team_id' => 26, 'game_id' => 1, 'name' => 'Beyond', 'country_id' => 1, 'position' => 'Offlane'],
            ['team_id' => 26, 'game_id' => 1, 'name' => 'Oli', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 26, 'game_id' => 1, 'name' => 'BoBoKa', 'country_id' => 1, 'position' => 'Support'],

            // Team Liquid
            ['team_id' => 27, 'game_id' => 1, 'name' => 'miCKe', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 27, 'game_id' => 1, 'name' => 'Nisha', 'country_id' => 1, 'position' => 'Mid'],
            ['team_id' => 27, 'game_id' => 1, 'name' => 'SaberLight', 'country_id' => 1, 'position' => 'Offlane'],
            ['team_id' => 27, 'game_id' => 1, 'name' => 'Boxi', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 27, 'game_id' => 1, 'name' => 'Insania', 'country_id' => 1, 'position' => 'Support'],

            // Team Spirit
            ['team_id' => 28, 'game_id' => 1, 'name' => 'Yatoro', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 28, 'game_id' => 1, 'name' => 'Larl', 'country_id' => 1, 'position' => 'Mid'],
            ['team_id' => 28, 'game_id' => 1, 'name' => 'Collapse', 'country_id' => 1, 'position' => 'Offlane'],
            ['team_id' => 28, 'game_id' => 1, 'name' => 'rue', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 28, 'game_id' => 1, 'name' => 'Miposhka', 'country_id' => 1, 'position' => 'Support'],

            // Team Falcons
            ['team_id' => 29, 'game_id' => 1, 'name' => 'skiter', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 29, 'game_id' => 1, 'name' => 'Malr1ne', 'country_id' => 1, 'position' => 'Mid'],
            ['team_id' => 29, 'game_id' => 1, 'name' => 'ATF', 'country_id' => 1, 'position' => 'Offlane'],
            ['team_id' => 29, 'game_id' => 1, 'name' => 'Cr1t-', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 29, 'game_id' => 1, 'name' => 'Sneyking', 'country_id' => 1, 'position' => 'Support'],

            // Natus Vincere
            ['team_id' => 30, 'game_id' => 1, 'name' => 'gotthejuice', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 30, 'game_id' => 1, 'name' => 'Niku', 'country_id' => 1, 'position' => 'Mid'],
            ['team_id' => 30, 'game_id' => 1, 'name' => 'pma', 'country_id' => 1, 'position' => 'Offlane'],
            ['team_id' => 30, 'game_id' => 1, 'name' => 'daze', 'country_id' => 2, 'position' => 'Support'],
            ['team_id' => 30, 'game_id' => 1, 'name' => 'Riddys', 'country_id' => 1, 'position' => 'Support'],

            // Team Nemesis
            ['team_id' => 31, 'game_id' => 1, 'name' => 'Akashi', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 31, 'game_id' => 1, 'name' => 'Mac', 'country_id' => 1, 'position' => 'Mid'],
            ['team_id' => 31, 'game_id' => 1, 'name' => 'Raven', 'country_id' => 1, 'position' => 'Offlane'],
            ['team_id' => 31, 'game_id' => 1, 'name' => 'Jing-', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 31, 'game_id' => 1, 'name' => 'Erice', 'country_id' => 1, 'position' => 'Support'],

            // Wildcard
            ['team_id' => 32, 'game_id' => 1, 'name' => 'Yamsun', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 32, 'game_id' => 1, 'name' => 'RCY', 'country_id' => 1, 'position' => 'Mid'],
            ['team_id' => 32, 'game_id' => 1, 'name' => 'Fayde', 'country_id' => 1, 'position' => 'Offlane'],
            ['team_id' => 32, 'game_id' => 1, 'name' => 'Bignum-', 'country_id' => 1, 'position' => 'Support'],
            ['team_id' => 32, 'game_id' => 1, 'name' => 'Speeed', 'country_id' => 1, 'position' => 'Support'],

            // Heroic
            ['team_id' => 33, 'game_id' => 1, 'name' => 'Yuma', 'country_id' => 1, 'position' => 'Carry'],
            ['team_id' => 33, 'game_id' => 1, 'name' => '4nalog', 'country_id' => 1, 'position' => 'Mid'],
            ['team_id' => 33, 'game_id' => 1, 'name' => 'Wisper', 'country_id' => 2, 'position' => 'Offlane'],
            ['team_id' => 33, 'game_id' => 1, 'name' => 'Scofield', 'country_id' => 2, 'position' => 'Support'],
            ['team_id' => 33, 'game_id' => 1, 'name' => 'KJ', 'country_id' => 1, 'position' => 'Support'],

            // AP.Bren
            ['team_id' => 34, 'game_id' => 2, 'name' => 'Kielvj', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 34, 'game_id' => 2, 'name' => 'Jamespangks', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 34, 'game_id' => 2, 'name' => 'Aqua', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 34, 'game_id' => 2, 'name' => 'Shizou', 'country_id' => 1, 'position' => 'Gold Laner'],
            ['team_id' => 34, 'game_id' => 2, 'name' => 'Nova', 'country_id' => 1, 'position' => 'Roamer'],

            // Aurora PH
            ['team_id' => 35, 'game_id' => 2, 'name' => 'Light', 'country_id' => 1, 'position' => 'Roamer'],
            ['team_id' => 35, 'game_id' => 2, 'name' => 'Edward', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 35, 'game_id' => 2, 'name' => 'Demonkite', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 35, 'game_id' => 2, 'name' => 'Yue', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 35, 'game_id' => 2, 'name' => 'Domengkite', 'country_id' => 1, 'position' => 'Gold Laner'],

            // Omega Esports
            ['team_id' => 36, 'game_id' => 2, 'name' => 'Jeymz', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 36, 'game_id' => 2, 'name' => 'Raizen', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 36, 'game_id' => 2, 'name' => 'Minguin', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 36, 'game_id' => 2, 'name' => 'Nets', 'country_id' => 1, 'position' => 'Gold Laner'],
            ['team_id' => 36, 'game_id' => 2, 'name' => 'Perkziva', 'country_id' => 1, 'position' => 'Roamer'],

            // Team Falcons PH
            ['team_id' => 37, 'game_id' => 2, 'name' => 'Flap', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 37, 'game_id' => 2, 'name' => 'Kyle', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 37, 'game_id' => 2, 'name' => 'Hadji', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 37, 'game_id' => 2, 'name' => 'Super Marco', 'country_id' => 1, 'position' => 'Gold Laner'],
            ['team_id' => 37, 'game_id' => 2, 'name' => 'Owgwen', 'country_id' => 1, 'position' => 'Roamer'],
            
            // TNC Pro Team
            ['team_id' => 38, 'game_id' => 2, 'name' => '3Mar', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 38, 'game_id' => 2, 'name' => 'Zaida', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 38, 'game_id' => 2, 'name' => 'LanceCy', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 38, 'game_id' => 2, 'name' => 'Bennyqt', 'country_id' => 1, 'position' => 'Gold Laner'],
            ['team_id' => 38, 'game_id' => 2, 'name' => 'Ch4knu', 'country_id' => 1, 'position' => 'Roamer'],
                        
            // Twisted Minds PH
            ['team_id' => 39, 'game_id' => 2, 'name' => 'Lansu', 'country_id' => 1, 'position' => 'EXP Laner'],
            ['team_id' => 39, 'game_id' => 2, 'name' => 'MP the King', 'country_id' => 1, 'position' => 'Jungler'],
            ['team_id' => 39, 'game_id' => 2, 'name' => 'Sionnn', 'country_id' => 1, 'position' => 'Mid Laner'],
            ['team_id' => 39, 'game_id' => 2, 'name' => 'Owl', 'country_id' => 1, 'position' => 'Gold Laner'],
            ['team_id' => 39, 'game_id' => 2, 'name' => 'Caloy', 'country_id' => 1, 'position' => 'Roamer'],

            // Alter Ego
            ['team_id' => 40, 'game_id' => 2, 'name' => 'Nino', 'country_id' => 2, 'position' => 'EXP Laner'],
            ['team_id' => 40, 'game_id' => 2, 'name' => 'Yazukee', 'country_id' => 2, 'position' => 'Jungler'],
            ['team_id' => 40, 'game_id' => 2, 'name' => 'Hijumee', 'country_id' => 2, 'position' => 'Mid Laner'],
            ['team_id' => 40, 'game_id' => 2, 'name' => 'Arfy', 'country_id' => 2, 'position' => 'Gold Laner'],
            ['team_id' => 40, 'game_id' => 2, 'name' => 'alekk', 'country_id' => 2, 'position' => 'Roamer'],
            
            // Boostgate Esports
            ['team_id' => 41, 'game_id' => 2, 'name' => 'Eksi', 'country_id' => 12, 'position' => 'EXP Laner'],
            ['team_id' => 41, 'game_id' => 2, 'name' => 'Kazue', 'country_id' => 12, 'position' => 'Jungler'],
            ['team_id' => 41, 'game_id' => 2, 'name' => 'Identity', 'country_id' => 12, 'position' => 'Mid Laner'],
            ['team_id' => 41, 'game_id' => 2, 'name' => 'Rx', 'country_id' => 12, 'position' => 'Gold Laner'],
            ['team_id' => 41, 'game_id' => 2, 'name' => 'Wackter', 'country_id' => 12, 'position' => 'Roamer'],

            ['team_id' => 3, 'game_id' => 2, 'name' => 'Teddy', 'country_id' => 1, 'position' => 'Gold Laner'],
        ];
            

        foreach ($playersData as $data) {
            $team = Team::find($data['team_id']);
            if (!$team) continue;

            $player = Player::create([
                'game_id' => $data['game_id'], 
                'name' => $data['name'],
                'country_id' => $data['country_id'],
                'position' => $data['position'],
            ]);

            $player->teams()->attach($team->id, [
                'joined_at' => Carbon::now()
            ]);
        }
    }
}
