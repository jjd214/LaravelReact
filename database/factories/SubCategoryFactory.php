<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(), // Generate a random word as the name
            'slug' => Str::slug($this->faker->unique()->word),
            'category_id' => Category::factory(), // Associate with a category
            'created_at' => now(), // Set the current timestamp for created_at
            'updated_at' => now(), // Set the current timestamp for updated_at
        ];
    }
}
