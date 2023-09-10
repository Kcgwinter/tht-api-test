<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Request;
use App\Http\Requests\V1\StoreRequestRequest;
use App\Http\Requests\V1\UpdateRequestRequest;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = Request::all();
        return response()->json([
            'status' => true,
            'message' => "Requests received",
            'data' => $requests
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequestRequest $req)
    {
        $request = Request::create($req->all());

        return response()->json([
            'status' => true,
            'message' => "Request created",
            'data' => $request
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $res  = Request::find($id);
        return response()->json([
            'status' => true,
            'message' => "Request received",
            'data' => $res
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequestRequest $request, Request $req)
    {
        $req->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Request updated",
            'data' => $req
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req)
    {
        $req->delete();

        return response()->json([
            'status' => true,
            'message' => 'Request deleted',
            'data' => ""
        ], 200);
    }
}
