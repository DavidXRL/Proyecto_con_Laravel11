@extends('layout.main_template-admin')

@section('content')
<x-app-layout>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <title>Crear actividad | Telesecundaria Justo Sierra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>

<div class="flex justify-center items-center min-h-screen bg-gray-50">
    <div class="w-full max-w-2xl bg-white rounded-2xl shadow-2xl p-10">
        <h1 class="text-4xl font-extrabold text-gray-700 mb-10 text-center">Crear nueva actividad</h1>
        <p class="text-gray-600 text-center mb-8">Completa el siguiente formulario para crear una nueva actividad.</p>

        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-8 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('activities.store') }}" method="POST" enctype="multipart/form-data" class="space-y-7">
            @csrf
            <div>
                <label for="name_act" class="block text-base font-semibold text-gray-800 mb-2">Nombre de la actividad</label>
                <input type="text" name="name_act" id="name_act" required
                    class="w-full border border-gray-200 rounded-xl shadow p-3 bg-gray-50/50"
                    value="{{ old('name_act') }}">
            </div>
            <div>
                <label for="description_activity" class="block text-base font-semibold text-gray-800 mb-2">Descripción</label>
                <textarea name="description_activity" id="description_activity" rows="4" required
                    class="w-full border border-gray-200 rounded-xl shadow p-3 bg-gray-50/50">{{ old('description_activity') }}</textarea>
            </div>
            <div>
                <label for="date_activity" class="block text-base font-semibold text-gray-800 mb-2">Fecha de publicación</label>
                <input type="date" name="date_activity" id="date_activity" required
                    class="w-full border border-gray-200 rounded-xl shadow p-3 bg-gray-50/50"
                    value="{{ old('date_activity') }}">
            </div>

            <div>
                <label for="image_activity" class="block text-base font-semibold text-gray-800 mb-2">Seleccionar imagen:</label>
                <input type="file" name="image_activity" id="image_activity"
                    class="w-full border border-gray-200 rounded-xl shadow p-3 bg-gray-50/50">
            </div>
                <div>
                    <button type="submit" class="w-full bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-700 hover:to-gray-500 text-white font-bold py-3 rounded-xl shadow-lg transition-all">Crear actividad</button>
                </div>
                <div class="flex justify-center mt-4">
                    <a href="{{ route('activities.index') }}" class="w-full bg-gradient-to-r from-gray-600 to-gray-400 hover:from-gray-700 hover:to-gray-500 text-white font-bold py-3 rounded-xl shadow-lg transition-all text-center">
                        Volver a actividades
                    </a>
                </div>
        </form>
    </div>
</div>
</x-app-layout>
@endsection
