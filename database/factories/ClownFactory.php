<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clown>
 */
class ClownFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'description' => $this->faker->text(),
            'rating' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
