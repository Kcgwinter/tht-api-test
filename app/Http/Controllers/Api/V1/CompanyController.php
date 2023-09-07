<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Company;
use App\Http\Requests\V1\StoreCompanyRequest;
use App\Http\Requests\V1\UpdateCompanyRequest;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return response()->json([
            'status' => true,
            'message' => "Companies received",
            'data' => $companies
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $company = Company::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Company created",
            'data' => $company
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        $company = Company::find($company->id);
        return response()->json([
            'status' => true,
            'message' => "Company received",
            'data' => $company
        ], 200);
    }

    public function showWithEmployees(int $id)
    {
        $company = Company::with('employees')->find($id);

        return response()->json([
            'status' => true,
            'message' => "Company received",
            'data' => $company
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $company->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Company updated",
            'data' => $company
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return response()->json([
            'status' => true,
            'message' => 'Company deleted',
            'data' => ""
        ], 200);
    }
}
