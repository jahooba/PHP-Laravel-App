<h>Add inspection</h>

<form method="POST" action="/inspections">
    @csrf

    <input type="text" name="vehicle_name" placeholder="Vehicle Name">
    <input type="number" name="emission_level" placeholder="Emission Level">

    <button type="submit">Submit</button>
</form>
