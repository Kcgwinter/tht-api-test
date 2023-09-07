<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => "Example Company",
            'phone' => "+49 176 123456",
            'email' => "info@examplecompany.com",
            'address' => "Ex Street 123"
                        //
        ];
    }
}
