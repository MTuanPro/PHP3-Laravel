<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->unique()->words(3, true),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(1000000, 30000000),
            'stock' => $this->faker->numberBetween(1, 100),
            'image' => $this->faker->imageUrl(400, 400, 'tech', true, 'product'),
            'category_id' => Category::inRandomOrder()->first()?->id ?? 1,
            'is_active' => $this->faker->boolean(90),
        ];
    }
}
