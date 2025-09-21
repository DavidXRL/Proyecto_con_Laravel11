<!DOCTYPE html>
<html>
<head>
    <title>Talleres Disponibles | Telesecundaria Justo Sierra</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
    @include('layout.main_template')

    <main class="mx-auto mt-10 p-12 md:p-20 bg-white rounded-lg shadow-lg" style="width: 97%">

        <section class="mb-12">
            <div class="flex flex-col md:flex-row items-center justify-between gap-10 bg-gradient-to-r from-[#10621E]/10 via-[#51A35F]/10 to-[#82C38D]/10 rounded-2xl shadow-md p-8 md:p-12">
                <div class="max-w-xl md:w-2/3">
                    <h1 class="text-5xl md:text-6xl font-extrabold text-[#00410B] drop-shadow-lg mb-6 mt-4 text-center md:text-left">
                        Talleres Disponibles
                    </h1>
                    <h2 class="text-2xl font-bold text-[#10621E] mb-4">¡Desarrolla tu potencial con nosotros!</h2>
                    <p class="text-gray-900 mb-6 leading-relaxed">
                        Nuestros talleres están diseñados para ayudarte a descubrir nuevas habilidades, fomentar el trabajo en equipo y prepararte para el futuro. ¡Inscríbete y empieza a crecer hoy mismo!
                    </p>

                </div>
                <div class="flex-1 mt-8 md:mt-0 md:ml-8 bg-white/80 border-l-4 border-[#51A35F] p-8 rounded-xl shadow-lg flex items-center">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-[#00410B] flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z"/>
                        </svg>
                        <div>
                            <p class="text-gray-700 text-base">
                                Participar en talleres mejora tu confianza, impulsa tu creatividad y te prepara para nuevos retos académicos y personales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Apartado para visualización de talleres --}}
        @php
            $chunks = $workshops->chunk(3);
        @endphp

        @forelse ($chunks as $chunk)
            <div class="grid gap-10 grid-cols-1 md:grid-cols-3 justify-center items-stretch mb-10">
                @foreach ($chunk as $workshop)
                    <div class="bg-white rounded-2xl shadow-xl p-8 flex flex-col items-center hover:scale-105 transition-transform duration-300 min-h-[480px] w-full max-w-md mx-auto border border-gray-100">
                        <img src="/image/workshops/{{$workshop->image_workshop}}"
                             alt="Imagen de {{ $workshop->name_workshop }}"
                             class="w-full h-56 object-cover mb-6 rounded-xl shadow-md">

                        <h2 class="text-2xl font-bold mb-3 text-[#10621E] text-center w-full">
                            {{ $workshop->name_workshop }}
                        </h2>

                        <p class="text-gray-700 text-center mb-5 w-full whitespace-normal break-words text-base" title="{{ $workshop->description_workshop }}">
                            {{ $workshop->description_workshop }}
                        </p>

                        <div class="mt-auto w-full flex justify-center">
                            <span class="inline-block bg-[#51A35F]/10 text-[#10621E] px-5 py-2 rounded-lg text-sm font-semibold shadow">
                                📅 {{ \Carbon\Carbon::parse($workshop->date_workshop)->format('d/m/Y') }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        @empty
            <div class="col-span-full text-center text-gray-400 py-10 text-lg">
                No hay talleres registrados.
            </div>
        @endforelse

       <div class="flex justify-center mt-8 w-90%">
    <a href="{{ url('/workshop_activities') }}"
       class="px-10 py-4 text-lg bg-gradient-to-r from-[#10621E] to-[#51A35F] hover:from-[#51A35F] hover:to-[#82C38D]
              text-white font-bold rounded-xl shadow-lg transition-all text-center">
        Ver actividades de los talleres
    </a>
</div>

    </main>

    @include('layout.footer_template')
</body>
</html>
