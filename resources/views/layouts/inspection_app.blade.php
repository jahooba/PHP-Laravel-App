<!DOCTYPE html>
<html>
    <head>
        <title>Inspection App</title>
        <link rel="stylesheet" href="{{ asset('css/inspection_app.css') }}">
    </head>

    <body>
        <div>
            @include('inspections.nav_bar')
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
