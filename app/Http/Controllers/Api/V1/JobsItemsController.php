<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\JobsItems;
use App\Http\Requests\V1\StoreJobsItemsRequest;
use App\Http\Requests\V1\UpdateJobsItemsRequest;
use App\Http\Controllers\Controller;

class JobsItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = JobsItems::all();
        return response()->json([
            'status' => true,
            'message' => "items received",
            'data' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobsItemsRequest $request)
    {
        $item = JobsItems::create($request->all());

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
        $item  = JobsItems::find($id);
        return response()->json([
            'status' => true,
            'message' => "item received",
            'data' => $item
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobsItemsRequest $request, JobsItems $jobsItems)
    {
        $jobsItems->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Item updated",
            'data' => $jobsItems
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobsItems $jobsItems)
    {
        $jobsItems->delete();

        return response()->json([
            'status' => true,
            'message' => 'item deleted',
            'data' => ""
        ], 200);
    }
}
