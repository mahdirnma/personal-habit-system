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
            'weekday' => 'tuesday',
        ]);
        HabitScheduleDay::create([
            'habit_id' => 1,
            'weekday' => 'wednesday',
        ]);
        HabitScheduleDay::create([
            'habit_id' => 1,
            'weekday' => 'tuesday',
        ]);
    }
}
