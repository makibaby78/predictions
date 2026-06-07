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

        Tournament::create([
            'name' => 'The International 2025',
            'game_id' => 1,
            'prize_pool' => 2555650.00,
            'start_date' => '2025-09-04',
            'end_date' => '2025-09-14',
        ]);

        Tournament::create([
            'name' => 'MPL Philippines Season 17',
            'game_id' => 2,
            'prize_pool' => 150000.00,
            'start_date' => '2026-03-20',
            'end_date' => '2026-05-31',
        ]);

        Tournament::create([
            'name' => 'M7 World Championship',
            'game_id' => 2,
            'prize_pool' => 1000000.00,
            'start_date' => '2026-01-03',
            'end_date' => '2026-01-25',
        ]);

        Tournament::create([
            'name' => 'BLAST Slam VII',
            'game_id' => 1,
            'prize_pool' => 1000000.00,
            'start_date' => '2026-05-26',
            'end_date' => '2026-06-07',
        ]);

        Tournament::create([
            'name' => 'MPL MY S17',
            'game_id' => 2,
            'prize_pool' => 1000000.00,
            'start_date' => '2026-05-26',
            'end_date' => '2026-06-07',
        ]);
    }
}
