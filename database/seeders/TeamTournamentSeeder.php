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
        foreach (range(1, 16) as $teamId) {
            DB::table('team_tournament')->insert([
                'tournament_id' => 1,
                'team_id' => $teamId,
            ]);
        }

        foreach (range(17, 26) as $teamId) {
            DB::table('team_tournament')->insert([
                'tournament_id' => 2,
                'team_id' => $teamId,
            ]);
        }

        $ti2025 = [17, 18, 19, 20, 21, 22, 24, 26, 27, 28, 29, 30, 31, 32, 33];

        foreach ($ti2025 as $teamId) {
            DB::table('team_tournament')->insert([
                'tournament_id' => 3,
                'team_id' => $teamId,
            ]);
        }

        $mplphs17 = [3, 4, 34, 35, 36, 37, 38, 39];

        foreach ($mplphs17 as $teamId) {
            DB::table('team_tournament')->insert([
                'tournament_id' => 4,
                'team_id' => $teamId,
            ]);
        }

        $m7 = [1, 40, 3, 5, 11, 15, 12, 35, 41];

        foreach ($m7 as $teamId) {
            DB::table('team_tournament')->insert([
                'tournament_id' => 5,
                'team_id' => $teamId,
            ]);
        }

        $blast7 = [27, 22, 18, 29, 28, 25, 42];

        foreach ($blast7 as $teamId) {
            DB::table('team_tournament')->insert([
                'tournament_id' => 6,
                'team_id' => $teamId,
            ]);
        }

        $mplmys17 = [43, 44, 45, 46, 47, 48];

        foreach ($mplmys17 as $teamId) {
            DB::table('team_tournament')->insert([
                'tournament_id' => 7,
                'team_id' => $teamId,
            ]);
        }

        $mplids17 = [49, 50, 51, 52, 53, 1];

        foreach ($mplids17 as $teamId) {
            DB::table('team_tournament')->insert([
                'tournament_id' => 8,
                'team_id' => $teamId,
            ]);
        }
    }
}
