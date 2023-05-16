<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->realText(),
            'bits' => $this->faker->randomDigit(),
            'flag_count' => $this->faker->randomDigit(),
            'published_at' => now(),
            'user_id' => \App\Models\User::inRandomOrder()->first(),
        ];
    }
}
