<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\appointmentDays;
use App\Http\Requests\V1\StoreappointmentDaysRequest;
use App\Http\Requests\V1\UpdateappointmentDaysRequest;
use App\Http\Controllers\Controller;

class AppointmentDaysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $days = appointmentDays::all();
        return response()->json([
            'status' => true,
            'message' => "Appointment Days received",
            'data' => $days
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreappointmentDaysRequest $request)
    {
        $res = appointmentDays::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Appointment Days created",
            'data' => $res
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $res  = appointmentDays::find($id);
        return response()->json([
            'status' => true,
            'message' => "Appointment Days received",
            'data' => $res
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateappointmentDaysRequest $request, appointmentDays $appointmentDays)
    {

        $appointmentDays->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Appointment Days updated",
            'data' => $appointmentDays
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(appointmentDays $appointmentDays)
    {
        $appointmentDays->delete();

        return response()->json([
            'status' => true,
            'message' => 'Appointment Days deleted',
            'data' => ""
        ], 200);
    }
}
