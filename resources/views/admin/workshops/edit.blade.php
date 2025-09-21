<x-app-layout>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar actividad | Telesecundaria Justo Sierra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-100 via-white to-gray-200 min-h-screen">


    <main class="flex items center justify-center min-h-screen mt-10 mb-10">
        <section class="w-full max-w-2xl bg-white/90 rounded-3xl shadow-2xl p-10 border border-gray-200">

          <div class="mb-10 text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight mb-2">
                    Editar información del taller:
                </h1>
                <div class="inline-block bg-green-100 px-5 py-2 rounded-full mt-2">
                    <span class="text-xl font-semibold text-green-700">
                        {{ $workshop->name_workshop }}
                    </span>
                </div>
            </div>



        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-8 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form action="{{ route('workshops.update', $workshop->id) }}" method="POST" enctype="multipart/form-data" class="space-y-7">
                @csrf
                @method('PUT')

                <div>
                    <label for="name_workshop" class="block text-base font-semibold text-gray-800 mb-2">Nombre del taller</label>
                    <input
                        type="text"
                        name="name_workshop"
                        id="name_workshop"
                        required
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                        value="{{ old('name_workshop', $workshop->name_workshop) }}"
                    >
                </div>
                <div>
                    <label for="description_workshop" class="block text-base font-semibold text-gray-800 mb-2">Descripción</label>
                    <textarea
                        name="description_workshop"
                        id="description_workshop"
                        rows="4"
                        required
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                    >{{ old('description_workshop', $workshop->description_workshop) }}</textarea>
                </div>
                <div>
                    <label for="date_workshop" class="block text-base font-semibold text-gray-800 mb-2">Fecha de publicación</label>
                    <input
                        type="date"
                        name="date_workshop"
                        id="date_workshop"
                        required
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                        value="{{ old('date_workshop', $workshop->date_workshop) }}"
                    >
                </div>


                <div>
                    <label for="image_workshop" class="block text-base font-semibold text-gray-800 mb-2">Imagen del taller</label>
                    <input
                        type="file"
                        name="image_workshop"
                        id="image_workshop"
                        accept="image/*"
                        class="w-full border border-gray-200 rounded-xl shadow p-3 focus:ring-2 focus:ring-gray-300 bg-gray-50/50"
                        value="{{ old('image_workshop', $workshop->image_workshop) }}"
                    >

                    <p class="text-center font-bold text-gray-700 mt-8">Imagen actual:</p>
                    <div class="flex justify-center">
                        <img src="/image/workshops/{{ $workshop->image_workshop }}"
                            alt="Imagen del taller"
                            class="max-w-full max-h-80 md:max-h-96 h-auto object-contain rounded-xl border-2 border-gray-200 shadow-md" />
                    </div>
                </div>

            <div>
                <button type="submit"
                    class="w-full bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-700 hover:to-gray-500 text-white font-bold py-3 rounded-xl shadow-lg transition-all">Guardar cambios</button>
                       </div>
            <div class="flex justify-center mt-4">
                <a href="{{ route('workshops.index') }}"
                    class="w-full bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-700 hover:to-gray-500 text-white font-bold py-3 rounded-xl shadow-lg transition-all text-center">
                    Volver a la vista de talleres
                    </a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
</x-app-layout>
