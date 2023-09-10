<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Jobs;
use App\Http\Requests\V1\StoreJobsRequest;
use App\Http\Requests\V1\UpdateJobsRequest;
use App\Http\Controllers\Controller;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Jobs::all();
        return response()->json([
            'status' => true,
            'message' => "jobs received",
            'data' => $items
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobsRequest $request)
    {
        $item = Jobs::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "job created",
            'data' => $item
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item  = Jobs::find($id);
        return response()->json([
            'status' => true,
            'message' => "job received",
            'data' => $item
        ], 200);
    }

    public function showWithData(int $id)
    {
        $jobs = Jobs::with('Items')->with('Visits')->find($id);

        return response()->json([
            'status' => true,
            'message' => "job received",
            'data' => $jobs
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobsRequest $request, Jobs $jobs)
    {
        $jobs->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "job updated",
            'data' => $jobs
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jobs $jobs)
    {
        $jobs->delete();

        return response()->json([
            'status' => true,
            'message' => 'job deleted',
            'data' => ""
        ], 200);
    }
}
