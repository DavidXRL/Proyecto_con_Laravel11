<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>



    @if (session('status'))
        {{session('status')}}
    @endif

    @yield('content')
</body>
</html>
@include('fragments.footer')
