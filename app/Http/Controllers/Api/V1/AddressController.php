<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Address;
use App\Http\Requests\V1\StoreAddressRequest;
use App\Http\Requests\V1\UpdateAddressRequest;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        return response()->json([
            'status' => true,
            'message' => "Addresses received",
            'data' => $addresses
        ], 200);
    }

    public function store(StoreAddressRequest $request)
    {
        $address = Address::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Address created",
            'data' => $address
        ], 200);
    }

    public function show(Address $address)
    {
        $address  = Address::find($address->id);
        return response()->json([
            'status' => true,
            'message' => "Address received",
            'data' => $address
        ], 200);
    }

    public function update(UpdateAddressRequest $request, Address $address)
    {
        $address->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Address updated",
            'data' => $address
        ], 200);
    }

    public function destroy(Address $address)
    {
        $address->delete();

        return response()->json([
            'status' => true,
            'message' => 'Address deleted',
            'data' => ""
        ], 200);
    }
}
