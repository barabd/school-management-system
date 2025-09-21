<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Week;
use Illuminate\Support\Carbon;

class WeekSeeder extends Seeder
{
    public function run(): void
    {
        // No truncate/delete — keep existing FK references intact
        $now = Carbon::now();

        $rows = [
            ['id' => 1, 'name' => 'Saturday',  'sort' => 1, 'created_at' => $now, 'updated_at' => $now, 'deleted_at' => null],
            ['id' => 2, 'name' => 'Sunday',    'sort' => 2, 'created_at' => $now, 'updated_at' => $now, 'deleted_at' => null],
            ['id' => 3, 'name' => 'Monday',    'sort' => 3, 'created_at' => $now, 'updated_at' => $now, 'deleted_at' => null],
            ['id' => 4, 'name' => 'Tuesday',   'sort' => 4, 'created_at' => $now, 'updated_at' => $now, 'deleted_at' => null],
            ['id' => 5, 'name' => 'Wednesday', 'sort' => 5, 'created_at' => $now, 'updated_at' => $now, 'deleted_at' => null],
            ['id' => 6, 'name' => 'Thursday',  'sort' => 6, 'created_at' => $now, 'updated_at' => $now, 'deleted_at' => null],
            ['id' => 7, 'name' => 'Friday',    'sort' => 7, 'created_at' => $now, 'updated_at' => $now, 'deleted_at' => null],
        ];

        // Insert new or update existing (by id). Also clears soft-deletes.
        Week::query()->upsert($rows, ['id'], ['name', 'sort', 'updated_at', 'deleted_at']);
    }
}
