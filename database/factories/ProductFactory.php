<?php

namespace Database\Factories;

use App\Models\Product;
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
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2, 0, 12000),
            'description' => $this->faker->paragraphs(10, true),
            'slug' => $this->faker->slug(),
            'image' => 'https://picsum.photos/',
            'created_at' => $this->faker->dateTimeBetween(),
            'updated_at' => null
        ];
    }
}
