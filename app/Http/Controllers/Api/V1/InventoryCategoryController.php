<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Inventory_category;
use App\Http\Requests\V1\StoreInventory_categoryRequest;
use App\Http\Requests\V1\UpdateInventory_categoryRequest;
use App\Http\Controllers\Controller;

class InventoryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Inventory_category::all();
        return response()->json([
            'status' => true,
            'message' => "Inventory received",
            'data' => $items
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventory_categoryRequest $request)
    {
        $item = Inventory_category::create($request->all());

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
        $item = Inventory_category::find($id);
        return response()->json([
            'status' => true,
            'message' => "Item received",
            'data' => $item
        ], 200);
    }

    public function showWithData(int $id)
    {
        $invoice = Inventory_category::with('Items')->find($id);

        return response()->json([
            'status' => true,
            'message' => "Category received",
            'data' => $invoice
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventory_categoryRequest $request, Inventory_category $inventory_category)
    {
        $inventory_category->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Item updated",
            'data' => $inventory_category
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory_category $inventory_category)
    {
        $inventory_category->delete();

        return response()->json([
            'status' => true,
            'message' => 'item deleted',
            'data' => ""
        ], 200);
    }
}
