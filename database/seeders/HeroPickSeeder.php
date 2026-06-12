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

            [
                'match_id' => 3,
                'team_id' => 3,
                'hero_id' => 116,
                'player_id' => 11,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 3,
                'team_id' => 3,
                'hero_id' => 21,
                'player_id' => 12,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 3,
                'team_id' => 3,
                'hero_id' => 110,
                'player_id' => 13,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 3,
                'team_id' => 3,
                'hero_id' => 65,
                'player_id' => 206,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 3,
                'team_id' => 3,
                'hero_id' => 94,
                'player_id' => 15,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 3,
                'team_id' => 35,
                'hero_id' => 37,
                'player_id' => 172,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 3,
                'team_id' => 35,
                'hero_id' => 87,
                'player_id' => 173,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 3,
                'team_id' => 35,
                'hero_id' => 112,
                'player_id' => 174,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 3,
                'team_id' => 35,
                'hero_id' => 71,
                'player_id' => 175,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 3,
                'team_id' => 35,
                'hero_id' => 44,
                'player_id' => 171,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            
            [
                'match_id' => 4,
                'team_id' => 3,
                'hero_id' => 37,
                'player_id' => 11,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 4,
                'team_id' => 3,
                'hero_id' => 108,
                'player_id' => 12,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 4,
                'team_id' => 3,
                'hero_id' => 112,
                'player_id' => 13,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 4,
                'team_id' => 3,
                'hero_id' => 40,
                'player_id' => 206,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 4,
                'team_id' => 3,
                'hero_id' => 41,
                'player_id' => 15,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 4,
                'team_id' => 35,
                'hero_id' => 113,
                'player_id' => 172,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 4,
                'team_id' => 35,
                'hero_id' => 69,
                'player_id' => 173,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 4,
                'team_id' => 35,
                'hero_id' => 52,
                'player_id' => 174,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 4,
                'team_id' => 35,
                'hero_id' => 54,
                'player_id' => 175,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 4,
                'team_id' => 35,
                'hero_id' => 44,
                'player_id' => 171,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'match_id' => 5,
                'team_id' => 4,
                'hero_id' => 4,
                'player_id' => 16,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 5,
                'team_id' => 4,
                'hero_id' => 42,
                'player_id' => 17,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 5,
                'team_id' => 4,
                'hero_id' => 41,
                'player_id' => 20,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 5,
                'team_id' => 4,
                'hero_id' => 65,
                'player_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 5,
                'team_id' => 4,
                'hero_id' => 112,
                'player_id' => 18,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'match_id' => 5,
                'team_id' => 37,
                'hero_id' => 113,
                'player_id' => 180,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 5,
                'team_id' => 37,
                'hero_id' => 107,
                'player_id' => 182,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 5,
                'team_id' => 37,
                'hero_id' => 108,
                'player_id' => 181,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 5,
                'team_id' => 37,
                'hero_id' => 114,
                'player_id' => 184,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 5,
                'team_id' => 37,
                'hero_id' => 71,
                'player_id' => 183,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'match_id' => 6,
                'team_id' => 4,
                'hero_id' => 117,
                'player_id' => 16,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 6,
                'team_id' => 4,
                'hero_id' => 49,
                'player_id' => 20,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 6,
                'team_id' => 4,
                'hero_id' => 69,
                'player_id' => 17,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 6,
                'team_id' => 4,
                'hero_id' => 71,
                'player_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 6,
                'team_id' => 4,
                'hero_id' => 57,
                'player_id' => 18,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'match_id' => 6,
                'team_id' => 37,
                'hero_id' => 80,
                'player_id' => 180,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 6,
                'team_id' => 37,
                'hero_id' => 107,
                'player_id' => 182,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 6,
                'team_id' => 37,
                'hero_id' => 108,
                'player_id' => 181,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 6,
                'team_id' => 37,
                'hero_id' => 114,
                'player_id' => 184,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'match_id' => 6,
                'team_id' => 37,
                'hero_id' => 65,
                'player_id' => 183,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [ 'match_id' => 7, 'team_id' => 4, 'hero_id' => 65, 'player_id' => 4, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 7, 'team_id' => 4, 'hero_id' => 93, 'player_id' => 16, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 7, 'team_id' => 4, 'hero_id' => 69, 'player_id' => 17, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 7, 'team_id' => 4, 'hero_id' => 112, 'player_id' => 18, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 7, 'team_id' => 4, 'hero_id' => 41, 'player_id' => 20, 'created_at' => $now, 'updated_at' => $now, ],

            [ 'match_id' => 7, 'team_id' => 37, 'hero_id' => 82, 'player_id' => 180, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 7, 'team_id' => 37, 'hero_id' => 108, 'player_id' => 181, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 7, 'team_id' => 37, 'hero_id' => 107, 'player_id' => 182, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 7, 'team_id' => 37, 'hero_id' => 31, 'player_id' => 183, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 7, 'team_id' => 37, 'hero_id' => 114, 'player_id' => 184, 'created_at' => $now, 'updated_at' => $now, ],

            [ 'match_id' => 8, 'team_id' => 4, 'hero_id' => 41, 'player_id' => 4, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 8, 'team_id' => 4, 'hero_id' => 117, 'player_id' => 16, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 8, 'team_id' => 4, 'hero_id' => 47, 'player_id' => 17, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 8, 'team_id' => 4, 'hero_id' => 107, 'player_id' => 18, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 8, 'team_id' => 4, 'hero_id' => 31, 'player_id' => 20, 'created_at' => $now, 'updated_at' => $now, ],

            [ 'match_id' => 8, 'team_id' => 37, 'hero_id' => 80, 'player_id' => 180, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 8, 'team_id' => 37, 'hero_id' => 108, 'player_id' => 181, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 8, 'team_id' => 37, 'hero_id' => 102, 'player_id' => 182, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 8, 'team_id' => 37, 'hero_id' => 65, 'player_id' => 183, 'created_at' => $now, 'updated_at' => $now, ],
            [ 'match_id' => 8, 'team_id' => 37, 'hero_id' => 79, 'player_id' => 184, 'created_at' => $now, 'updated_at' => $now, ],

            [ 'match_id' => 9, 'team_id' => 4, 'hero_id' => 114, 'player_id' => 4, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 9, 'team_id' => 4, 'hero_id' => 37, 'player_id' => 16, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 9, 'team_id' => 4, 'hero_id' => 69, 'player_id' => 17, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 9, 'team_id' => 4, 'hero_id' => 112, 'player_id' => 18, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 9, 'team_id' => 4, 'hero_id' => 40, 'player_id' => 20, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 9, 'team_id' => 37, 'hero_id' => 4, 'player_id' => 180, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 9, 'team_id' => 37, 'hero_id' => 108, 'player_id' => 181, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 9, 'team_id' => 37, 'hero_id' => 102, 'player_id' => 182, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 9, 'team_id' => 37, 'hero_id' => 65, 'player_id' => 183, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 9, 'team_id' => 37, 'hero_id' => 116, 'player_id' => 184, 'created_at' => $now, 'updated_at' => $now, ],

            [ 'match_id' => 10, 'team_id' => 4, 'hero_id' => 41, 'player_id' => 4, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 10, 'team_id' => 4, 'hero_id' => 4, 'player_id' => 16, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 10, 'team_id' => 4, 'hero_id' => 69, 'player_id' => 17, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 10, 'team_id' => 4, 'hero_id' => 112, 'player_id' => 18, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 10, 'team_id' => 4, 'hero_id' => 65, 'player_id' => 20, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 10, 'team_id' => 37, 'hero_id' => 37, 'player_id' => 180, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 10, 'team_id' => 37, 'hero_id' => 78, 'player_id' => 181, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 10, 'team_id' => 37, 'hero_id' => 102, 'player_id' => 182, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 10, 'team_id' => 37, 'hero_id' => 31, 'player_id' => 183, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 10, 'team_id' => 37, 'hero_id' => 35, 'player_id' => 184, 'created_at' => $now, 'updated_at' => $now, ],

            [ 'match_id' => 11, 'team_id' => 4, 'hero_id' => 26, 'player_id' => 4, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 11, 'team_id' => 3, 'hero_id' => 117, 'player_id' => 11, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 11, 'team_id' => 3, 'hero_id' => 87, 'player_id' => 12, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 11, 'team_id' => 3, 'hero_id' => 70, 'player_id' => 13, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 11, 'team_id' => 3, 'hero_id' => 71, 'player_id' => 15, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 11, 'team_id' => 4, 'hero_id' => 98, 'player_id' => 16, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 11, 'team_id' => 4, 'hero_id' => 69, 'player_id' => 17, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 11, 'team_id' => 4, 'hero_id' => 102, 'player_id' => 18, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 11, 'team_id' => 4, 'hero_id' => 65, 'player_id' => 20, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 11, 'team_id' => 3, 'hero_id' => 49, 'player_id' => 205, 'created_at' => $now, 'updated_at' => $now, ],

            [ 'match_id' => 12, 'team_id' => 4, 'hero_id' => 26, 'player_id' => 4, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 12, 'team_id' => 3, 'hero_id' => 118, 'player_id' => 11, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 12, 'team_id' => 3, 'hero_id' => 87, 'player_id' => 12, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 12, 'team_id' => 3, 'hero_id' => 70, 'player_id' => 13, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 12, 'team_id' => 3, 'hero_id' => 71, 'player_id' => 15, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 12, 'team_id' => 4, 'hero_id' => 117, 'player_id' => 16, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 12, 'team_id' => 4, 'hero_id' => 69, 'player_id' => 17, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 12, 'team_id' => 4, 'hero_id' => 107, 'player_id' => 18, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 12, 'team_id' => 4, 'hero_id' => 65, 'player_id' => 20, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 12, 'team_id' => 3, 'hero_id' => 35, 'player_id' => 205, 'created_at' => $now, 'updated_at' => $now, ],
            
            [ 'match_id' => 13, 'team_id' => 4, 'hero_id' => 31, 'player_id' => 4, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 13, 'team_id' => 3, 'hero_id' => 93, 'player_id' => 11, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 13, 'team_id' => 3, 'hero_id' => 69, 'player_id' => 12, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 13, 'team_id' => 3, 'hero_id' => 107, 'player_id' => 13, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 13, 'team_id' => 3, 'hero_id' => 65, 'player_id' => 15, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 13, 'team_id' => 4, 'hero_id' => 117, 'player_id' => 16, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 13, 'team_id' => 4, 'hero_id' => 108, 'player_id' => 17, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 13, 'team_id' => 4, 'hero_id' => 112, 'player_id' => 18, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 13, 'team_id' => 4, 'hero_id' => 94, 'player_id' => 20, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 13, 'team_id' => 3, 'hero_id' => 41, 'player_id' => 205, 'created_at' => $now, 'updated_at' => $now, ],

            [ 'match_id' => 14, 'team_id' => 4, 'hero_id' => 65, 'player_id' => 4, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 14, 'team_id' => 3, 'hero_id' => 104, 'player_id' => 11, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 14, 'team_id' => 3, 'hero_id' => 47, 'player_id' => 12, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 14, 'team_id' => 3, 'hero_id' => 102, 'player_id' => 13, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 14, 'team_id' => 3, 'hero_id' => 26, 'player_id' => 15, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 14, 'team_id' => 4, 'hero_id' => 37, 'player_id' => 16, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 14, 'team_id' => 4, 'hero_id' => 87, 'player_id' => 17, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 14, 'team_id' => 4, 'hero_id' => 92, 'player_id' => 18, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 14, 'team_id' => 4, 'hero_id' => 96, 'player_id' => 20, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 14, 'team_id' => 3, 'hero_id' => 40, 'player_id' => 205, 'created_at' => $now, 'updated_at' => $now, ],

            [ 'match_id' => 15, 'team_id' => 36, 'hero_id' => 104, 'player_id' => 175, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 15, 'team_id' => 36, 'hero_id' => 42, 'player_id' => 176, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 15, 'team_id' => 36, 'hero_id' => 107, 'player_id' => 177, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 15, 'team_id' => 36, 'hero_id' => 65, 'player_id' => 178, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 15, 'team_id' => 36, 'hero_id' => 116, 'player_id' => 179, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 15, 'team_id' => 37, 'hero_id' => 37, 'player_id' => 180, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 15, 'team_id' => 37, 'hero_id' => 119, 'player_id' => 181, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 15, 'team_id' => 37, 'hero_id' => 23, 'player_id' => 182, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 15, 'team_id' => 37, 'hero_id' => 31, 'player_id' => 183, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 15, 'team_id' => 37, 'hero_id' => 120, 'player_id' => 184, 'created_at' => $now, 'updated_at' => $now, ],

            [ 'match_id' => 16, 'team_id' => 36, 'hero_id' => 117, 'player_id' => 175, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 16, 'team_id' => 36, 'hero_id' => 47, 'player_id' => 176, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 16, 'team_id' => 36, 'hero_id' => 102, 'player_id' => 177, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 16, 'team_id' => 36, 'hero_id' => 65, 'player_id' => 178, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 16, 'team_id' => 36, 'hero_id' => 96, 'player_id' => 179, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 16, 'team_id' => 37, 'hero_id' => 118, 'player_id' => 180, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 16, 'team_id' => 37, 'hero_id' => 87, 'player_id' => 181, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 16, 'team_id' => 37, 'hero_id' => 112, 'player_id' => 182, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 16, 'team_id' => 37, 'hero_id' => 121, 'player_id' => 183, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 16, 'team_id' => 37, 'hero_id' => 116, 'player_id' => 184, 'created_at' => $now, 'updated_at' => $now, ],

            [ 'match_id' => 17, 'team_id' => 36, 'hero_id' => 115, 'player_id' => 175, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 17, 'team_id' => 36, 'hero_id' => 87, 'player_id' => 176, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 17, 'team_id' => 36, 'hero_id' => 112, 'player_id' => 177, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 17, 'team_id' => 36, 'hero_id' => 65, 'player_id' => 178, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 17, 'team_id' => 36, 'hero_id' => 116, 'player_id' => 179, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 17, 'team_id' => 37, 'hero_id' => 117, 'player_id' => 180, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 17, 'team_id' => 37, 'hero_id' => 108, 'player_id' => 181, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 17, 'team_id' => 37, 'hero_id' => 102, 'player_id' => 182, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 17, 'team_id' => 37, 'hero_id' => 71, 'player_id' => 183, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 17, 'team_id' => 37, 'hero_id' => 96, 'player_id' => 184, 'created_at' => $now, 'updated_at' => $now, ],

            [ 'match_id' => 18, 'team_id' => 36, 'hero_id' => 104, 'player_id' => 175, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 18, 'team_id' => 36, 'hero_id' => 42, 'player_id' => 176, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 18, 'team_id' => 36, 'hero_id' => 107, 'player_id' => 177, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 18, 'team_id' => 36, 'hero_id' => 65, 'player_id' => 178, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 18, 'team_id' => 36, 'hero_id' => 116, 'player_id' => 179, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 18, 'team_id' => 37, 'hero_id' => 37, 'player_id' => 180, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 18, 'team_id' => 37, 'hero_id' => 119, 'player_id' => 181, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 18, 'team_id' => 37, 'hero_id' => 102, 'player_id' => 182, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 18, 'team_id' => 37, 'hero_id' => 40, 'player_id' => 183, 'created_at' => $now, 'updated_at' => $now, ], 
            [ 'match_id' => 18, 'team_id' => 37, 'hero_id' => 49, 'player_id' => 184, 'created_at' => $now, 'updated_at' => $now, ],

            // ── Series 1: Team Vamos (VMS) 3:0 RRQ Tora (RRQT) · June 3, 2026 - 15:00 [Bo5]
            // Game 1 · Dangerous Grass · 19:32 · winner: blue → match_id 19
            ['match_id' => 19, 'team_id' => 43, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Paquito
            ['match_id' => 19, 'team_id' => 43, 'hero_id' => 201, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Guinevere
            ['match_id' => 19, 'team_id' => 43, 'hero_id' => 230, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Valentina
            ['match_id' => 19, 'team_id' => 43, 'hero_id' => 163, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Karrie
            ['match_id' => 19, 'team_id' => 43, 'hero_id' => 219, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Atlas
            ['match_id' => 19, 'team_id' => 44, 'hero_id' => 203, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Esmeralda
            ['match_id' => 19, 'team_id' => 44, 'hero_id' => 245, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Nolan
            ['match_id' => 19, 'team_id' => 44, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Zhuxin
            ['match_id' => 19, 'team_id' => 44, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Claude
            ['match_id' => 19, 'team_id' => 44, 'hero_id' => 164, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Gatotkaca
            // Game 2 · Broken Walls · 11:55 · winner: red → match_id 20
            ['match_id' => 20, 'team_id' => 43, 'hero_id' => 205, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Terizla
            ['match_id' => 20, 'team_id' => 43, 'hero_id' => 153, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Yi Sun-shin
            ['match_id' => 20, 'team_id' => 43, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Zhuxin
            ['match_id' => 20, 'team_id' => 43, 'hero_id' => 244, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Obsidia
            ['match_id' => 20, 'team_id' => 43, 'hero_id' => 237, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Kalea
            ['match_id' => 20, 'team_id' => 44, 'hero_id' => 227, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Phoveus
            ['match_id' => 20, 'team_id' => 44, 'hero_id' => 201, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Guinevere
            ['match_id' => 20, 'team_id' => 44, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Yve
            ['match_id' => 20, 'team_id' => 44, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Claude
            ['match_id' => 20, 'team_id' => 44, 'hero_id' => 164, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Gatotkaca
            // Game 3 · Flying Cloud · 10:52 · winner: blue → match_id 21
            ['match_id' => 21, 'team_id' => 43, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Paquito
            ['match_id' => 21, 'team_id' => 43, 'hero_id' => 231, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Suyou
            ['match_id' => 21, 'team_id' => 43, 'hero_id' => 233, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Zetian
            ['match_id' => 21, 'team_id' => 43, 'hero_id' => 244, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Obsidia
            ['match_id' => 21, 'team_id' => 43, 'hero_id' => 149, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Chou
            ['match_id' => 21, 'team_id' => 44, 'hero_id' => 236, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Arlott
            ['match_id' => 21, 'team_id' => 44, 'hero_id' => 201, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Guinevere
            ['match_id' => 21, 'team_id' => 44, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Zhuxin
            ['match_id' => 21, 'team_id' => 44, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Claude
            ['match_id' => 21, 'team_id' => 44, 'hero_id' => 158, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // RRQT · Hilda

            // ── Series 2: Invictus Gaming (iG) 3:2 Team Vamos (VMS) · June 4, 2026 - 15:00 [Bo5]
            // Game 1 · Broken Walls · 12:56 · winner: red → match_id 22
            ['match_id' => 22, 'team_id' => 47, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Paquito
            ['match_id' => 22, 'team_id' => 47, 'hero_id' => 192, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Leomord
            ['match_id' => 22, 'team_id' => 47, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Yve
            ['match_id' => 22, 'team_id' => 47, 'hero_id' => 194, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Harith
            ['match_id' => 22, 'team_id' => 47, 'hero_id' => 164, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Gatotkaca
            ['match_id' => 22, 'team_id' => 43, 'hero_id' => 236, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Arlott
            ['match_id' => 22, 'team_id' => 43, 'hero_id' => 201, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Guinevere
            ['match_id' => 22, 'team_id' => 43, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Zhuxin
            ['match_id' => 22, 'team_id' => 43, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Claude
            ['match_id' => 22, 'team_id' => 43, 'hero_id' => 172, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Hylos
            // Game 2 · Dangerous Grass · 17:29 · winner: blue → match_id 23
            ['match_id' => 23, 'team_id' => 47, 'hero_id' => 238, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Sora
            ['match_id' => 23, 'team_id' => 47, 'hero_id' => 201, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Guinevere
            ['match_id' => 23, 'team_id' => 47, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Zhuxin
            ['match_id' => 23, 'team_id' => 47, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Claude
            ['match_id' => 23, 'team_id' => 47, 'hero_id' => 239, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Gloo
            ['match_id' => 23, 'team_id' => 43, 'hero_id' => 127, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Alice
            ['match_id' => 23, 'team_id' => 43, 'hero_id' => 192, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Leomord
            ['match_id' => 23, 'team_id' => 43, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Yve
            ['match_id' => 23, 'team_id' => 43, 'hero_id' => 194, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Harith
            ['match_id' => 23, 'team_id' => 43, 'hero_id' => 237, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Kalea
            // Game 3 · Dangerous Grass · 24:09 · winner: blue → match_id 24
            ['match_id' => 24, 'team_id' => 47, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Paquito
            ['match_id' => 24, 'team_id' => 47, 'hero_id' => 210, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Baxia
            ['match_id' => 24, 'team_id' => 47, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Yve
            ['match_id' => 24, 'team_id' => 47, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Claude
            ['match_id' => 24, 'team_id' => 47, 'hero_id' => 243, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Marcel
            ['match_id' => 24, 'team_id' => 43, 'hero_id' => 236, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Arlott
            ['match_id' => 24, 'team_id' => 43, 'hero_id' => 192, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Leomord
            ['match_id' => 24, 'team_id' => 43, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Zhuxin
            ['match_id' => 24, 'team_id' => 43, 'hero_id' => 136, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Clint
            ['match_id' => 24, 'team_id' => 43, 'hero_id' => 164, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Gatotkaca
            // Game 4 · Dangerous Grass · 23:56 · winner: red → match_id 25
            ['match_id' => 25, 'team_id' => 47, 'hero_id' => 158, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Hilda
            ['match_id' => 25, 'team_id' => 47, 'hero_id' => 165, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Harley
            ['match_id' => 25, 'team_id' => 47, 'hero_id' => 230, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Valentina
            ['match_id' => 25, 'team_id' => 47, 'hero_id' => 145, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Freya
            ['match_id' => 25, 'team_id' => 47, 'hero_id' => 237, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Kalea
            ['match_id' => 25, 'team_id' => 43, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Paquito
            ['match_id' => 25, 'team_id' => 43, 'hero_id' => 144, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Hayabusa
            ['match_id' => 25, 'team_id' => 43, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Zhuxin
            ['match_id' => 25, 'team_id' => 43, 'hero_id' => 154, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Moskov
            ['match_id' => 25, 'team_id' => 43, 'hero_id' => 164, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Gatotkaca
            // Game 5 · Expanding Rivers · 27:36 · winner: blue → match_id 26
            ['match_id' => 26, 'team_id' => 47, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Paquito
            ['match_id' => 26, 'team_id' => 47, 'hero_id' => 245, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Nolan
            ['match_id' => 26, 'team_id' => 47, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Zhuxin
            ['match_id' => 26, 'team_id' => 47, 'hero_id' => 136, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Clint
            ['match_id' => 26, 'team_id' => 47, 'hero_id' => 164, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Gatotkaca
            ['match_id' => 26, 'team_id' => 43, 'hero_id' => 158, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Hilda
            ['match_id' => 26, 'team_id' => 43, 'hero_id' => 231, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Suyou
            ['match_id' => 26, 'team_id' => 43, 'hero_id' => 230, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Valentina
            ['match_id' => 26, 'team_id' => 43, 'hero_id' => 154, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Moskov
            ['match_id' => 26, 'team_id' => 43, 'hero_id' => 217, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Khaleed

            // ── Series 3: Team Rey (REY) 0:3 Bigetron MY by VIT (BTRM) · June 3, 2026 - 19:00 [Bo5]
            // Game 1 · Dangerous Grass · 17:33 · winner: blue → match_id 27
            ['match_id' => 27, 'team_id' => 45, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Paquito
            ['match_id' => 27, 'team_id' => 45, 'hero_id' => 231, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Suyou
            ['match_id' => 27, 'team_id' => 45, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Yve
            ['match_id' => 27, 'team_id' => 45, 'hero_id' => 244, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Obsidia
            ['match_id' => 27, 'team_id' => 45, 'hero_id' => 172, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Hylos
            ['match_id' => 27, 'team_id' => 46, 'hero_id' => 227, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Phoveus
            ['match_id' => 27, 'team_id' => 46, 'hero_id' => 242, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Fredrinn
            ['match_id' => 27, 'team_id' => 46, 'hero_id' => 146, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Gord
            ['match_id' => 27, 'team_id' => 46, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Claude
            ['match_id' => 27, 'team_id' => 46, 'hero_id' => 164, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Gatotkaca
            // Game 2 · Flying Cloud · 22:14 · winner: blue → match_id 28
            ['match_id' => 28, 'team_id' => 45, 'hero_id' => 221, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Edith
            ['match_id' => 28, 'team_id' => 45, 'hero_id' => 132, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Akai
            ['match_id' => 28, 'team_id' => 45, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Yve
            ['match_id' => 28, 'team_id' => 45, 'hero_id' => 244, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Obsidia
            ['match_id' => 28, 'team_id' => 45, 'hero_id' => 239, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Gloo
            ['match_id' => 28, 'team_id' => 46, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Paquito
            ['match_id' => 28, 'team_id' => 46, 'hero_id' => 242, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Fredrinn
            ['match_id' => 28, 'team_id' => 46, 'hero_id' => 146, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Gord
            ['match_id' => 28, 'team_id' => 46, 'hero_id' => 163, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Karrie
            ['match_id' => 28, 'team_id' => 46, 'hero_id' => 219, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Atlas
            // Game 3 · Flying Cloud · 20:46 · winner: red → match_id 29
            ['match_id' => 29, 'team_id' => 45, 'hero_id' => 227, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Phoveus
            ['match_id' => 29, 'team_id' => 45, 'hero_id' => 192, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Leomord
            ['match_id' => 29, 'team_id' => 45, 'hero_id' => 178, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Angela
            ['match_id' => 29, 'team_id' => 45, 'hero_id' => 194, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Harith
            ['match_id' => 29, 'team_id' => 45, 'hero_id' => 149, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // REY · Chou
            ['match_id' => 29, 'team_id' => 46, 'hero_id' => 239, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Gloo
            ['match_id' => 29, 'team_id' => 46, 'hero_id' => 132, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Akai
            ['match_id' => 29, 'team_id' => 46, 'hero_id' => 146, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Gord
            ['match_id' => 29, 'team_id' => 46, 'hero_id' => 145, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Freya
            ['match_id' => 29, 'team_id' => 46, 'hero_id' => 172, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Hylos

            // ── Series 4: Selangor Red Giants (SRG) 3:2 Bigetron MY by VIT (BTRM) · June 4, 2026 - 19:00 [Bo5]
            // Game 1 · Dangerous Grass · 18:03 · winner: red → match_id 30
            ['match_id' => 30, 'team_id' => 48, 'hero_id' => 236, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Arlott
            ['match_id' => 30, 'team_id' => 48, 'hero_id' => 242, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Fredrinn
            ['match_id' => 30, 'team_id' => 48, 'hero_id' => 230, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Valentina
            ['match_id' => 30, 'team_id' => 48, 'hero_id' => 154, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Moskov
            ['match_id' => 30, 'team_id' => 48, 'hero_id' => 239, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Gloo
            ['match_id' => 30, 'team_id' => 46, 'hero_id' => 205, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Terizla
            ['match_id' => 30, 'team_id' => 46, 'hero_id' => 192, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Leomord
            ['match_id' => 30, 'team_id' => 46, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Zhuxin
            ['match_id' => 30, 'team_id' => 46, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Claude
            ['match_id' => 30, 'team_id' => 46, 'hero_id' => 243, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Marcel
            // Game 2 · Flying Cloud · 20:25 · winner: blue → match_id 31
            ['match_id' => 31, 'team_id' => 48, 'hero_id' => 160, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Lapu-Lapu
            ['match_id' => 31, 'team_id' => 48, 'hero_id' => 153, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Yi Sun-shin
            ['match_id' => 31, 'team_id' => 48, 'hero_id' => 193, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Kimmy
            ['match_id' => 31, 'team_id' => 48, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Paquito
            ['match_id' => 31, 'team_id' => 48, 'hero_id' => 172, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Hylos
            ['match_id' => 31, 'team_id' => 46, 'hero_id' => 227, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Phoveus
            ['match_id' => 31, 'team_id' => 46, 'hero_id' => 201, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Guinevere
            ['match_id' => 31, 'team_id' => 46, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Yve
            ['match_id' => 31, 'team_id' => 46, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Claude
            ['match_id' => 31, 'team_id' => 46, 'hero_id' => 217, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Khaleed
            // Game 3 · Broken Walls · 13:15 · winner: blue → match_id 32
            ['match_id' => 32, 'team_id' => 48, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Paquito
            ['match_id' => 32, 'team_id' => 48, 'hero_id' => 231, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Suyou
            ['match_id' => 32, 'team_id' => 48, 'hero_id' => 180, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Valir
            ['match_id' => 32, 'team_id' => 48, 'hero_id' => 194, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Harith
            ['match_id' => 32, 'team_id' => 48, 'hero_id' => 239, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Gloo
            ['match_id' => 32, 'team_id' => 46, 'hero_id' => 238, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Sora
            ['match_id' => 32, 'team_id' => 46, 'hero_id' => 192, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Leomord
            ['match_id' => 32, 'team_id' => 46, 'hero_id' => 230, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Valentina
            ['match_id' => 32, 'team_id' => 46, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Claude
            ['match_id' => 32, 'team_id' => 46, 'hero_id' => 219, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Atlas
            // Game 4 · Dangerous Grass · 16:27 · winner: red → match_id 33
            ['match_id' => 33, 'team_id' => 48, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Paquito
            ['match_id' => 33, 'team_id' => 48, 'hero_id' => 210, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Baxia
            ['match_id' => 33, 'team_id' => 48, 'hero_id' => 193, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Kimmy
            ['match_id' => 33, 'team_id' => 48, 'hero_id' => 136, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Clint
            ['match_id' => 33, 'team_id' => 48, 'hero_id' => 172, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Hylos
            ['match_id' => 33, 'team_id' => 46, 'hero_id' => 145, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Freya
            ['match_id' => 33, 'team_id' => 46, 'hero_id' => 192, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Leomord
            ['match_id' => 33, 'team_id' => 46, 'hero_id' => 207, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Lylia
            ['match_id' => 33, 'team_id' => 46, 'hero_id' => 194, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Harith
            ['match_id' => 33, 'team_id' => 46, 'hero_id' => 219, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Atlas
            // Game 5 · Dangerous Grass · 14:42 · winner: blue → match_id 34
            ['match_id' => 34, 'team_id' => 48, 'hero_id' => 160, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Lapu-Lapu
            ['match_id' => 34, 'team_id' => 48, 'hero_id' => 165, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Harley
            ['match_id' => 34, 'team_id' => 48, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Yve
            ['match_id' => 34, 'team_id' => 48, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Claude
            ['match_id' => 34, 'team_id' => 48, 'hero_id' => 149, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Chou
            ['match_id' => 34, 'team_id' => 46, 'hero_id' => 227, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Phoveus
            ['match_id' => 34, 'team_id' => 46, 'hero_id' => 231, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Suyou
            ['match_id' => 34, 'team_id' => 46, 'hero_id' => 230, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Valentina
            ['match_id' => 34, 'team_id' => 46, 'hero_id' => 162, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Roger
            ['match_id' => 34, 'team_id' => 46, 'hero_id' => 239, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Gloo

            // ── Series 5: Invictus Gaming (iG) 1:3 Selangor Red Giants (SRG) · June 5, 2026 - 19:00 [Bo5]
            // Game 1 · Expanding Rivers · 14:08 · winner: red → match_id 35
            ['match_id' => 35, 'team_id' => 47, 'hero_id' => 158, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Hilda
            ['match_id' => 35, 'team_id' => 47, 'hero_id' => 231, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Suyou
            ['match_id' => 35, 'team_id' => 47, 'hero_id' => 207, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Lylia
            ['match_id' => 35, 'team_id' => 47, 'hero_id' => 194, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Harith
            ['match_id' => 35, 'team_id' => 47, 'hero_id' => 239, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Gloo
            ['match_id' => 35, 'team_id' => 48, 'hero_id' => 241, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Benedetta
            ['match_id' => 35, 'team_id' => 48, 'hero_id' => 210, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Baxia
            ['match_id' => 35, 'team_id' => 48, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Zhuxin
            ['match_id' => 35, 'team_id' => 48, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Claude
            ['match_id' => 35, 'team_id' => 48, 'hero_id' => 243, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Marcel
            // Game 2 · Flying Cloud · 19:06 · winner: red → match_id 36
            ['match_id' => 36, 'team_id' => 47, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Paquito
            ['match_id' => 36, 'team_id' => 47, 'hero_id' => 231, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Suyou
            ['match_id' => 36, 'team_id' => 47, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Zhuxin
            ['match_id' => 36, 'team_id' => 47, 'hero_id' => 194, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Harith
            ['match_id' => 36, 'team_id' => 47, 'hero_id' => 237, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Kalea
            ['match_id' => 36, 'team_id' => 48, 'hero_id' => 145, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Freya
            ['match_id' => 36, 'team_id' => 48, 'hero_id' => 210, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Baxia
            ['match_id' => 36, 'team_id' => 48, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Yve
            ['match_id' => 36, 'team_id' => 48, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Claude
            ['match_id' => 36, 'team_id' => 48, 'hero_id' => 164, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Gatotkaca
            // Game 3 · Broken Walls · 13:11 · winner: blue → match_id 37
            ['match_id' => 37, 'team_id' => 47, 'hero_id' => 227, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Phoveus
            ['match_id' => 37, 'team_id' => 47, 'hero_id' => 144, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Hayabusa
            ['match_id' => 37, 'team_id' => 47, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Yve
            ['match_id' => 37, 'team_id' => 47, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Claude
            ['match_id' => 37, 'team_id' => 47, 'hero_id' => 217, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Khaleed
            ['match_id' => 37, 'team_id' => 48, 'hero_id' => 216, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Yu Zhong
            ['match_id' => 37, 'team_id' => 48, 'hero_id' => 165, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Harley
            ['match_id' => 37, 'team_id' => 48, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Zhuxin
            ['match_id' => 37, 'team_id' => 48, 'hero_id' => 154, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Moskov
            ['match_id' => 37, 'team_id' => 48, 'hero_id' => 149, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Chou
            // Game 4 · Flying Cloud · 15:43 · winner: blue → match_id 38
            ['match_id' => 38, 'team_id' => 47, 'hero_id' => 227, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Phoveus
            ['match_id' => 38, 'team_id' => 47, 'hero_id' => 144, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Hayabusa
            ['match_id' => 38, 'team_id' => 47, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Zhuxin
            ['match_id' => 38, 'team_id' => 47, 'hero_id' => 154, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Moskov
            ['match_id' => 38, 'team_id' => 47, 'hero_id' => 149, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Chou
            ['match_id' => 38, 'team_id' => 48, 'hero_id' => 160, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Lapu-Lapu
            ['match_id' => 38, 'team_id' => 48, 'hero_id' => 165, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Harley
            ['match_id' => 38, 'team_id' => 48, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Yve
            ['match_id' => 38, 'team_id' => 48, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Claude
            ['match_id' => 38, 'team_id' => 48, 'hero_id' => 158, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // SRG · Hilda

            // ── Series 6: Team Vamos (VMS) 3:1 Bigetron MY by VIT (BTRM) · June 5, 2026 - 15:00 [Bo5]
            // Game 1 · Broken Walls · 17:17 · winner: red → match_id 39
            ['match_id' => 39, 'team_id' => 43, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Paquito
            ['match_id' => 39, 'team_id' => 43, 'hero_id' => 192, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Leomord
            ['match_id' => 39, 'team_id' => 43, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Yve
            ['match_id' => 39, 'team_id' => 43, 'hero_id' => 136, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Clint
            ['match_id' => 39, 'team_id' => 43, 'hero_id' => 239, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Gloo
            ['match_id' => 39, 'team_id' => 46, 'hero_id' => 145, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Freya
            ['match_id' => 39, 'team_id' => 46, 'hero_id' => 231, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Suyou
            ['match_id' => 39, 'team_id' => 46, 'hero_id' => 230, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Valentina
            ['match_id' => 39, 'team_id' => 46, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Claude
            ['match_id' => 39, 'team_id' => 46, 'hero_id' => 164, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Gatotkaca
            // Game 2 · Broken Walls · 17:11 · winner: blue → match_id 40
            ['match_id' => 40, 'team_id' => 43, 'hero_id' => 227, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Phoveus
            ['match_id' => 40, 'team_id' => 43, 'hero_id' => 192, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Leomord
            ['match_id' => 40, 'team_id' => 43, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Yve
            ['match_id' => 40, 'team_id' => 43, 'hero_id' => 244, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Obsidia
            ['match_id' => 40, 'team_id' => 43, 'hero_id' => 149, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Chou
            ['match_id' => 40, 'team_id' => 46, 'hero_id' => 236, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Arlott
            ['match_id' => 40, 'team_id' => 46, 'hero_id' => 201, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Guinevere
            ['match_id' => 40, 'team_id' => 46, 'hero_id' => 207, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Lylia
            ['match_id' => 40, 'team_id' => 46, 'hero_id' => 163, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Karrie
            ['match_id' => 40, 'team_id' => 46, 'hero_id' => 239, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Gloo
            // Game 3 · Dangerous Grass · 14:52 · winner: blue → match_id 41
            ['match_id' => 41, 'team_id' => 43, 'hero_id' => 227, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Phoveus
            ['match_id' => 41, 'team_id' => 43, 'hero_id' => 153, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Yi Sun-shin
            ['match_id' => 41, 'team_id' => 43, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Zhuxin
            ['match_id' => 41, 'team_id' => 43, 'hero_id' => 145, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Freya
            ['match_id' => 41, 'team_id' => 43, 'hero_id' => 239, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Gloo
            ['match_id' => 41, 'team_id' => 46, 'hero_id' => 160, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Lapu-Lapu
            ['match_id' => 41, 'team_id' => 46, 'hero_id' => 192, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Leomord
            ['match_id' => 41, 'team_id' => 46, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Yve
            ['match_id' => 41, 'team_id' => 46, 'hero_id' => 163, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Karrie
            ['match_id' => 41, 'team_id' => 46, 'hero_id' => 219, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Atlas
            // Game 4 · Flying Cloud · 23:54 · winner: red → match_id 42
            ['match_id' => 42, 'team_id' => 43, 'hero_id' => 160, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Lapu-Lapu
            ['match_id' => 42, 'team_id' => 43, 'hero_id' => 165, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Harley
            ['match_id' => 42, 'team_id' => 43, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Yve
            ['match_id' => 42, 'team_id' => 43, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Claude
            ['match_id' => 42, 'team_id' => 43, 'hero_id' => 172, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Hylos
            ['match_id' => 42, 'team_id' => 46, 'hero_id' => 227, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Phoveus
            ['match_id' => 42, 'team_id' => 46, 'hero_id' => 231, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Suyou
            ['match_id' => 42, 'team_id' => 46, 'hero_id' => 230, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Valentina
            ['match_id' => 42, 'team_id' => 46, 'hero_id' => 154, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Moskov
            ['match_id' => 42, 'team_id' => 46, 'hero_id' => 239, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // BTRM · Gloo

            // ── Series 7: Invictus Gaming (iG) 0:4 Team Vamos (VMS) · June 6, 2026 - 17:30 [Bo7]
            // Game 1 · Flying Cloud · 18:21 · winner: red → match_id 43
            ['match_id' => 43, 'team_id' => 47, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Paquito
            ['match_id' => 43, 'team_id' => 47, 'hero_id' => 245, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Nolan
            ['match_id' => 43, 'team_id' => 47, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Zhuxin
            ['match_id' => 43, 'team_id' => 47, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Claude
            ['match_id' => 43, 'team_id' => 47, 'hero_id' => 164, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Gatotkaca
            ['match_id' => 43, 'team_id' => 43, 'hero_id' => 145, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Freya
            ['match_id' => 43, 'team_id' => 43, 'hero_id' => 242, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Fredrinn
            ['match_id' => 43, 'team_id' => 43, 'hero_id' => 225, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Yve
            ['match_id' => 43, 'team_id' => 43, 'hero_id' => 246, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Brody
            ['match_id' => 43, 'team_id' => 43, 'hero_id' => 217, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Khaleed
            // Game 2 · Expanding Rivers · 12:24 · winner: blue → match_id 44
            ['match_id' => 44, 'team_id' => 47, 'hero_id' => 241, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Benedetta
            ['match_id' => 44, 'team_id' => 47, 'hero_id' => 201, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Guinevere
            ['match_id' => 44, 'team_id' => 47, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Zhuxin
            ['match_id' => 44, 'team_id' => 47, 'hero_id' => 154, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Moskov
            ['match_id' => 44, 'team_id' => 47, 'hero_id' => 164, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Gatotkaca
            ['match_id' => 44, 'team_id' => 43, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Paquito
            ['match_id' => 44, 'team_id' => 43, 'hero_id' => 231, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Suyou
            ['match_id' => 44, 'team_id' => 43, 'hero_id' => 230, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Valentina
            ['match_id' => 44, 'team_id' => 43, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Claude
            ['match_id' => 44, 'team_id' => 43, 'hero_id' => 239, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Gloo
            // Game 3 · Expanding Rivers · 15:23 · winner: blue → match_id 45
            ['match_id' => 45, 'team_id' => 47, 'hero_id' => 160, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Lapu-Lapu
            ['match_id' => 45, 'team_id' => 47, 'hero_id' => 242, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Fredrinn
            ['match_id' => 45, 'team_id' => 47, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Zhuxin
            ['match_id' => 45, 'team_id' => 47, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Claude
            ['match_id' => 45, 'team_id' => 47, 'hero_id' => 224, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Chip
            ['match_id' => 45, 'team_id' => 43, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Paquito
            ['match_id' => 45, 'team_id' => 43, 'hero_id' => 201, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Guinevere
            ['match_id' => 45, 'team_id' => 43, 'hero_id' => 233, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Zetian
            ['match_id' => 45, 'team_id' => 43, 'hero_id' => 163, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Karrie
            ['match_id' => 45, 'team_id' => 43, 'hero_id' => 198, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Badang
            // Game 4 · Flying Cloud · 17:24 · winner: blue → match_id 46
            ['match_id' => 46, 'team_id' => 47, 'hero_id' => 182, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Uranus
            ['match_id' => 46, 'team_id' => 47, 'hero_id' => 144, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Hayabusa
            ['match_id' => 46, 'team_id' => 47, 'hero_id' => 235, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Zhuxin
            ['match_id' => 46, 'team_id' => 47, 'hero_id' => 246, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Brody
            ['match_id' => 46, 'team_id' => 47, 'hero_id' => 239, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // iG · Gloo
            ['match_id' => 46, 'team_id' => 43, 'hero_id' => 240, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Paquito
            ['match_id' => 46, 'team_id' => 43, 'hero_id' => 201, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Guinevere
            ['match_id' => 46, 'team_id' => 43, 'hero_id' => 230, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Valentina
            ['match_id' => 46, 'team_id' => 43, 'hero_id' => 188, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Claude
            ['match_id' => 46, 'team_id' => 43, 'hero_id' => 217, 'player_id' => null, 'created_at' => $now, 'updated_at' => $now], // VMS · Khaleed

            // Game 1 
            ['match_id' => 47, 'team_id' => 49, 'hero_id' => 117, 'player_id' => 240, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 47, 'team_id' => 49, 'hero_id' => 78, 'player_id' => 241, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 47, 'team_id' => 49, 'hero_id' => 52, 'player_id' => 242, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 47, 'team_id' => 49, 'hero_id' => 71, 'player_id' => 243, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 47, 'team_id' => 49, 'hero_id' => 107, 'player_id' => 244, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 47, 'team_id' => 50, 'hero_id' => 37, 'player_id' => 245, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 47, 'team_id' => 50, 'hero_id' => 42, 'player_id' => 246, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 47, 'team_id' => 50, 'hero_id' => 112, 'player_id' => 247, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 47, 'team_id' => 50, 'hero_id' => 65, 'player_id' => 248, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 47, 'team_id' => 50, 'hero_id' => 96, 'player_id' => 249, 'created_at' => $now, 'updated_at' => $now],

            // Game 2
            ['match_id' => 48, 'team_id' => 49, 'hero_id' => 59, 'player_id' => 240, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 48, 'team_id' => 49, 'hero_id' => 122, 'player_id' => 241, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 48, 'team_id' => 49, 'hero_id' => 107, 'player_id' => 242, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 48, 'team_id' => 49, 'hero_id' => 65, 'player_id' => 243, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 48, 'team_id' => 49, 'hero_id' => 26, 'player_id' => 244, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 48, 'team_id' => 50, 'hero_id' => 117, 'player_id' => 245, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 48, 'team_id' => 50, 'hero_id' => 78, 'player_id' => 246, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 48, 'team_id' => 50, 'hero_id' => 112, 'player_id' => 247, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 48, 'team_id' => 50, 'hero_id' => 71, 'player_id' => 248, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 48, 'team_id' => 50, 'hero_id' => 116, 'player_id' => 249, 'created_at' => $now, 'updated_at' => $now],

            // Game 3
            ['match_id' => 49, 'team_id' => 49, 'hero_id' => 104, 'player_id' => 240, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 49, 'team_id' => 49, 'hero_id' => 119, 'player_id' => 241, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 49, 'team_id' => 49, 'hero_id' => 112, 'player_id' => 242, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 49, 'team_id' => 49, 'hero_id' => 71, 'player_id' => 243, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 49, 'team_id' => 49, 'hero_id' => 51, 'player_id' => 244, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 49, 'team_id' => 50, 'hero_id' => 117, 'player_id' => 245, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 49, 'team_id' => 50, 'hero_id' => 42, 'player_id' => 246, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 49, 'team_id' => 50, 'hero_id' => 102, 'player_id' => 247, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 49, 'team_id' => 50, 'hero_id' => 65, 'player_id' => 248, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 49, 'team_id' => 50, 'hero_id' => 101, 'player_id' => 249, 'created_at' => $now, 'updated_at' => $now],

            // Game 1
            ['match_id' => 50, 'team_id' => 51, 'hero_id' => 4, 'player_id' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 50, 'team_id' => 51, 'hero_id' => 69, 'player_id' => 251, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 50, 'team_id' => 51, 'hero_id' => 23, 'player_id' => 252, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 50, 'team_id' => 51, 'hero_id' => 65, 'player_id' => 253, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 50, 'team_id' => 51, 'hero_id' => 120, 'player_id' => 254, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 50, 'team_id' => 52, 'hero_id' => 117, 'player_id' => 255, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 50, 'team_id' => 52, 'hero_id' => 108, 'player_id' => 256, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 50, 'team_id' => 52, 'hero_id' => 112, 'player_id' => 257, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 50, 'team_id' => 52, 'hero_id' => 71, 'player_id' => 258, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 50, 'team_id' => 52, 'hero_id' => 94, 'player_id' => 259, 'created_at' => $now, 'updated_at' => $now],

            // Game 2
            ['match_id' => 51, 'team_id' => 51, 'hero_id' => 104, 'player_id' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 51, 'team_id' => 51, 'hero_id' => 42, 'player_id' => 251, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 51, 'team_id' => 51, 'hero_id' => 63, 'player_id' => 252, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 51, 'team_id' => 51, 'hero_id' => 31, 'player_id' => 253, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 51, 'team_id' => 51, 'hero_id' => 120, 'player_id' => 254, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 51, 'team_id' => 52, 'hero_id' => 59, 'player_id' => 255, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 51, 'team_id' => 52, 'hero_id' => 3, 'player_id' => 256, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 51, 'team_id' => 52, 'hero_id' => 107, 'player_id' => 257, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 51, 'team_id' => 52, 'hero_id' => 65, 'player_id' => 258, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 51, 'team_id' => 52, 'hero_id' => 96, 'player_id' => 259, 'created_at' => $now, 'updated_at' => $now],

            // Game 3
            ['match_id' => 52, 'team_id' => 51, 'hero_id' => 4, 'player_id' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 52, 'team_id' => 51, 'hero_id' => 42, 'player_id' => 251, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 52, 'team_id' => 51, 'hero_id' => 107, 'player_id' => 252, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 52, 'team_id' => 51, 'hero_id' => 65, 'player_id' => 253, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 52, 'team_id' => 51, 'hero_id' => 66, 'player_id' => 254, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 52, 'team_id' => 52, 'hero_id' => 117, 'player_id' => 255, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 52, 'team_id' => 52, 'hero_id' => 78, 'player_id' => 256, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 52, 'team_id' => 52, 'hero_id' => 70, 'player_id' => 257, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 52, 'team_id' => 52, 'hero_id' => 71, 'player_id' => 258, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 52, 'team_id' => 52, 'hero_id' => 120, 'player_id' => 259, 'created_at' => $now, 'updated_at' => $now],

            // Game 4
            ['match_id' => 53, 'team_id' => 51, 'hero_id' => 22, 'player_id' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 53, 'team_id' => 51, 'hero_id' => 42, 'player_id' => 251, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 53, 'team_id' => 51, 'hero_id' => 110, 'player_id' => 252, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 53, 'team_id' => 51, 'hero_id' => 31, 'player_id' => 253, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 53, 'team_id' => 51, 'hero_id' => 41, 'player_id' => 254, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 53, 'team_id' => 52, 'hero_id' => 117, 'player_id' => 255, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 53, 'team_id' => 52, 'hero_id' => 87, 'player_id' => 256, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 53, 'team_id' => 52, 'hero_id' => 70, 'player_id' => 257, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 53, 'team_id' => 52, 'hero_id' => 65, 'player_id' => 258, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 53, 'team_id' => 52, 'hero_id' => 114, 'player_id' => 259, 'created_at' => $now, 'updated_at' => $now],

            // Game 1
            ['match_id' => 54, 'team_id' => 53, 'hero_id' => 115, 'player_id' => 260, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 54, 'team_id' => 53, 'hero_id' => 108, 'player_id' => 261, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 54, 'team_id' => 53, 'hero_id' => 112, 'player_id' => 262, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 54, 'team_id' => 53, 'hero_id' => 71, 'player_id' => 263, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 54, 'team_id' => 53, 'hero_id' => 116, 'player_id' => 264, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 54, 'team_id' => 50, 'hero_id' => 117, 'player_id' => 245, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 54, 'team_id' => 50, 'hero_id' => 17, 'player_id' => 246, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 54, 'team_id' => 50, 'hero_id' => 102, 'player_id' => 247, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 54, 'team_id' => 50, 'hero_id' => 65, 'player_id' => 248, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 54, 'team_id' => 50, 'hero_id' => 49, 'player_id' => 249, 'created_at' => $now, 'updated_at' => $now],

            // Game 2
            ['match_id' => 55, 'team_id' => 53, 'hero_id' => 115, 'player_id' => 260, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 55, 'team_id' => 53, 'hero_id' => 108, 'player_id' => 261, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 55, 'team_id' => 53, 'hero_id' => 112, 'player_id' => 262, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 55, 'team_id' => 53, 'hero_id' => 71, 'player_id' => 263, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 55, 'team_id' => 53, 'hero_id' => 49, 'player_id' => 264, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 55, 'team_id' => 50, 'hero_id' => 117, 'player_id' => 245, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 55, 'team_id' => 50, 'hero_id' => 87, 'player_id' => 246, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 55, 'team_id' => 50, 'hero_id' => 102, 'player_id' => 247, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 55, 'team_id' => 50, 'hero_id' => 65, 'player_id' => 248, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 55, 'team_id' => 50, 'hero_id' => 116, 'player_id' => 249, 'created_at' => $now, 'updated_at' => $now],

            // Game 3
            ['match_id' => 56, 'team_id' => 53, 'hero_id' => 117, 'player_id' => 260, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 56, 'team_id' => 53, 'hero_id' => 69, 'player_id' => 261, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 56, 'team_id' => 53, 'hero_id' => 112, 'player_id' => 262, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 56, 'team_id' => 53, 'hero_id' => 71, 'player_id' => 263, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 56, 'team_id' => 53, 'hero_id' => 26, 'player_id' => 264, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 56, 'team_id' => 50, 'hero_id' => 4, 'player_id' => 245, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 56, 'team_id' => 50, 'hero_id' => 108, 'player_id' => 246, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 56, 'team_id' => 50, 'hero_id' => 102, 'player_id' => 247, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 56, 'team_id' => 50, 'hero_id' => 65, 'player_id' => 248, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 56, 'team_id' => 50, 'hero_id' => 96, 'player_id' => 249, 'created_at' => $now, 'updated_at' => $now],

            // Game 4
            ['match_id' => 57, 'team_id' => 53, 'hero_id' => 117, 'player_id' => 260, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 57, 'team_id' => 53, 'hero_id' => 9, 'player_id' => 261, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 57, 'team_id' => 53, 'hero_id' => 102, 'player_id' => 262, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 57, 'team_id' => 53, 'hero_id' => 71, 'player_id' => 263, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 57, 'team_id' => 53, 'hero_id' => 116, 'player_id' => 264, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 57, 'team_id' => 50, 'hero_id' => 37, 'player_id' => 245, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 57, 'team_id' => 50, 'hero_id' => 69, 'player_id' => 246, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 57, 'team_id' => 50, 'hero_id' => 112, 'player_id' => 247, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 57, 'team_id' => 50, 'hero_id' => 65, 'player_id' => 248, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 57, 'team_id' => 50, 'hero_id' => 96, 'player_id' => 249, 'created_at' => $now, 'updated_at' => $now],

            // Game 1
            ['match_id' => 58, 'team_id' => 1, 'hero_id' => 115, 'player_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 58, 'team_id' => 1, 'hero_id' => 30, 'player_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 58, 'team_id' => 1, 'hero_id' => 112, 'player_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 58, 'team_id' => 1, 'hero_id' => 71, 'player_id' => 19, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 58, 'team_id' => 1, 'hero_id' => 41, 'player_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 58, 'team_id' => 51, 'hero_id' => 117, 'player_id' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 58, 'team_id' => 51, 'hero_id' => 119, 'player_id' => 251, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 58, 'team_id' => 51, 'hero_id' => 57, 'player_id' => 252, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 58, 'team_id' => 51, 'hero_id' => 65, 'player_id' => 253, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 58, 'team_id' => 51, 'hero_id' => 114, 'player_id' => 254, 'created_at' => $now, 'updated_at' => $now],

            // Game 2
            ['match_id' => 59, 'team_id' => 1, 'hero_id' => 82, 'player_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 59, 'team_id' => 1, 'hero_id' => 69, 'player_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 59, 'team_id' => 1, 'hero_id' => 112, 'player_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 59, 'team_id' => 1, 'hero_id' => 71, 'player_id' => 19, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 59, 'team_id' => 1, 'hero_id' => 94, 'player_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 59, 'team_id' => 51, 'hero_id' => 118, 'player_id' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 59, 'team_id' => 51, 'hero_id' => 87, 'player_id' => 251, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 59, 'team_id' => 51, 'hero_id' => 107, 'player_id' => 252, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 59, 'team_id' => 51, 'hero_id' => 65, 'player_id' => 253, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 59, 'team_id' => 51, 'hero_id' => 96, 'player_id' => 254, 'created_at' => $now, 'updated_at' => $now],

            // Game 3
            ['match_id' => 60, 'team_id' => 1, 'hero_id' => 37, 'player_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 60, 'team_id' => 1, 'hero_id' => 87, 'player_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 60, 'team_id' => 1, 'hero_id' => 112, 'player_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 60, 'team_id' => 1, 'hero_id' => 65, 'player_id' => 19, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 60, 'team_id' => 1, 'hero_id' => 35, 'player_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 60, 'team_id' => 51, 'hero_id' => 104, 'player_id' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 60, 'team_id' => 51, 'hero_id' => 42, 'player_id' => 251, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 60, 'team_id' => 51, 'hero_id' => 23, 'player_id' => 252, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 60, 'team_id' => 51, 'hero_id' => 81, 'player_id' => 253, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 60, 'team_id' => 51, 'hero_id' => 114, 'player_id' => 254, 'created_at' => $now, 'updated_at' => $now],

            // Game 4
            ['match_id' => 61, 'team_id' => 1, 'hero_id' => 117, 'player_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 61, 'team_id' => 1, 'hero_id' => 119, 'player_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 61, 'team_id' => 1, 'hero_id' => 84, 'player_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 61, 'team_id' => 1, 'hero_id' => 71, 'player_id' => 19, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 61, 'team_id' => 1, 'hero_id' => 94, 'player_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 61, 'team_id' => 51, 'hero_id' => 4, 'player_id' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 61, 'team_id' => 51, 'hero_id' => 69, 'player_id' => 251, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 61, 'team_id' => 51, 'hero_id' => 112, 'player_id' => 252, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 61, 'team_id' => 51, 'hero_id' => 65, 'player_id' => 253, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 61, 'team_id' => 51, 'hero_id' => 96, 'player_id' => 254, 'created_at' => $now, 'updated_at' => $now],

            // Game 1
            ['match_id' => 62, 'team_id' => 53, 'hero_id' => 117, 'player_id' => 260, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 62, 'team_id' => 53, 'hero_id' => 69, 'player_id' => 261, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 62, 'team_id' => 53, 'hero_id' => 84, 'player_id' => 262, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 62, 'team_id' => 53, 'hero_id' => 65, 'player_id' => 263, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 62, 'team_id' => 53, 'hero_id' => 35, 'player_id' => 264, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 62, 'team_id' => 51, 'hero_id' => 93, 'player_id' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 62, 'team_id' => 51, 'hero_id' => 87, 'player_id' => 251, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 62, 'team_id' => 51, 'hero_id' => 112, 'player_id' => 252, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 62, 'team_id' => 51, 'hero_id' => 71, 'player_id' => 253, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 62, 'team_id' => 51, 'hero_id' => 116, 'player_id' => 254, 'created_at' => $now, 'updated_at' => $now],

            // Game 2
            ['match_id' => 63, 'team_id' => 53, 'hero_id' => 117, 'player_id' => 260, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 63, 'team_id' => 53, 'hero_id' => 69, 'player_id' => 261, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 63, 'team_id' => 53, 'hero_id' => 110, 'player_id' => 262, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 63, 'team_id' => 53, 'hero_id' => 31, 'player_id' => 263, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 63, 'team_id' => 53, 'hero_id' => 26, 'player_id' => 264, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 63, 'team_id' => 51, 'hero_id' => 115, 'player_id' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 63, 'team_id' => 51, 'hero_id' => 87, 'player_id' => 251, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 63, 'team_id' => 51, 'hero_id' => 112, 'player_id' => 252, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 63, 'team_id' => 51, 'hero_id' => 65, 'player_id' => 253, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 63, 'team_id' => 51, 'hero_id' => 114, 'player_id' => 254, 'created_at' => $now, 'updated_at' => $now],

            // Game 3
            ['match_id' => 64, 'team_id' => 53, 'hero_id' => 104, 'player_id' => 260, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 64, 'team_id' => 53, 'hero_id' => 69, 'player_id' => 261, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 64, 'team_id' => 53, 'hero_id' => 67, 'player_id' => 262, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 64, 'team_id' => 53, 'hero_id' => 75, 'player_id' => 263, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 64, 'team_id' => 53, 'hero_id' => 26, 'player_id' => 264, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 64, 'team_id' => 51, 'hero_id' => 116, 'player_id' => 250, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 64, 'team_id' => 51, 'hero_id' => 17, 'player_id' => 251, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 64, 'team_id' => 51, 'hero_id' => 102, 'player_id' => 252, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 64, 'team_id' => 51, 'hero_id' => 65, 'player_id' => 253, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 64, 'team_id' => 51, 'hero_id' => 114, 'player_id' => 254, 'created_at' => $now, 'updated_at' => $now],

            // Game 1
            ['match_id' => 65, 'team_id' => 50, 'hero_id' => 93, 'player_id' => 245, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 65, 'team_id' => 50, 'hero_id' => 42, 'player_id' => 246, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 65, 'team_id' => 50, 'hero_id' => 112, 'player_id' => 247, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 65, 'team_id' => 50, 'hero_id' => 81, 'player_id' => 248, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 65, 'team_id' => 50, 'hero_id' => 96, 'player_id' => 249, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 65, 'team_id' => 1, 'hero_id' => 115, 'player_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 65, 'team_id' => 1, 'hero_id' => 69, 'player_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 65, 'team_id' => 1, 'hero_id' => 107, 'player_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 65, 'team_id' => 1, 'hero_id' => 65, 'player_id' => 19, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 65, 'team_id' => 1, 'hero_id' => 94, 'player_id' => 5, 'created_at' => $now, 'updated_at' => $now],

            // Game 2
            ['match_id' => 66, 'team_id' => 50, 'hero_id' => 117, 'player_id' => 245, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 66, 'team_id' => 50, 'hero_id' => 69, 'player_id' => 246, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 66, 'team_id' => 50, 'hero_id' => 76, 'player_id' => 247, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 66, 'team_id' => 50, 'hero_id' => 81, 'player_id' => 248, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 66, 'team_id' => 50, 'hero_id' => 49, 'player_id' => 249, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 66, 'team_id' => 1, 'hero_id' => 113, 'player_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 66, 'team_id' => 1, 'hero_id' => 119, 'player_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 66, 'team_id' => 1, 'hero_id' => 23, 'player_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 66, 'team_id' => 1, 'hero_id' => 65, 'player_id' => 19, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 66, 'team_id' => 1, 'hero_id' => 26, 'player_id' => 5, 'created_at' => $now, 'updated_at' => $now],

            // Game 3
            ['match_id' => 67, 'team_id' => 50, 'hero_id' => 115, 'player_id' => 245, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 67, 'team_id' => 50, 'hero_id' => 119, 'player_id' => 246, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 67, 'team_id' => 50, 'hero_id' => 70, 'player_id' => 247, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 67, 'team_id' => 50, 'hero_id' => 65, 'player_id' => 248, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 67, 'team_id' => 50, 'hero_id' => 114, 'player_id' => 249, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 67, 'team_id' => 1, 'hero_id' => 37, 'player_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 67, 'team_id' => 1, 'hero_id' => 87, 'player_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 67, 'team_id' => 1, 'hero_id' => 102, 'player_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 67, 'team_id' => 1, 'hero_id' => 71, 'player_id' => 19, 'created_at' => $now, 'updated_at' => $now],
            ['match_id' => 67, 'team_id' => 1, 'hero_id' => 120, 'player_id' => 5, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
