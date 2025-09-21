
@extends('layout.main_template-admin')

@section('content')
<x-app-layout>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <title>Creación de talleres | Telesecundaria Justo Sierra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<div class="flex justify-center items-center min-h-screen bg-gray-50">
    <div class="w-full max-w-2xl bg-white rounded-2xl shadow-2xl p-10">
        <h1 class="text-4xl font-extrabold text-gray-700 mb-10 text-center">Agregar un nuevo taller</h1>
        <p class="text-gray-600 text-center mb-8">Completa el siguiente formulario para crear un nuevo taller.</p>

        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-8 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('workshops.store') }}" method="POST" enctype="multipart/form-data" class="space-y-7">
            @csrf
            <div>
                <label for="name_workshop" class="block text-base font-semibold text-gray-800 mb-2">Nombre del taller</label>
                <input type="text" name="name_workshop" id="name_workshop"
                    class="w-full border border-gray-200 rounded-xl shadow p-3 bg-gray-50/50"
                    value="{{ old('name_workshop') }}">
            </div>
            <div>
                <label for="description_workshop" class="block text-base font-semibold text-gray-800 mb-2">Descripción del taller:</label>
                <textarea name="description_workshop" id="description_workshop" rows="4"
                    class="w-full border border-gray-200 rounded-xl shadow p-3 bg-gray-50/50">{{ old('description_workshop') }}</textarea>
            </div>
            <div>
                <label for="date_workshop" class="block text-base font-semibold text-gray-800 mb-2">Fecha de creación</label>
                <input type="date" name="date_workshop" id="date_workshop"
                    class="w-full border border-gray-200 rounded-xl shadow p-3 bg-gray-50/50"
                    value="{{ old('date_workshop') }}">
            </div>
            <div>
                <label for="image_workshop" class="block text-base font-semibold text-gray-800 mb-2">Seleccionar imagen:</label>
                <input type="file" name="image_workshop" id="image_workshop"
                    class="w-full border border-gray-200 rounded-xl shadow p-3 bg-gray-50/50">
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-700 hover:to-gray-500 text-white font-bold py-3 rounded-xl shadow-lg transition-all">Crear
                    taller</button>
            </div>
            <div class="flex justify-center mt-4">
                <a href="{{ route('workshops.index') }}"
                    class="w-full bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-700 hover:to-gray-500 text-white font-bold py-3 rounded-xl shadow-lg transition-all text-center">
                    Volver a la vista de talleres
                </a>
            </div>
        </form>
    </div>
</div>
</x-app-layout>
@endsection
</html>
