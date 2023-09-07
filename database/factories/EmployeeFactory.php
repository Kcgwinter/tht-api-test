<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $company = Company::first();

        return [
            "company_id" => $company->id,
            "firstname" => $this->faker->firstname(),
            "lastname" => $this->faker->lastName(),
            //
        ];
    }
}
