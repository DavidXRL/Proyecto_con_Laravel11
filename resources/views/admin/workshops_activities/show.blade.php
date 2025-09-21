<x-app-layout>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Detalles de la Actividad del Taller | Telesecundaria Justo Sierra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gradient-to-br from-gray-100 via-white to-gray-100 min-h-screen">


    <main class="container mx-auto mt-16 p-4 sm:p-6 md:p-10 bg-white/90 rounded-3xl shadow-2xl max-w-3xl border border-gray-200">
        @if ($errors->any())
            <div class="mb-8 p-4 bg-red-50 border-l-4 border-red-400 text-red-800 rounded-lg shadow break-words">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="flex flex-col items-center mb-10 px-2 sm:px-0">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 mb-2 tracking-tight drop-shadow-lg text-center">
                Detalles de la Actividad del Taller
            </h1>
            <span class="inline-block w-20 sm:w-24 h-1 bg-gray-400 rounded-full mb-4"></span>
        </div>

        <!-- Imagen arriba -->
        <div class="flex justify-center mb-8">
            <img src="/image/workshops_activities/{{ $workshop_activity->image_activity }}"
                alt="Imagen de la actividad del taller"
                class="max-w-full max-h-80 md:max-h-96 h-auto object-contain rounded-xl border-2 border-gray-200 shadow-md transition-transform hover:scale-105 duration-300" />
        </div>

        <!-- Información debajo -->
        <div class="flex flex-col gap-6">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 break-words text-center">
                {{ $workshop_activity->name_activity }}
            </h2>

            <div class="bg-white rounded-xl border border-gray-200 shadow p-4 break-words">
                <p class="font-semibold text-gray-600 mb-1">ID:</p>
                <p class="text-gray-800">{{ $workshop_activity->id }}</p>
            </div>

            <div class="bg-white rounded-xl border border-gray-200 shadow p-4">
                <p class="font-semibold text-gray-600 mb-1">Descripción:</p>
                <p class="text-gray-800 whitespace-pre-wrap">{{ $workshop_activity->description_activity }}</p>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 shadow p-4">
                <p class="font-semibold text-gray-600 mb-1">Fecha de publicación:</p>
                <p class="text-gray-800">{{ \Carbon\Carbon::parse($workshop_activity->date_activity)->format('d/m/Y') }}</p>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 shadow p-4">
                <p class="font-semibold text-gray-600 mb-1">Hora de publicación:</p>
                <p class="text-gray-800">{{ \Carbon\Carbon::parse($workshop_activity->time_activity)->format('H:i:s') }}</p>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 shadow p-4">
                <p class="font-semibold text-gray-600 mb-1">Taller asociado:</p>
                <p class="text-gray-800">
    {{ $workshop_activity->workshop->name_workshop ?? 'No asignado' }}
</p>

            </div>
        </div>
        <div class="flex justify-center mt-8 px-2">
            <a href="{{ route('workshops_activities.index') }}"
                class="inline-block bg-gray-600 text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-gray-800 transition-all duration-200 text-center w-full max-w-xs sm:max-w-none">
                Volver a la lista de actividades
            </a>
        </div>
    </main>
</body>
</html>
</x-app-layout>
