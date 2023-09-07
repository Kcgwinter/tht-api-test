<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Customer;
use App\Http\Requests\V1\StoreCustomerRequest;
use App\Http\Requests\V1\UpdateCustomerRequest;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return response()->json([
            'status' => true,
            'message' => "Customers received",
            'data' => $customers
        ], 200);
    }

    public function store(StoreCustomerRequest $request)
    {
        $customer = Customer::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Customer created",
            'data' => $customer
        ], 200);
    }

    public function show(Customer $customer)
    {
        $customer = Customer::find($customer->id);
        return response()->json([
            'status' => true,
            'message' => "Customer received",
            'data' => $customer
        ], 200);
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Customer updated",
            'data' => $customer
        ], 200);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return response()->json([
            'status' => true,
            'message' => 'Customer deleted',
            'data' => ""
        ], 200);
    }
}
