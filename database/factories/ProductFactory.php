<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SubCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sub_category_id' => SubCategory::factory(), // Associate with a subcategory
            'name' => $this->faker->word(), // Generate a random product name
            'sku' => $this->faker->unique()->numerify('SKU###'), // Generate a unique SKU
            'price' => $this->faker->randomNumber(4, true), // Generate a random price, e.g. 1000, 2000, ...
            'quantity' => $this->faker->numberBetween(1, 100), // Generate a random quantity between 1 and 100
            'description' => $this->faker->optional()->paragraph(), // Generate a random description or leave it empty
            'image' => $this->faker->imageUrl(640, 480, 'technics'), // Generate a random image URL (or use an optional image)
            'created_at' => now(), // Set the current timestamp for created_at
            'updated_at' => now(), // Set the current timestamp for updated_at
        ];
    }
}
