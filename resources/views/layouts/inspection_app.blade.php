<!DOCTYPE html>
<html>
    <head>
        <title>Inspection App</title>
        <link rel="stylesheet" href="{{ asset('css/inspection_app.css') }}">
    </head>

    <body>
        <nav>
            <h1>Vehicle Inspection System</h1>
            <a href="/inspections"> All Inspections</a>
            <a href="/inspections/create"> New Inspection</a>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
