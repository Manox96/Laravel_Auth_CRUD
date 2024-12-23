<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'text' => fake()->paragraphs(3, true),
            'category_id' => Category::factory(),
        ];
    }
}
