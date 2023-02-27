<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @Vite('resources/js/app.js')
    @yield('cdns')
</head>
<body>
    <header class="container text-danger text-center my-4">
        <h1>Orari Treni</h1>
    </header>
    @yield('content') 
</body>
</html>