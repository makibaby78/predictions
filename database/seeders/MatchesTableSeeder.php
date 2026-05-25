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
                'match_number' => 1,
                'winner_id' => 3,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
            [
                'series_id' => 89,
                'match_number' => 1,
                'winner_id' => 3,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
        ]);
    }
}
