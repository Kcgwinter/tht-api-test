<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\JobsVisits;
use App\Http\Requests\V1\StoreJobsVisitsRequest;
use App\Http\Requests\V1\UpdateJobsVisitsRequest;
use App\Http\Controllers\Controller;

class JobsVisitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = JobsVisits::all();
        return response()->json([
            'status' => true,
            'message' => "visits received",
            'data' => $items
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobsVisitsRequest $request)
    {
        $item = JobsVisits::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "visit created",
            'data' => $item
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item  = JobsVisits::find($id);
        return response()->json([
            'status' => true,
            'message' => "visit received",
            'data' => $item
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobsVisitsRequest $request, JobsVisits $jobsVisits)
    {
        $jobsVisits->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "visit updated",
            'data' => $jobsVisits
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobsVisits $jobsVisits)
    {
        $jobsVisits->delete();

        return response()->json([
            'status' => true,
            'message' => 'visit deleted',
            'data' => ""
        ], 200);
    }
}
