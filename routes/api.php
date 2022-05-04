<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('employees',[EmployeeController::class,'getEmployees']);

Route::get('employees/{id}',[EmployeeController::class,'getEmployeeById']);

Route::post('addEmployee',[EmployeeController::class,'addEmployee']);

Route::put('update/{id}',[EmployeeController::class,'updateEmployee']);

Route::delete('delete/{id}',[EmployeeController::class,'deleteEmployee']);