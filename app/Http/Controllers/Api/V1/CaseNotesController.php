<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\CaseNotes;
use App\Http\Requests\V1\StoreCaseNotesRequest;
use App\Http\Requests\V1\UpdateCaseNotesRequest;
use App\Http\Controllers\Controller;

class CaseNotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = CaseNotes::all();
        return response()->json([
            'status' => true,
            'message' => "Notes received",
            'data' => $notes
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCaseNotesRequest $request)
    {
        $item = CaseNotes::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "note created",
            'data' => $item
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item  = CaseNotes::find($id);
        return response()->json([
            'status' => true,
            'message' => "note received",
            'data' => $item
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCaseNotesRequest $request, CaseNotes $caseNotes)
    {
        $caseNotes->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "note updated",
            'data' => $caseNotes
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CaseNotes $caseNotes)
    {
        $caseNotes->delete();

        return response()->json([
            'status' => true,
            'message' => 'note deleted',
            'data' => ""
        ], 200);
    }
}
