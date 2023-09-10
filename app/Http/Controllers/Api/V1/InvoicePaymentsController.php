<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\InvoicePayments;
use App\Http\Requests\V1\StoreInvoicePaymentsRequest;
use App\Http\Requests\V1\UpdateInvoicePaymentsRequest;
use App\Http\Controllers\Controller;

class InvoicePaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = InvoicePayments::all();
        return response()->json([
            'status' => true,
            'message' => "payments received",
            'data' => $payments
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvoicePaymentsRequest $request)
    {
        $payments = InvoicePayments::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "payments created",
            'data' => $payments
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $payment  = InvoicePayments::find($id);
        return response()->json([
            'status' => true,
            'message' => "payment received",
            'data' => $payment
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoicePaymentsRequest $request, InvoicePayments $invoicePayments)
    {
        $invoicePayments->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Payment updated",
            'data' => $invoicePayments
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InvoicePayments $invoicePayments)
    {
        $invoicePayments->delete();

        return response()->json([
            'status' => true,
            'message' => 'Payment deleted',
            'data' => ""
        ], 200);
    }
}
