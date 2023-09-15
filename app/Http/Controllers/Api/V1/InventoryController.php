<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Inventory;
use App\Http\Requests\V1\StoreInventoryRequest;
use App\Http\Requests\V1\UpdateInventoryRequest;
use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Inventory::all();
        return response()->json([
            'status' => true,
            'message' => "Inventory received",
            'data' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryRequest $request)
    {
        $item = Inventory::create($request->all());

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
        $item  = Inventory::find($id);
        return response()->json([
            'status' => true,
            'message' => "Item received",
            'data' => $item
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    {
        $inventory->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Item updated",
            'data' => $inventory
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return response()->json([
            'status' => true,
            'message' => 'item deleted',
            'data' => ""
        ], 200);
    }
}
