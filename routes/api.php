<?php

use App\Http\Controllers\Api\V1\AddressController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function () {
// Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1',  'middleware' => 'auth:sanctum'], function () {

    // Customer
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('addresses', AddressController::class);

    // Company
    Route::apiResource('companies', CompanyController::class);
    Route::get("companies/{id}/withEmployees",'CompanyController@showWithEmployees');
    Route::apiResource('employees', EmployeeController::class);

    // Requests
    Route::apiResource('requests', RequestController::class);
    Route::apiResource('appointmentDays', AppointmentDaysController::class);
    Route::apiResource('appointmentTimes', AppointmentTimesController::class);
    Route::apiResource('onSiteAssessments', OnSiteAssessmentsController::class);
});
