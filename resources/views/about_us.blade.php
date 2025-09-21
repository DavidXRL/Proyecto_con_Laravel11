<!DOCTYPE html>
<html>
<head>
    <title>Sobre nosotros | Telesecundaria Justo Sierra</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-green-100 via-white to-green-100 min-h-screen">

    @include('layout.main_template')

    <main class="mx-auto mt-10 p-5 bg-white rounded-3xl shadow-2xl" style="width: 95%">

<!-- TÍTULO -->
<!-- TÍTULO -->
<div class="flex flex-col items-center mb-16">
  <h1 class="text-5xl md:text-5xl font-extrabold text-center text-gray-900 drop-shadow-lg mb-6 flex items-center gap-4 mt-7">
    SOBRE NOSOTROS
  </h1>
  <div class="h-2 w-48 bg-green-600 rounded-full shadow-lg"></div>
</div>

<!-- NUESTRA HISTORIA -->
<section class="mb-16 max-w-6xl mx-auto px-6">
  <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-14 tracking-wide flex items-center justify-center gap-3 drop-shadow-md">
    <span class="text-4xl">🕰️</span> NUESTRA HISTORIA
  </h2>
  <div class="relative bg-white rounded-3xl shadow-2xl p-10 border border-green-200">
    <div class="pl-8 border-l-8 border-green-400 space-y-7 text-justify text-lg text-gray-800 leading-relaxed font-medium max-w-4xl mx-auto">
      <p>
        Durante más de <span class="font-semibold text-green-900">cuatro décadas</span>, la Escuela Telesecundaria “Justo Sierra” ha consolidado su papel como un referente educativo en la comunidad, formando generaciones de estudiantes con sólidos valores, compromiso social y una visión orientada hacia el futuro. Este crecimiento ha sido posible gracias a la colaboración y esfuerzo conjunto de docentes, familias y autoridades, quienes han construido una institución comprometida con la excelencia educativa.
      </p>
      <p>
        Fundada en <span class="font-semibold text-green-900">1977</span> con una matrícula inicial de 40 alumnos, la institución inició sus actividades en un espacio cedido por el Sindicato de la C.T.M., bajo la Dirección General para Adultos. La profesora <span class="font-semibold text-green-900">Úrsula Zaleta Salazar</span>, fundadora de la escuela, fue pieza fundamental en estos primeros años marcados por la esperanza y el compromiso con la educación.
      </p>
      <p>
        Gracias al apoyo del Ayuntamiento, padres de familia y la comunidad, la escuela se estableció en su actual ubicación dentro de la Colonia Hidalgo, donde se construyeron las primeras aulas y servicios sanitarios, consolidando así un espacio propicio para el aprendizaje.
      </p>
      <p>
        Actualmente, la Telesecundaria “Justo Sierra” se mantiene a la vanguardia en materia educativa, promoviendo el trabajo colaborativo, el respeto mutuo y la participación activa de todos sus miembros. Bajo la dirección del profesor <span class="font-semibold text-green-900">Joel Aguilera Luna</span>, la institución impulsa una educación integral que contribuye al desarrollo personal y académico de sus estudiantes, fomentando valores de humanismo e inclusión acorde a los principios de la Nueva Escuela Mexicana.
      </p>
    </div>
  </div>
</section>
<!-- MISIÓN Y VISIÓN -->
<section class="px-6 max-w-5xl mx-auto flex flex-col md:flex-row gap-10 mb-20">
  <!-- Misión -->
  <div class="flex-1  border border-green-300 rounded-3xl shadow-lg p-12 text-center transition-transform hover:scale-[1.04] duration-300 cursor-default">
    <h3 class="text-4xl font-extrabold text-gray-900 uppercase tracking-widest mb-5 flex items-center justify-center gap-3 drop-shadow-md">
      <span class="text-5xl">🎯</span> MISIÓN
    </h3>
    <div class="h-1 w-28 bg-green-600 rounded-full mx-auto mb-8 shadow-md"></div>
    <p class="text-lg text-gray-800 leading-relaxed font-semibold">
      Ofrecer una educación de calidad, efectiva y formativa que potencie el desarrollo integral de nuestros estudiantes, preparándolos para enfrentar con éxito los retos del presente y futuro.
    </p>
  </div>

  <!-- Visión -->
  <div class="flex-1  border border-green-300 rounded-3xl shadow-lg p-12 text-center transition-transform hover:scale-[1.04] duration-300 cursor-default">
    <h3 class="text-4xl font-extrabold text-gray-900 uppercase tracking-widest mb-5 flex items-center justify-center gap-3 drop-shadow-md">
      <span class="text-5xl">🔭</span> VISIÓN
    </h3>
    <div class="h-1 w-28 bg-green-600 rounded-full mx-auto mb-8 shadow-md"></div>
    <p class="text-lg text-gray-800 leading-relaxed font-semibold">
      Consolidarnos como una institución educativa de prestigio, reconocida por su formación integral y el desarrollo de competencias esenciales, mediante el uso de metodologías pedagógicas innovadoras y tecnologías que fomenten valores universales.
    </p>
  </div>
</section>





        <!-- VALORES INSTITUCIONALES -->
        <section class="mb-20 px-6">
  <h2 class="text-4xl font-extrabold text-center text-green-900 mb-14 tracking-tight flex items-center justify-center gap-3 drop-shadow-md">
    <span class="text-5xl">💎</span> VALORES INSTITUCIONALES
  </h2>

  <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3 max-w-7xl mx-auto px-4">
    @php
      $valores = [
          ['nombre' => 'Solidaridad', 'emoji' => '🤗', 'desc' => 'Promovemos el apoyo mutuo entre alumnos, docentes, padres y autoridades para formar un equipo unido y comprometido.'],
          ['nombre' => 'Responsabilidad', 'emoji' => '📝', 'desc' => 'Impulsamos el cumplimiento de tareas con orden, puntualidad y compromiso, mejorando cada día por el bien común.'],
          ['nombre' => 'Justicia', 'emoji' => '⚖️', 'desc' => 'Aplicamos reglas equitativas que fomentan la reflexión, el respeto y la oportunidad de mejorar a través de las experiencias.'],
          ['nombre' => 'Respeto', 'emoji' => '🙏', 'desc' => 'Escuchamos y valoramos la opinión de los demás, manteniendo una actitud digna y cordial en toda convivencia.'],
          ['nombre' => 'Tolerancia', 'emoji' => '🤝', 'desc' => 'Fomentamos la aceptación de diferencias y el diálogo como base para una sana convivencia dentro y fuera del aula.'],
      ];
    @endphp

    @foreach ($valores as $valor)
      <div class="bg-white rounded-3xl shadow-lg p-8 flex flex-col items-center text-center border border-green-200
                  hover:shadow-2xl hover:scale-[1.03] transition-transform duration-300">
        <div class="flex items-center justify-center w-20 h-20 mb-5 bg-green-100 rounded-full text-5xl">
          {{ $valor['emoji'] }}
        </div>
        <h3 class="text-3xl font-bold text-green-800 mb-3">{{ $valor['nombre'] }}</h3>
        <p class="text-gray-700 leading-relaxed max-w-[320px]">
          {{ $valor['desc'] }}
        </p>
      </div>
    @endforeach
  </div>
</section>

    </main>

    @include('layout.footer_template')

</body>
</html>
