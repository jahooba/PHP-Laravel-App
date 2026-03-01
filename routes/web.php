<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InspectionController;

Route::get("/inspections", [InspectionController::class,"index"]);

Route::get('/', function () {
    return view('welcome');
});
