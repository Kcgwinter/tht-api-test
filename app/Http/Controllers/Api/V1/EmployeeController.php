<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Employee;
use App\Http\Requests\V1\StoreEmployeeRequest;
use App\Http\Requests\V1\UpdateEmployeeRequest;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::all();
        return response()->json([
            'status' => true,
            'message' => "Employee received",
            'data' => $employee
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Employee created",
            'data' => $employee
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee  = Employee::find($id);
        return response()->json([
            'status' => true,
            'message' => "Employee received",
            'data' => $employee
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Employee updated",
            'data' => $employee
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->json([
            'status' => true,
            'message' => 'Employee deleted',
            'data' => ""
        ], 200);
    }
}
