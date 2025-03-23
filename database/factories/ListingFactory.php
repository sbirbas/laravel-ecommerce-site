<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Listing;

class ListingFactory extends Factory
{
    protected $model = Listing::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'img' => fake()->imageUrl(),
            'price' => fake()->randomFloat(2, 10, 1000),
            'vendor' => fake()->company(),
            'stock' => fake()->numberBetween(1, 500),
        ];
    }
}
