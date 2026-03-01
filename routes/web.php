<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InspectionController;

// Inspection page
Route::get("/inspections", [InspectionController::class,"index"]);
Route::get("/inspections/create", [InspectionController::class,"create"]);
Route::post("/inspections", [InspectionController::class,"store"]);

// Welcome page
Route::get('/', function () {
    return view('welcome');
});
