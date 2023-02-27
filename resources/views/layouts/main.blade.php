<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @yield('cdns')
</head>
<body>
    <h1>Orari Treni</h1>
    <main>
        @yield('content') 
    </main>
</body>
</html>