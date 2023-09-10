<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\onSiteAssessments;
use App\Http\Requests\V1\StoreonSiteAssessmentsRequest;
use App\Http\Requests\V1\UpdateonSiteAssessmentsRequest;
use App\Http\Controllers\Controller;

class OnSiteAssessmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $days = onSiteAssessments::all();
        return response()->json([
            'status' => true,
            'message' => "on Site Assessments received",
            'data' => $days
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreonSiteAssessmentsRequest $request)
    {
        $res = onSiteAssessments::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "on Site Assessments created",
            'data' => $res
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $res  = onSiteAssessments::find($id);
        return response()->json([
            'status' => true,
            'message' => "on Site Assessments received",
            'data' => $res
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateonSiteAssessmentsRequest $request, onSiteAssessments $onSiteAssessments)
    {
        $onSiteAssessments->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "on Site Assessments updated",
            'data' => $onSiteAssessments
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(onSiteAssessments $onSiteAssessments)
    {
        $onSiteAssessments->delete();

        return response()->json([
            'status' => true,
            'message' => 'on Site Assessments deleted',
            'data' => ""
        ], 200);
    }
}
