<?php

namespace Database\Factories;

use \App\Models\Category;
use \App\Models\Restourant;
use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = ['meal','drink'];

        return [
            'name' => fake()->randomElement(['Merjimek', 'Pizza', 'Burger', 'Kebab', 'Somsa', 'Pasta',"Chorba", 'Salad']),
            'price' => fake()->numberBetween(20, 500),
            'code' => fake()->bothify('##??#?##'),
            'like_count' => fake()->numberBetween(0, 5000),
            'category_id' => Category::inRandomOrder()->first()->id,
            'restaurant_id' => Restourant::inRandomOrder()->first()->id,
            'type' => fake()-> randomElement($type)
        ];
    }
}
