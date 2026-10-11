<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $name = fake()->unique()->words(3, true);

        return [
            'category_id' => Category::query()
                ->inRandomOrder()
                ->value('id') ?? Category::factory()->create()->id,
            'name' => ucfirst($name),
            'slug' => Str::slug($name) . '-' . fake()->unique()->numberBetween(1000, 999999),
            'description' => fake()->sentence(12),
            'price' => fake()->numberBetween(10000, 2000000),
            'stock' => fake()->numberBetween(0, 100),
            'image' => null,
            'is_active' => true,
        ];
    }
}
