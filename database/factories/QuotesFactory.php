<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\quote>
 */
class QuotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'body' => $this->faker->sentence(),
            'thumbnail' => $this->faker->imageUrl(),
            'movie_id' => Movie::factory(),
            'user_id' => User::factory(),
        ];
    }
}
