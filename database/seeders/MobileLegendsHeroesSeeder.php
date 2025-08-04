<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Hero;

class MobileLegendsHeroesSeeder extends Seeder
{
    public function run()
    {
        $heroNames = [
            'Miya','Balmond','Saber','Alice','Nana','Tigreal','Alucard','Karina','Akai','Franco',
            'Bane','Bruno','Clint','Rafaela','Eudora','Zilong','Fanny','Layla','Minotaur','Lolita',
            'Hayabusa','Freya','Gord','Natalia','Kagura','Chou','Sun','Alpha','Ruby','Yi Sun‑shin',
            'Moskov','Johnson','Cyclops','Estes','Hilda','Aurora','Lapu‑Lapu','Vexana','Roger',
            'Karrie','Gatotkaca','Harley','Irithel','Grock','Argus','Odette','Lancelot','Diggie',
            'Hylos','Zhask','Helcurt','Pharsa','Jawhead','Lesley','Angela','Gusion','Valir','Martis',
            'Uranus','Hanabi','Chang’e','Kaja','Selena','Aldous','Claude','Belerick','Lunox','Thamuz',
            'Leomord','Kimmy','Harith','Minsitthar','Hanzo','Kadita','Badang','Faramis','Vale',
            'Guinevere','Khufra','Esmeralda','Granger','Terizla','Dyrroth','Lylia','X.Borg','Masha',
            'Baxia','Ling','Wanwan','Cecilion','Popol and Kupa','Luoyi','Yu Zhong','Khaleed','Barats',
            'Atlas','Mathilda','Edith','Novaria','Cici','Chip','Yve','Beatrix','Phoveus','Natan',
            'Aamon','Valentina','Suyou','Lukas','Zetian', 'Joy', 'Zhuxin', 'Arlott', 'Zetian',
        ];

        foreach ($heroNames as $name) {
            Hero::updateOrCreate(
                ['game_id' => 2, 'name' => $name],
            );
        }
    }
}
