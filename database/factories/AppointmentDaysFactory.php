<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\appointmentDays>
 */
class AppointmentDaysFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Monday' => $this->faker->boolean(),
            'Tuesday' => $this->faker->boolean(),
            'Wednesday' => $this->faker->boolean(),
            'Thursday' => $this->faker->boolean(),
            'Friday' => $this->faker->boolean(),
            'Saturday' => $this->faker->boolean(),
            'Sunday' => $this->faker->boolean(),
        ];
    }
}
