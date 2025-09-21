<!DOCTYPE html>
<html lang="es">
@include('fragments.navbar-admin')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<script src="https://cdn.tailwindcss.com"></script>

    @if (session('status'))
        <div class="alert alert-success mb-4">
            {{ session('status') }}
        </div>
    @endif

    @yield('content')
</body>
</html>

