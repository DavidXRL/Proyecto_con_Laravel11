<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades de los talleres | Telesecundaria Justo Sierra</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-50 text-gray-900">

    @include('layout.main_template')

    <main class="mx-auto mt-10 p-4 md:p-10 bg-white rounded-2xl shadow-xl w-[97%]">
        <section class="mb-12">
            <div class="flex flex-col items-center justify-center gap-8 bg-gradient-to-r from-[#10621E]/10 via-[#51A35F]/10 to-[#82C38D]/10 rounded-2xl shadow-md p-6 md:p-10 text-center">
                <div class="w-full md:w-2/3">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-[#00410B] drop-shadow-lg mb-4">
                        Potencia tus habilidades
                    </h1>
                    <h2 class="text-xl md:text-2xl font-bold text-[#10621E] mb-3">
                        ¡Únete a nuestros talleres!
                    </h2>
                    <p class="text-gray-900 mb-0 md:mb-2 leading-relaxed">
                        En nuestros talleres descubrirás nuevas pasiones, desarrollarás talentos y harás grandes amigos. No dejes pasar la oportunidad de crecer y divertirte mientras aprendes.
                    </p>
                </div>
            </div>
        </section>


        {{-- Visualización de actividades --}}
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 justify-center">
            @forelse ($workshops_activities as $w_activity)
                <div class="bg-white rounded-3xl shadow-xl p-0 flex flex-col items-center hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 w-full max-w-md mx-auto border border-green-100">
                    <div class="relative w-full h-80 rounded-t-3xl overflow-hidden group">
                        <img src="/image/workshops_activities/{{ $w_activity->image_activity }}"
                             alt="Imagen de {{ $w_activity->name_activity }}"
                             class="w-full h-full object-cover object-center transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#00410B]/60 to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
                    </div>
                    <div class="flex flex-col flex-1 px-6 py-5 w-full">
                        <h2 class="text-xl font-bold mb-2 text-[#10621E] text-center truncate" title="{{ $w_activity->name_activity }}">
                            {{ $w_activity->name_activity }}
                        </h2>
                        <p class="text-gray-700 text-center mb-4 whitespace-normal break-words line-clamp-3" title="{{ $w_activity->description_activity }}">
                            {{ $w_activity->description_activity }}
                        </p>
                        <div class="flex items-center justify-center mt-auto">
                            <span class="inline-flex items-center gap-1 text-xs text-gray-500 bg-[#E6F4EC] px-3 py-1 rounded-full shadow-sm">
                                <svg class="w-4 h-4 text-[#51A35F]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                Publicado el: {{ \Carbon\Carbon::parse($w_activity->date_activity)->format('d/m/Y') }}
                            </span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center text-gray-400 py-10 text-lg">
                    No hay actividades registradas.
                </div>
            @endforelse
        </div>

        {{-- Botón para ver talleres --}}
        <div class="flex justify-center mt-12">
            <a href="{{ url('/workshop') }}"
               class="px-10 py-4 text-lg bg-gradient-to-r from-[#51A35F] to-[#82C38D] hover:from-[#10621E] hover:to-[#51A35F] text-white font-bold rounded-xl shadow-lg transition-all text-center">
                Ver talleres disponibles
            </a>
        </div>
    </main>

    @include('layout.footer_template')

</body>
</html>
