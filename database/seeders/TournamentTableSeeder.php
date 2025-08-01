<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Tournament;

class TournamentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tournament::create([
            'name' => 'MLBB Mid Season Cup 2025',
            'game_id' => 2,
            'prize_pool' => 3000000.00,
            'start_date' => '2025-07-10',
            'end_date' => '2025-08-02',
        ]);
        
        Tournament::create([
            'name' => 'Clavision Masters 2025: Snow-Ruyi (超维视界大师赛2025)',
            'game_id' => 1,
            'prize_pool' => 700000.00,
            'start_date' => '2025-07-28',
            'end_date' => '2025-08-03',
        ]);
    }
}
