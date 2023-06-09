<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bond>
 */
class BondFactory extends Factory
{

    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'follower_user_id' => \App\Models\User::inRandomOrder()->first(),
            'following_user_id' => \App\Models\User::inRandomOrder()->first(),
        ];
    }
}
