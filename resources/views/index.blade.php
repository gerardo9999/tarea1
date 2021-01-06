<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="contenido">
        @yield('contenido')
    </div>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
</body>
</html>