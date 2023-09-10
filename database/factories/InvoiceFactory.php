<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Address;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'issueDate' => $this->faker->dateTimeThisYear(),
            'paymentDue' => $this->faker->dateTimeThisYear(),
            'billingAddress_id' => Address::all()->random()->id
        ];
    }
}
