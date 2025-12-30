<?php

namespace Database\Seeders;

use App\Models\HabitScheduleDay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabitScheduleDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HabitScheduleDay::create([
            'habit_id' => 1,
            'weekday' => 2,
        ]);
        HabitScheduleDay::create([
            'habit_id' => 1,
            'weekday' => 4,
        ]);
        HabitScheduleDay::create([
            'habit_id' => 2,
            'weekday' => 2,
        ]);
    }
}
