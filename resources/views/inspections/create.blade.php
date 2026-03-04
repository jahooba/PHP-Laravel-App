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
            <h1>Add inspection</h1>

            <form method="POST" action="/inspections">
                @csrf
                <input type="text" name="vehicle_name" placeholder="Vehicle Name">
                <input type="number" name="emission_level" placeholder="Emission Level">

                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
</html>
