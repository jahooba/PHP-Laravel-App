@extends('layouts.inspection_app')

@section('content')
    <h1>Inspection List</h1>

    <div class="card-list">
        @foreach ($inspections as $inspection)
            <div class={{ $inspection->passed ? "card-pass" : "card-fail" }}>
                Vehicle: <strong>{{ $inspection->vehicle_name }}</strong> <br>
                Emission: {{ $inspection->emission_level }} <br>
                Status:
                @if ($inspection->passed)
                    <span class="passed">Passed</span>
                @else
                    <span class="failed">Failed</span>

                @endif
            </div>
        @endforeach
    </div>
@endsection
