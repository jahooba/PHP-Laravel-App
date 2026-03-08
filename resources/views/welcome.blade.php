<!DOCTYPE html>
<html>
    <head>
        <title>Inspection App</title>
        <link rel="stylesheet" href="{{ asset('css/inspection_app.css') }}">
    </head>

    <body>
        <div class="home-text">
            <h1>View and submit vehicle inspections.</h1>
            <h3>Automatically detects if vehicle passed or failed emission standards.</h3> <br>
        </div>

        <div class="hero">
            <a href="/inspections" class="link-wrapper">
                <div class="hero-all">
                    <p><strong>All Inspections</strong></p>
                    <p>View list of all submitted inspections.</p>
                    <img src="images/list_icon.png" alt="list icon">
                </div>
            </a>

            <a href="/inspections/create" class="link-wrapper">
                <div class="hero-new">
                    <p><strong>New Inspection</strong></p>
                    <p>Create and submit a new inspection.</p>
                    <img src="/images/pencil_icon.png" alt="pencil icon">
                </div>
            </a>
        </div>
    </body>
</html>
