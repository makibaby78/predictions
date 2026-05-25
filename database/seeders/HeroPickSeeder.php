<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HeroPickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::parse('2025-08-04 06:07:33');

        DB::table('match_hero_picks')->insert([
            [
                'match_id' => 1,
                'team_id' => 3,
                'hero_id' => 104,
                'player_id' => 11,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 1,
                'team_id' => 3,
                'hero_id' => 47,
                'player_id' => 12,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 1,
                'team_id' => 3,
                'hero_id' => 52,
                'player_id' => 13,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 1,
                'team_id' => 3,
                'hero_id' => 81,
                'player_id' => 14,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 1,
                'team_id' => 3,
                'hero_id' => 41,
                'player_id' => 15,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 1,
                'team_id' => 9,
                'hero_id' => 113,
                'player_id' => 41,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 1,
                'team_id' => 9,
                'hero_id' => 9,
                'player_id' => 42,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 1,
                'team_id' => 9,
                'hero_id' => 110,
                'player_id' => 43,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 1,
                'team_id' => 9,
                'hero_id' => 70,
                'player_id' => 44,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 1,
                'team_id' => 9,
                'hero_id' => 97,
                'player_id' => 45,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'match_id' => 2,
                'team_id' => 3,
                'hero_id' => 4,
                'player_id' => 11,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 2,
                'team_id' => 3,
                'hero_id' => 69,
                'player_id' => 12,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 2,
                'team_id' => 3,
                'hero_id' => 78,
                'player_id' => 13,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 2,
                'team_id' => 3,
                'hero_id' => 31,
                'player_id' => 206,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 2,
                'team_id' => 3,
                'hero_id' => 35,
                'player_id' => 15,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 2,
                'team_id' => 35,
                'hero_id' => 37,
                'player_id' => 172,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 2,
                'team_id' => 35,
                'hero_id' => 2,
                'player_id' => 173,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 2,
                'team_id' => 35,
                'hero_id' => 112,
                'player_id' => 174,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 2,
                'team_id' => 35,
                'hero_id' => 65,
                'player_id' => 175,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 2,
                'team_id' => 35,
                'hero_id' => 44,
                'player_id' => 171,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
