<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'position' => $this->faker->jobTitle(),
            'job_description' => $this->faker->sentence(),
            'salary' => $this->faker->numberBetween(40000, 120000),
            'salary_frequency' => 'yearly'
        ];
    }
}
