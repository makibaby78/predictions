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
                'id' => 1,
                'match_id' => 1,
                'team_id' => 3,
                'hero_id' => 104,
                'player_id' => 11,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'match_id' => 1,
                'team_id' => 3,
                'hero_id' => 47,
                'player_id' => 12,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'match_id' => 1,
                'team_id' => 3,
                'hero_id' => 52,
                'player_id' => 13,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'match_id' => 1,
                'team_id' => 3,
                'hero_id' => 81,
                'player_id' => 14,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 5,
                'match_id' => 1,
                'team_id' => 3,
                'hero_id' => 41,
                'player_id' => 15,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 6,
                'match_id' => 1,
                'team_id' => 9,
                'hero_id' => 113,
                'player_id' => 41,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 7,
                'match_id' => 1,
                'team_id' => 9,
                'hero_id' => 9,
                'player_id' => 42,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 8,
                'match_id' => 1,
                'team_id' => 9,
                'hero_id' => 110,
                'player_id' => 43,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 9,
                'match_id' => 1,
                'team_id' => 9,
                'hero_id' => 70,
                'player_id' => 44,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 10,
                'match_id' => 1,
                'team_id' => 9,
                'hero_id' => 97,
                'player_id' => 45,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
