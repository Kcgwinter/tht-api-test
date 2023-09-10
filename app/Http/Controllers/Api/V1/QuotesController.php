<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\quotes;
use App\Http\Requests\V1\StorequotesRequest;
use App\Http\Requests\V1\UpdatequotesRequest;
use App\Http\Controllers\Controller;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = quotes::all();
        return response()->json([
            'status' => true,
            'message' => "quotes received",
            'data' => $items
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorequotesRequest $request)
    {
        $item = quotes::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "quote created",
            'data' => $item
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item  = quotes::find($id);
        return response()->json([
            'status' => true,
            'message' => "quote received",
            'data' => $item
        ], 200);
    }


    public function showWithData(int $id)
    {
        $quote = quotes::with('Items')->find($id);

        return response()->json([
            'status' => true,
            'message' => "quote received",
            'data' => $quote
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatequotesRequest $request, quotes $quotes)
    {
        $quotes->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Quote updated",
            'data' => $quotes
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(quotes $quotes)
    {
        $quotes->delete();

        return response()->json([
            'status' => true,
            'message' => 'quote deleted',
            'data' => ""
        ], 200);
    }
}
