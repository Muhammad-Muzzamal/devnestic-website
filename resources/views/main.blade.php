<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Devnestic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
</head>
<body>
    @include("includes/navbar")
    @yield('mainContent')
    @include('includes/footer')
</body>
</html>
