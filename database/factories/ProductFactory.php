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
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'barcode' => $this->faker->randomNumber(5),
            'cost' => $this->faker->randomNumber(4),
            'price' => $this->faker->randomNumber(5),
            'stock'=> $this->faker->randomNumber(3),
            'alert' => $this->faker->randomNumber(3),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
