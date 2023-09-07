<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['A','I']);
        return [
            'customer_id' => Customer::factory(),
            'name' => $this->faker->streetAddress(),
            'street' => $this->faker->streetName(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'postalcode' => $this->faker->postcode(),
            'country' => $this->faker->country()
        ];
    }
}
