<x-app-layout>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Detalles del Taller | Telesecundaria Justo Sierra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gradient-to-br from-gray-100 via-white to-gray-100 min-h-screen">


    <main class="container mx-auto mt-16 p-4 sm:p-6 md:p-10 bg-white/90 rounded-3xl shadow-2xl max-w-3xl border border-gray-200">
        @if ($errors->any())
            <div class="mb-8">
            <div class="flex items-center bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg shadow" role="alert">
                <svg class="w-6 h-6 mr-3 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" stroke-width="2" />
                <line x1="12" y1="8" x2="12" y2="12" stroke-width="2" />
                <circle cx="12" cy="16" r="1" stroke-width="2" />
                </svg>
                <div>
                <span class="font-bold">¡Se encontraron errores!</span>
                <ul class="list-disc pl-5 mt-2 space-y-1 text-sm">
                    @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                </div>
            </div>
            </div>
        @endif

        <div class="flex flex-col items-center mb-10 px-2 sm:px-0">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 mb-2 tracking-tight drop-shadow-lg text-center">
                Detalles del Taller
            </h1>
            <span class="inline-block w-20 sm:w-24 h-1 bg-gray-400 rounded-full mb-4"></span>
        </div>

        <!-- Imagen arriba -->
        <div class="flex justify-center mb-8">
            <img src="/image/workshops/{{ $workshop->image_workshop }}"
                alt="Imagen del taller"
                class="max-w-full max-h-80 md:max-h-96 h-auto object-contain rounded-xl border-2 border-gray-200 shadow-md transition-transform hover:scale-105 duration-300" />
        </div>

        <!-- Información debajo -->
        <div class="flex flex-col gap-6">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 break-words text-center">
                {{ $workshop->name_workshop }}
            </h2>

            <div class="bg-white rounded-xl border border-gray-200 shadow p-4 break-words">
                <p class="font-semibold text-gray-600 mb-1">ID:</p>
                <p class="text-gray-800">{{ $workshop->id }}</p>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 shadow p-4">
                <p class="font-semibold text-gray-600 mb-1">Descripción:</p>
                <p class="text-gray-800 whitespace-pre-wrap">{{ $workshop->description_workshop }}</p>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 shadow p-4">
                <p class="font-semibold text-gray-600 mb-1">Fecha:</p>
                <p class="text-gray-800">{{ \Carbon\Carbon::parse($workshop->date_workshop)->format('d/m/Y') }}</p>
            </div>
        </div>
        <div class="flex justify-center mt-8 px-2">
            <a href="{{ route('workshops.index') }}"
                class="inline-block bg-gray-600 text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-gray-800 transition-all duration-200 text-center w-full max-w-xs sm:max-w-none">
                Volver a la lista de talleres
            </a>
        </div>
    </main>
</body>
</html>
</x-app-layout>
