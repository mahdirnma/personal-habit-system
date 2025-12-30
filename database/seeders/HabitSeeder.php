<?php

namespace Database\Seeders;

use App\Models\Habit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Habit::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'habit 1',
            'description' => 'lorem ipsum 1',
            'scheduled_time' => '12:00:00',
            'due_at'=>'2025-12-31',
            'frequency' => 'daily',
            'remind_at'=>'10:00:00',
        ]);
        Habit::create([
            'category_id' => 2,
            'user_id' => 1,
            'title' => 'habit 2',
            'description' => 'lorem ipsum 2',
            'scheduled_time' => '20:00:00',
            'due_at'=>'2026-1-30',
            'frequency' => 'weekly',
            'remind_at'=>'19:15:00',
        ]);

    }
}
