<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Health',
        ]);
        Category::factory()->create([
            'name' => 'Sport',
        ]);
        Category::factory()->create([
            'name' => 'Technology',
        ]);
        Category::factory()->create([
            'name' => 'Finance',
        ]);
        Category::factory()->create([
            'name' => 'Travel',
        ]);
    }
}
