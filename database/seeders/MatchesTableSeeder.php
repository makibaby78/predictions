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
                'id' => 1,
                'series_id' => 1,
                'scheduled_at' => '2025-07-23 14:06:00',
                'match_number' => 1,
                'winner_id' => 3,
                'started_at' => null,
                'ended_at' => null,
                'created_at' => '2025-08-04 06:07:33',
                'updated_at' => '2025-08-04 06:07:33',
            ],
        ]);
    }
}
