<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\quotesItems;
use App\Http\Requests\V1\StorequotesItemsRequest;
use App\Http\Requests\V1\UpdatequotesItemsRequest;
use App\Http\Controllers\Controller;

class QuotesItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = quotesItems::all();
        return response()->json([
            'status' => true,
            'message' => "items received",
            'data' => $items
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorequotesItemsRequest $request)
    {
        $item = quotesItems::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "item created",
            'data' => $item
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = quotesItems::find($id);
        return response()->json([
            'status' => true,
            'message' => "item received",
            'data' => $item
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatequotesItemsRequest $request, quotesItems $quotesItems)
    {
        $quotesItems->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Item updated",
            'data' => $quotesItems
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(quotesItems $quotesItems)
    {
        $quotesItems->delete();

        return response()->json([
            'status' => true,
            'message' => 'item deleted',
            'data' => ""
        ], 200);
    }
}
