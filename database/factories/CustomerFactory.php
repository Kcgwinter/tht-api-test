<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $type = $this->faker->randomElement(['C','B','I']); // Customer, Business, Inactive
        $name = $type == 'C' ? $this->faker->name() : $this->faker->company();
        return [
            //
            'name' => $name,
            'type' => $type,
            'email' => $this->faker->email(),
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'postalCode' => $this->faker->postcode(),
            'phone' => $this->faker->phoneNumber()
        ];
    }
}
