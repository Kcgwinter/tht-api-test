<?php

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
    Route::get("customer/{id}/withAddresses",'CompanyController@showWithAddresses');

    // Company
    Route::apiResource('companies', CompanyController::class);
    Route::get("companies/{id}/withEmployees",'CompanyController@showWithEmployees');
    Route::apiResource('employees', EmployeeController::class);

    // Requests
    Route::apiResource('requests', RequestController::class);
    Route::get("requests/{id}/withData",'RequestController@showWithData');
    Route::apiResource('appointmentDays', AppointmentDaysController::class);
    Route::apiResource('appointmentTimes', AppointmentTimesController::class);
    Route::apiResource('onSiteAssessments', OnSiteAssessmentsController::class);

    // Quotes
    Route::apiResource('quotes', QuotesController::class);
    Route::get("quotes/{id}/withData",'QuotesController@showWithData');
    Route::apiResource('quotesItems', QuotesItemsController::class);

    // Jobs
    Route::apiResource('jobs', JobsController::class);
    Route::get("jobs/{id}/withData",'JobsController@showWithData');
    Route::apiResource('jobsItems', JobsItemsController::class);

    //Invoice
    Route::apiResource('invoice', InvoiceController::class);
    Route::get("invoice/{id}/withData",'InvoiceController@showWithData');
    Route::apiResource('invoiceItems', InvoiceItemsController::class);
    Route::apiResource('invoicePayment', InvoicePaymentsController::class);

    // Case
    Route::apiResource('cases', CasesController::class);
    Route::get("cases/{id}/withData",'CasesController@showWithData');
    Route::apiResource('casesNotes', CasesController::class);

    // Inventory


});
