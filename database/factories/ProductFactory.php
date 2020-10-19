<?php

namespace Database\Factories;

use App\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(2),
            'price' => $this->faker->randomFloat($MaxDecimals = 2, $min = 3, $max = 100),
            'stock' => $this->faker->numberBetween($min = 1, $max = 15),
            'status' => $this->faker->randomElement(['available', 'unavailable']),
        ];
    }
}
