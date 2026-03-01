<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inspection;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    public function index() {
        $inspections = Inspection::all();
        return view("inspections.index", compact("inspections"));
    }

    public function create() {
        return view("inspections.create");
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'vehicle_name'=>'required|string|max:255',
            'emission_level'=> 'required|integer|min:0'
        ]);

        // Check if vehicle passed
        $passed = $validated['emission_level'] <= 50;

        Inspection::create([
            'vehicle_name'=> $validated['vehicle_name'],
            'emission_level'=> $validated['emission_level'],
            'passed'=>$passed
        ]);

        return redirect('/inspections');
    }
}
