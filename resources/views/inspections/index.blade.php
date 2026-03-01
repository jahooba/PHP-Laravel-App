<h1>Inspection List</h1>

<a href="/inspections/create"> Add inspection</a>

@foreach ($inspections as $inspection)
    <p>
        { {$inspection->vehicle_name} } |
        Emission: { {$inspection->emission_level} } |
        Status: { {$inspection->passed ? 'Passed' : 'Failed'} }
    </p>
@endforeach
