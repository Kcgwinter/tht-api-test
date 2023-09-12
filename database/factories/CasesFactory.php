<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Address;
use App\Models\Request;
use App\Models\quotes;
use App\Models\Jobs;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cases>
 */
class CasesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customer = Customer::first();
        $address = Address::first();
        $request = Request::first();
        $quote = quotes::first();
        $job = Jobs::first();
        $invoice = Invoice::first();

        return [
            'name' => $this->faker->colorName(),
            'customer_id' => $customer->id,
            'address_id' => $address->id,
            'request_id' => $request->id
        ];
    }
}
