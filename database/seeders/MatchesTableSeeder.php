<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matches')->insert([
            [
                'series_id' => 1,
                'tournament_id' => 1,
                'match_number' => 1,
                'winner_id' => 3,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 89,
                'tournament_id' => 4,
                'match_number' => 1,
                'winner_id' => 3,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 89,
                'tournament_id' => 4,
                'match_number' => 2,
                'winner_id' => 35,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 89,
                'tournament_id' => 4,
                'match_number' => 3,
                'winner_id' => 3,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 97,
                'tournament_id' => 4,
                'match_number' => 1,
                'winner_id' => 4,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 97,
                'tournament_id' => 4,
                'match_number' => 2,
                'winner_id' => 37,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 97,
                'tournament_id' => 4,
                'match_number' => 3,
                'winner_id' => 4,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 97,
                'tournament_id' => 4,
                'match_number' => 4,
                'winner_id' => 37,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 97,
                'tournament_id' => 4,
                'match_number' => 5,
                'winner_id' => 37,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 97,
                'tournament_id' => 4,
                'match_number' => 6,
                'winner_id' => 37,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],

            [
                'series_id' => 96,
                'tournament_id' => 4,
                'match_number' => 1,
                'winner_id' => 3,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 96,
                'tournament_id' => 4,
                'match_number' => 2,
                'winner_id' => 3,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 96,
                'tournament_id' => 4,
                'match_number' => 3,
                'winner_id' => 4,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 96,
                'tournament_id' => 4,
                'match_number' => 4,
                'winner_id' => 3,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],

            [
                'series_id' => 95,
                'tournament_id' => 4,
                'match_number' => 1,
                'winner_id' => 37,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],

            [
                'series_id' => 95,
                'tournament_id' => 4,
                'match_number' => 2,
                'winner_id' => 36,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 95,
                'tournament_id' => 4,
                'match_number' => 3,
                'winner_id' => 37,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 95,
                'tournament_id' => 4,
                'match_number' => 4,
                'winner_id' => 37,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => null,
                'tournament_id' => 7,
                'match_number' => 1,
                'winner_id' => 43,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => null,
                'tournament_id' => 7,
                'match_number' => 2,
                'winner_id' => 43,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => null,
                'tournament_id' => 7,
                'match_number' => 3,
                'winner_id' => 43,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],

            // MPL MY S17 – Series 2: Invictus Gaming 3:2 Team Vamos (match_ids 22–26)
            // Per-game winner verified via winner_side (blue→iG=47, red→VMS=43)
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 1, 'winner_id' => 43, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 2, 'winner_id' => 47, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 3, 'winner_id' => 47, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 4, 'winner_id' => 43, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 5, 'winner_id' => 47, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],

            // MPL MY S17 – Series 3: Team Rey 0:3 Bigetron (match_ids 27–29)
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 1, 'winner_id' => 46, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 2, 'winner_id' => 46, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 3, 'winner_id' => 46, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],

            // MPL MY S17 – Series 4: Selangor Red Giants 3:2 Bigetron (match_ids 30–34)
            // Per-game winner verified via winner_side (blue→SRG=48, red→BTRM=46)
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 1, 'winner_id' => 46, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 2, 'winner_id' => 48, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 3, 'winner_id' => 48, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 4, 'winner_id' => 46, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 5, 'winner_id' => 48, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],

            // MPL MY S17 – Series 5: Invictus Gaming 1:3 Selangor Red Giants (match_ids 35–38)
            // TODO: verify per-game winner_id (scraper winner_side data inconsistent for this series)
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 1, 'winner_id' => 48, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 2, 'winner_id' => 48, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 3, 'winner_id' => 47, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 4, 'winner_id' => 48, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],

            // MPL MY S17 – Series 6: Team Vamos 3:1 Bigetron (match_ids 39–42)
            // TODO: verify per-game winner_id (scraper winner_side data inconsistent for this series)
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 1, 'winner_id' => 46, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 2, 'winner_id' => 43, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 3, 'winner_id' => 43, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 4, 'winner_id' => 43, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],

            // MPL MY S17 – Series 7: Invictus Gaming 0:4 Team Vamos (match_ids 43–46)
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 1, 'winner_id' => 43, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 2, 'winner_id' => 43, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 3, 'winner_id' => 43, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => null, 'tournament_id' => 7, 'match_number' => 4, 'winner_id' => 43, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],

            ['series_id' => 99, 'tournament_id' => 8, 'match_number' => 1, 'winner_id' => 50, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 99, 'tournament_id' => 8, 'match_number' => 2, 'winner_id' => 50, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 99, 'tournament_id' => 8, 'match_number' => 3, 'winner_id' => 50, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            
            ['series_id' => 100, 'tournament_id' => 8, 'match_number' => 1, 'winner_id' => 51, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 100, 'tournament_id' => 8, 'match_number' => 2, 'winner_id' => 52, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 100, 'tournament_id' => 8, 'match_number' => 3, 'winner_id' => 51, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 100, 'tournament_id' => 8, 'match_number' => 4, 'winner_id' => 51, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],

            ['series_id' => 101, 'tournament_id' => 8, 'match_number' => 1, 'winner_id' => 50, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 101, 'tournament_id' => 8, 'match_number' => 2, 'winner_id' => 50, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 101, 'tournament_id' => 8, 'match_number' => 3, 'winner_id' => 53, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 101, 'tournament_id' => 8, 'match_number' => 4, 'winner_id' => 50, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],

            ['series_id' => 102, 'tournament_id' => 8, 'match_number' => 1, 'winner_id' => 51, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 102, 'tournament_id' => 8, 'match_number' => 2, 'winner_id' => 1, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 102, 'tournament_id' => 8, 'match_number' => 3, 'winner_id' => 1, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 102, 'tournament_id' => 8, 'match_number' => 4, 'winner_id' => 1, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],

            ['series_id' => 103, 'tournament_id' => 8, 'match_number' => 1, 'winner_id' => 51, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 103, 'tournament_id' => 8, 'match_number' => 2, 'winner_id' => 51, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 103, 'tournament_id' => 8, 'match_number' => 3, 'winner_id' => 51, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],

            ['series_id' => 104, 'tournament_id' => 8, 'match_number' => 1, 'winner_id' => 1, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 104, 'tournament_id' => 8, 'match_number' => 2, 'winner_id' => 1, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
            ['series_id' => 104, 'tournament_id' => 8, 'match_number' => 3, 'winner_id' => 1, 'created_at' => '2025-08-04 06:07:33', 'updated_at' => '2025-08-04 06:07:33'],
        ]);
    }
}
