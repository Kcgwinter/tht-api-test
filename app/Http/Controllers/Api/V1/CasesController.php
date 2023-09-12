<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Cases;
use App\Http\Requests\V1\StoreCasesRequest;
use App\Http\Requests\V1\UpdateCasesRequest;
use App\Http\Controllers\Controller;

class CasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Cases::all();
        return response()->json([
            'status' => true,
            'message' => "cases received",
            'data' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCasesRequest $request)
    {
        $item = Cases::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "case created",
            'data' => $item
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jobs = Cases::find($id);

        return response()->json([
            'status' => true,
            'message' => "Case received",
            'data' => $jobs
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function showWithData($id)
    {
        $jobs = Cases::with('Notes')
            ->with('Address')
            ->with('Request')
            ->with('Quote')
            ->with('Job')
            ->with('Invoice')
            ->find($id);

        return response()->json([
            'status' => true,
            'message' => "Case with Data received",
            'data' => $jobs
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCasesRequest $request, Cases $cases)
    {
        $cases->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "case updated",
            'data' => $cases
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cases $cases)
    {
        $cases->delete();

        return response()->json([
            'status' => true,
            'message' => 'case deleted',
            'data' => ""
        ], 200);
    }
}
