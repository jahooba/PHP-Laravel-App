<h1>Inspection List</h1>

@foreach ($inspections as $inspection)
    <p>
        {{$inspection['vehicle']}} - {{$inspection['status']}}
    </p>
@endforeach
