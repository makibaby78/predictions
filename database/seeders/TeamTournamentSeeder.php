<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamTournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 26) as $teamId) {
            DB::table('team_tournament')->insert([
                'tournament_id' => 2,
                'team_id' => $teamId,
            ]);
        }
    }
}
