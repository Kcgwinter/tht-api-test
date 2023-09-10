<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'oneTimeJob' => $this->faker->boolean(),
            'startDate' => $this->faker->dateTimeThisYear(),
            'endDate' => $this->faker->dateTimeThisYear(),
            'total' => $this->faker->randomDigitNotNull(),
        ];
    }
}
