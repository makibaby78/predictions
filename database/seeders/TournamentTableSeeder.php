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
            'start_date' => '2025-07-10',
            'end_date' => '2025-08-02',
        ]);
    }
}
