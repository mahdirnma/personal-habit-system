<?php

namespace Database\Seeders;

use App\Models\HabitCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabitCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HabitCategory::create([
            'name' => 'category 1',
            'description' => 'lorem ipsum 1',
            'user_id' => 1,
        ]);
        HabitCategory::create([
            'name' => 'category 2',
            'description' => 'lorem ipsum 2',
            'user_id' => 2,
        ]);

    }
}
