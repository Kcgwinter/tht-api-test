<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Invoice;
use App\Http\Requests\V1\StoreInvoiceRequest;
use App\Http\Requests\V1\UpdateInvoiceRequest;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $invoices = Invoice::all();
        return response()->json([
            'status' => true,
            'message' => "Invoices received",
            'data' => $invoices
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvoiceRequest $request)
    {
        $invoice = Invoice::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Invoice created",
            'data' => $invoice
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $invoice  = Invoice::find($id);
        return response()->json([
            'status' => true,
            'message' => "Invoice received",
            'data' => $invoice
        ], 200);
    }

    public function showWithData(int $id)
    {
        $invoice = Invoice::with('Items')->with('Payments')->find($id);

        return response()->json([
            'status' => true,
            'message' => "invoice received",
            'data' => $invoice
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        $invoice->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Invoice updated",
            'data' => $invoice
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return response()->json([
            'status' => true,
            'message' => 'Invoice deleted',
            'data' => ""
        ], 200);
    }
}
