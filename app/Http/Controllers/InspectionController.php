<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    public function index() {
        // inspections: multi-array with key-values
        $inspections = [['vehicle'=>'Truck 1', 'status'=>'Passed'],
                        ['vehicle'=>'Truck 2', 'status'=>'Failed']];

        return view('inspections', compact('inspections'));
    }
}
