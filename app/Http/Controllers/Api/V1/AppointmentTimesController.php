<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\appointmentTimes;
use App\Http\Requests\V1\StoreappointmentTimesRequest;
use App\Http\Requests\V1\UpdateappointmentTimesRequest;
use App\Http\Controllers\Controller;

class AppointmentTimesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $times = appointmentTimes::all();
        return response()->json([
            'status' => true,
            'message' => "Appointment Times received",
            'data' => $times
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreappointmentTimesRequest $request)
    {
        $res = appointmentTimes::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Appointment Times created",
            'data' => $res
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $res  = appointmentTimes::find($id);
        return response()->json([
            'status' => true,
            'message' => "Appointment Times received",
            'data' => $res
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateappointmentTimesRequest $request, appointmentTimes $appointmentTimes)
    {
        $appointmentTimes->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Appointment Times updated",
            'data' => $appointmentTimes
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(appointmentTimes $appointmentTimes)
    {
        $appointmentTimes->delete();

        return response()->json([
            'status' => true,
            'message' => 'Appointment Times deleted',
            'data' => ""
        ], 200);
    }
}
