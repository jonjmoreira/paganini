<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_name' => $this->faker->name(),
            'current_state' => $this->faker->randomDigit(),
            'owner_id' => \App\Models\User::inRandomOrder()->first(),
            'content' => $this->faker->realText(),
            'priority' => $this->faker->randomDigit(),
        ];
    }
}
