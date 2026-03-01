@extends('layouts.inspection_app')

@section('content')
    <h1>Inspection List</h1>

    @foreach ($inspections as $inspection)
        <div class="card">
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
@endsection
