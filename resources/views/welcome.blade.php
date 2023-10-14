<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eisenhower HTMX</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <h1>Eisenhower Matrix</h1>
        <p>Task prioritizaiton system used by Ike</p>
        <div class="row">
            @include('partials.square', ['category' => 'do'])
            @include('partials.square', ['category' => 'schedule'])
        </div>
        <div class="row">
            @include('partials.square', ['category' => 'delegate'])
            @include('partials.square', ['category' => 'delete'])
        </div>
        <footer>
            <address></address>
        </footer>
        </div>
    </body>
</html>
