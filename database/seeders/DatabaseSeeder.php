<?php

namespace Database\Seeders;

use App\Models\HabitCategory;
use App\Models\HabitScheduleDay;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            HabitCategorySeeder::class,
            HabitSeeder::class,
            HabitScheduleDaySeeder::class,
        ]);
    }
}
