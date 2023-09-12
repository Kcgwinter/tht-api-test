<?php

namespace App\Http\Controllers;

use App\Models\CaseNotes;
use App\Http\Requests\StoreCaseNotesRequest;
use App\Http\Requests\UpdateCaseNotesRequest;

class CaseNotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCaseNotesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CaseNotes $caseNotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CaseNotes $caseNotes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCaseNotesRequest $request, CaseNotes $caseNotes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CaseNotes $caseNotes)
    {
        //
    }
}
