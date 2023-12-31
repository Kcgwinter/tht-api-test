<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\onSiteAssessments>
 */
class OnSiteAssessmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'needed' => '1',
            'text' => $this->faker->realText(),
            'date' => $this->faker->dateTimeThisYear()
        ];
    }
}
