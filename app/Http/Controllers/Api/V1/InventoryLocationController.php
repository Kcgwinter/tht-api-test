<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Inventory_location;
use App\Http\Requests\V1\StoreInventory_locationRequest;
use App\Http\Requests\V1\UpdateInventory_locationRequest;
use App\Http\Controllers\Controller;

class InventoryLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Inventory_location::all();
        return response()->json([
            'status' => true,
            'message' => "Inventory received",
            'data' => $items
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventory_locationRequest $request)
    {
        $item = Inventory_location::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Item created",
            'data' => $item
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = Inventory_location::find($id);
        return response()->json([
            'status' => true,
            'message' => "Item received",
            'data' => $item
        ], 200);
    }


    public function showWithData(int $id)
    {
        $invoice = Inventory_location::with('Items')->find($id);

        return response()->json([
            'status' => true,
            'message' => "Location received",
            'data' => $invoice
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventory_locationRequest $request, Inventory_location $inventory_location)
    {
        $inventory_location->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Item updated",
            'data' => $inventory_location
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory_location $inventory_location)
    {
        $inventory_location->delete();

        return response()->json([
            'status' => true,
            'message' => 'item deleted',
            'data' => ""
        ], 200);
    }
}
