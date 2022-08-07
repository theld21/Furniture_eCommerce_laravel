<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => rand(100000,6000000),
            'old_price' => rand(100000,6000000),
            'feature_image' => 'images/products/gACYLigunA8DXzkjmFAen3OHvUZBerjKoPRoZQKX.png',
            'content' => $this->faker->text(200),
            'user_id' => rand(1,9),
            'category_id' => rand(1,9),
            'status' => rand(0,1)
        ];
    }
}
