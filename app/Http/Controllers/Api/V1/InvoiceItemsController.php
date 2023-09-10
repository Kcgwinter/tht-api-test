<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\InvoiceItems;
use App\Http\Requests\V1\StoreInvoiceItemsRequest;
use App\Http\Requests\V1\UpdateInvoiceItemsRequest;
use App\Http\Controllers\Controller;

class InvoiceItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = InvoiceItems::all();
        return response()->json([
            'status' => true,
            'message' => "items received",
            'data' => $items
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvoiceItemsRequest $request)
    {
        $item = InvoiceItems::create($request->all());

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
        $item  = InvoiceItems::find($id);
        return response()->json([
            'status' => true,
            'message' => "item received",
            'data' => $item
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoiceItemsRequest $request, InvoiceItems $invoiceItem)
    {
        $invoiceItem->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Item updated",
            'data' => $invoiceItem
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InvoiceItems $invoiceItem)
    {
        $invoiceItem->delete();

        return response()->json([
            'status' => true,
            'message' => 'item deleted',
            'data' => ""
        ], 200);
    }
}
