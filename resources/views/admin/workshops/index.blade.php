<x-app-layout>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <title>Lista de Talleres | Telesecundaria Justo Sierra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen font-sans text-gray-900">

    <main class="max-w-5xl mx-auto mt-14 px-6 py-10">
        <header class="flex flex-col md:flex-row md:items-center md:justify-between mb-10 gap-6 md:gap-0">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 drop-shadow-md text-center md:text-left">
                Lista de Talleres
            </h1>
            <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto justify-center sm:justify-end">
                <a href="{{ route('workshops.create') }}"
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-gray-700 to-gray-500 hover:from-gray-800 hover:to-gray-600 text-white font-semibold px-4 py-2 rounded-full shadow-lg transition duration-300 text-base w-full sm:w-auto justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 4v16m8-8H4" />
                    </svg>
                    Nuevo Taller
                </a>
                <a href="{{ route('workshops_activities.index') }}"
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-gray-700 to-gray-500 hover:from-gray-800 hover:to-gray-600 text-white font-semibold px-4 py-2 rounded-full shadow-lg transition duration-300 text-base w-full sm:w-auto justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
                    </svg>
                    Ver actividades de los talleres
                </a>
            </div>
        </header>

        @if ($workshops->isEmpty())
            <p class="text-center text-gray-500 text-lg py-20">No hay talleres registrados.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($workshops as $workshop)
                    <article
                        class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden flex flex-col">
                        <img src="/image/workshops/{{ $workshop->image_workshop }}" alt="Imagen de taller"
                            class="w-full h-48 object-cover" />

                        <div class="p-6 flex flex-col flex-grow">
                            <h2 class="text-xl font-bold text-gray-800 mb-2 truncate">{{ $workshop->name_workshop }}</h2>

                            <p class="text-gray-700 flex-grow mb-4 whitespace-pre-line overflow-hidden" style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                                <span class="font-semibold">Descripción: </span>
                                <span class="block overflow-hidden text-ellipsis" style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                                    {{ Str::limit($workshop->description_workshop, 100, '...') }}
                                </span>
                            </p>

                            <div class="text-sm text-gray-500 mb-4">
                                <span class="font-semibold">Fecha de publicación:</span> {{ \Carbon\Carbon::parse($workshop->date_workshop)->format('d/m/Y') }}
                            </div>

                    <div class="flex gap-3 justify-end">
                                <a href="{{ route('workshops.show', $workshop) }}"
                                                                     class="bg-gray-600 hover:bg-gray-700 text-white p-3 rounded-full shadow transition"
                                    title="Ver">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor"
                                        viewBox="0 0 576 512">
                                        <path
                                            d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0z" />
                                    </svg>
                                </a>
                                <a href="{{ route('workshops.edit', $workshop) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white p-3 rounded-full shadow transition"
                                    title="Editar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                    </svg>
                                </a>

                                <form action="{{ route('workshops.delete', $workshop) }}" method="POST" class="inline-block"
                                    >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-600 hover:bg-red-700 text-white p-3 rounded-full shadow transition"
                                        title="Eliminar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 448 512">
                                            <path
                                                d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64s14.3 32 32 32h384c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32l21.2 339c1.6 25.3 22.6 45 47.9 45h245.8c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif
    </main>
</body>
</html>
</x-app-layout>
