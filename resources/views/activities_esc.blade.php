<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades Escolares | Telesecundaria Justo Sierra</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-50 text-gray-900">

    @include('layout.main_template')

    <main class="mx-auto mt-10 p-6 md:p-20 bg-white rounded-lg shadow-xl w-[97%]">
        {{-- Hero / Introducción --}}
        <section class="mb-12">
            <div class="flex flex-col md:flex-row items-center justify-between gap-10 bg-gradient-to-r from-[#10621E]/10 via-[#51A35F]/10 to-[#82C38D]/10 rounded-2xl shadow-md p-8 md:p-12">
                <div class="max-w-xl md:w-2/3">
                    <h1 class="text-5xl md:text-6xl font-extrabold text-[#00410B] drop-shadow-lg mb-6 mt-4 text-center md:text-left">
                        Actividades Escolares
                    </h1>
                    <h2 class="text-2xl font-bold text-[#10621E] mb-4">¡Vive la experiencia escolar!</h2>
                    <p class="text-gray-900 mb-6 leading-relaxed">
                        En nuestra telesecundaria, cada actividad es una oportunidad para aprender, convivir y crecer juntos. Descubre talleres, concursos, eventos culturales y deportivos pensados para ti.
                    </p>

                </div>
                <div class="flex-1 mt-8 md:mt-0 md:ml-8 bg-white/80 border-l-4 border-[#51A35F] p-8 rounded-xl shadow-lg flex items-center">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-[#00410B] flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z"/>
                        </svg>
                        <div>
                            <p class="text-gray-900 text-lg mb-1 font-semibold">¿Sabías que?</p>
                            <p class="text-gray-700 text-base">
                                Participar en actividades escolares mejora tu rendimiento académico, fortalece amistades y te ayuda a descubrir nuevas habilidades.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Actividades recientes --}}
        <section id="actividades">
            <h2 class="text-3xl font-extrabold text-center text-[#10621E] mb-10 tracking-tight drop-shadow-lg">Actividades recientes</h2>
            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 justify-center">
                @forelse ($activities as $activity)
                    <div class="bg-white rounded-3xl shadow-xl p-0 flex flex-col items-center hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 w-full max-w-md mx-auto border border-green-100">
                        <div class="relative w-full h-80 rounded-t-3xl overflow-hidden group">
                            <img src="/image/activities/{{$activity->image_activity}}"
                                 alt="Imagen de {{ $activity->name_act }}"
                                 class="w-full h-full object-cover object-center transition-transform duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#00410B]/60 to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
                        </div>
                        <div class="flex flex-col flex-1 px-6 py-5 w-full">
                            <h3 class="text-lg font-bold mb-2 text-[#10621E] text-center w-full truncate" title="{{ $activity->name_act }}">
                                {{ $activity->name_act }}
                            </h3>
                            <p class="text-gray-700 text-center mb-4 w-full whitespace-normal break-words line-clamp-3" title="{{ $activity->description_activity }}">
                                {{ $activity->description_activity }}
                            </p>
                            <div class="flex items-center justify-center mt-auto">
                                <span class="inline-flex items-center gap-1 text-xs text-gray-500 bg-[#E6F4EC] px-3 py-1 rounded-full shadow-sm">
                                    <svg class="w-4 h-4 text-[#51A35F]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    Publicado el: {{ \Carbon\Carbon::parse($activity->date_activity)->format('d/m/Y') }}
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
        </section>
    </main>

    @include('layout.footer_template')

</body>
</html>
