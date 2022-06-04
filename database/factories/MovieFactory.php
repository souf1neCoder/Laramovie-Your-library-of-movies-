<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(2),
            'year'=>$this->faker->year(),
            'watchit'=>$this->faker->boolean(),
            'rating'=>$this->faker->randomFloat(1,0,10)
        ];
    }
}
