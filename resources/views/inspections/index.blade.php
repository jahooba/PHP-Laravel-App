@extends('layouts.inspection_app')

@section('content')
    <h1>Inspection List</h1>

    <div class="card-list">
        @foreach ($inspections as $inspection)
            <div class={{ $inspection->passed ? "card-pass" : "card-fail" }}>
                <strong>Vehicle:</strong> {{ $inspection->vehicle_name }} <br>
                <strong>Emission:</strong> {{ $inspection->emission_level }} <br>
                <strong>Status:</strong>
                @if ($inspection->passed)
                    <span style="color:green">Passed</span>
                @else
                    <span style="color:red">Failed</span>

                @endif
            </div>
        @endforeach
    </div>
@endsection
