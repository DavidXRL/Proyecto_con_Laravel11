
<x-app-layout>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Editar Actividad de Taller | Telesecundaria Justo Sierra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gradient-to-br from-gray-100 via-white to-gray-200 min-h-screen">


    <main class="flex items center justify-center min-h-screen mt-10 mb-10">
        <section class="w-full max-w-2xl bg-white/90 rounded-3xl shadow-2xl p-10 border border-gray-200">
            <div class="mb-10 text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-2">
                    Editar información de la actividad:
                </h1>
                <div class="inline-block bg-green-100 px-5 py-2 rounded-full mt-2">
                    <span class="text-xl font-semibold text-green-700">
                        {{ $workshop_activity->name_activity }}
                    </span>
                </div>
            </div>

            @if ($errors->any())
                <div class="mb-6 bg-red-50 border border-red-300 text-red-700 px-4 py-3 rounded-xl shadow">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('workshops_activities.update', $workshop_activity->id) }}" method="POST" enctype="multipart/form-data" class="space-y-7">
                @csrf
                @method('PUT')

                <div>
                    <label for="name_activity" class="block text-base font-semibold text-gray-800 mb-2">Nombre de la actividad</label>
                    <input
                        type="text"
                        name="name_activity"
                        id="name_activity"
                        required
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                        value="{{ old('name_activity', $workshop_activity->name_activity) }}"
                    >
                </div>
                <div>
                    <label for="description_activity" class="block text-base font-semibold text-gray-800 mb-2">Descripción</label>
                    <textarea
                        name="description_activity"
                        id="description_activity"
                        rows="4"
                        required
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                    >{{ old('description_activity', $workshop_activity->description_activity) }}</textarea>
                </div>
                <div>
                    <label for="date_activity" class="block text-base font-semibold text-gray-800 mb-2">Fecha de publicación</label>
                    <input
                        type="date"
                        name="date_activity"
                        id="date_activity"
                        required
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                        value="{{ old('date_activity', $workshop_activity->date_activity) }}"
                    >
                </div>
                <div>
                    <label for="time_activity" class="block text-base font-semibold text-gray-800 mb-2">Hora de publicación</label>
                    <input
                        type="time"
                        name="time_activity"
                        id="time_activity"
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                        value="{{ old('time_activity', $workshop_activity->time_activity ? \Carbon\Carbon::parse($workshop_activity->time_activity)->format('H:i') : '') }}"
                    >
                </div>
                <div>
                    <label for="image_activity" class="block text-base font-semibold text-gray-800 mb-2">Imagen de la actividad</label>
                    <input
                        type="file"
                        name="image_activity"
                        id="image_activity"
                        accept=".jpg, .jpeg, .png, .gif, .webp"
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                    >
                </div>
                <div>
                    <label for="id_workshop" class="block text-base font-semibold text-gray-800 mb-2">Taller asociado</label>
                    <select
                        name="id_workshop"
                        id="id_workshop"
                        required
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                        value="{{ old('id_workshop', $workshop_activity->id_workshop) }}"
                    >
                        <option value="">Seleccione un taller</option>
                        @foreach ($workshops as $workshop)
                            <option value="{{ $workshop->id }}" {{ $workshop_activity->id_workshop == $workshop->id ? 'selected' : '' }}>
                                {{ $workshop->name_workshop }}
                            </option>
                        @endforeach
                    </select>
            </div>
            <p class="text-center font-bold text-gray-700 mt-8">Imagen actual:</p>
            <div class="flex justify-center">
                <img src="/image/workshops_activities/{{ $workshop_activity->image_activity }}"
                    alt="Imagen del taller"
                    class="max-w-full max-h-80 md:max-h-96 h-auto object-contain rounded-xl border-2 border-gray-200 shadow-md" />
            </div>

            <div>
                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-700 hover:to-gray-500 text-white font-bold py-3 rounded-xl shadow-lg transition-all"
                >Guardar Cambios
                </button>
            </div>
                <div class="flex justify-center mt-4">
                    <a href="{{ route('workshops_activities.index') }}"
                       class="w-full bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-700 hover:to-gray-500 text-white font-bold py-3 rounded-xl shadow-lg transition-all text-center"
                    >
                        Volver a actividades
                    </a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
</x-app-layout>
