<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\appointmentTimes>
 */
class AppointmentTimesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'AnyTime' => $this->faker->boolean(),
            'Morning' => $this->faker->boolean(),
            'Afternoon' => $this->faker->boolean(),
            'Evening' => $this->faker->boolean(),
        ];
    }
}
