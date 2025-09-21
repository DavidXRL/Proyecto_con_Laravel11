<x-app-layout>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar actividad | Telesecundaria Justo Sierra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        {{ $activity->name_act }}
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

            <form action="{{ route('activities.update', $activity->id) }}" method="POST" enctype="multipart/form-data" class="space-y-7">
                @csrf
                @method('PUT')

                <div>
                    <label for="name_act" class="block text-base font-semibold text-gray-800 mb-2">Nombre de la actividad</label>
                    <input
                        type="text"
                        name="name_act"
                        id="name_act"
                        required
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                        value="{{ old('name_act', $activity->name_act) }}"
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
                    >{{ old('description_activity', $activity->description_activity) }}</textarea>
                </div>

                <div>
                    <label for="date_activity" class="block text-base font-semibold text-gray-800 mb-2">Fecha de publicación</label>
                    <input
                        type="date"
                        name="date_activity"
                        id="date_activity"
                        required
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                        value="{{ old('date_activity', $activity->date_activity) }}"
                    >
                </div>


                <div>
                    <label for="image_activity" class="block text-base font-semibold text-gray-800 mb-2">Seleccionar imagen</label>
                    <input
                        type="file"
                        name="image_activity"
                        id="image_activity"
                        class="w-full border border-gray-200 rounded-xl shadow p-3 bg-gray-50/50"
                    >

                    <p class="text-center font-bold text-gray-700 mt-8">Imagen actual:</p>
                    <div class="flex justify-center mb-8 mt-6">
                        <img src="/image/activities/{{ $activity->image_activity }}"
                             alt="Imagen de la actividad"
                             class="w-full max-w-lg h-64 object-cover rounded-2xl border-4 border-gray-200 shadow-lg transition-transform hover:scale-105 duration-300 bg-white">
                    </div>
                </div>

                <div>
                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-700 hover:to-gray-500 text-white font-bold py-3 rounded-xl shadow-lg transition-all"
                    >Guardar Cambios
                    </button>
                </div>
                <div class="flex justify-center mt-4">
                    <a href="{{ route('activities.index') }}"
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
