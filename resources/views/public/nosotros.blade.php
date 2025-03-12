@extends('layouts.public')

@section('titulo', 'Nosotros - Robótica Móvil')

@section('contenido')
<!-- Hero Section -->
<div class="relative bg-[#001233] py-20 sm:py-32">
    <div class="absolute inset-0 bg-gradient-to-b from-blue-950 to-blue-900 opacity-80"></div>
    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl mb-6">Centro de Investigación en<br>Robótica Móvil</h1>
            <p class="mt-6 text-lg leading-8 text-blue-100">Liderando la innovación en robótica móvil y sistemas autónomos desde hace más de una década, estableciendo estándares de excelencia en investigación y desarrollo tecnológico.</p>
        </div>
    </div>
</div>

<!-- Mission Statement Section -->
<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-blue-900">Nuestra Misión</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Excelencia en Investigación y Desarrollo</p>
            <p class="mt-6 text-lg leading-8 text-gray-600">Nos dedicamos a la investigación avanzada en robótica móvil, formando la próxima generación de expertos y desarrollando soluciones tecnológicas que transforman la industria.</p>
        </div>
    </div>
</div>

<!-- Research Areas Section -->
<div class="bg-gray-50 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Áreas de Investigación</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Nuestras líneas de investigación principales</p>
        </div>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 hover:border-blue-500 transition-colors duration-300">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-robot text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Navegación Autónoma</h3>
                <p class="text-gray-600">Desarrollo de sistemas avanzados de navegación y mapeo para entornos complejos.</p>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 hover:border-blue-500 transition-colors duration-300">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-microchip text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Inteligencia Artificial</h3>
                <p class="text-gray-600">Implementación de sistemas de IA para optimización y toma de decisiones.</p>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 hover:border-blue-500 transition-colors duration-300">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-network-wired text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Sistemas Multi-Robot</h3>
                <p class="text-gray-600">Investigación en coordinación y colaboración entre sistemas robóticos.</p>
            </div>
        </div>
    </div>
</div>



<!-- Faculty Directors Section -->
<div class="bg-white py-24 sm:py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-16">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Dirección Académica</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Liderazgo y Visión</p>
            <p class="mt-6 text-lg leading-8 text-gray-600">Nuestros directores académicos lideran la innovación y el desarrollo en robótica móvil.</p>
        </div>

        <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-3">
            <!-- Director Profile Card -->
            <div class="relative bg-white p-8 shadow-sm ring-1 ring-gray-200 hover:ring-blue-500 hover:shadow-lg transition-all duration-300">
                <div class="flex flex-col items-center">
                    <div class="h-32 w-32 rounded-full bg-blue-900 flex items-center justify-center mb-6">
                        <i class="fas fa-user text-4xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Rubin</h3>
                    <p class="text-blue-600 mb-4">"Puesto"</p>
                    <p class="text-gray-600 text-center mb-6">"Experiencia"</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fas fa-envelope text-xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Engineers Section -->
<div class="bg-gray-50 py-24 sm:py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-16">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Ingenieros Investigadores</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Experiencia y Conocimiento</p>
            <p class="mt-6 text-lg leading-8 text-gray-600">Nuestros ingenieros son expertos en sus campos, dedicados a la investigación y desarrollo de tecnologías robóticas avanzadas.</p>
        </div>

        <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-3">
            <!-- Engineer Profile Card -->
            <div class="relative bg-white p-8 shadow-sm ring-1 ring-gray-200 hover:ring-blue-500 hover:shadow-lg transition-all duration-300">
                <div class="flex flex-col items-center">
                    <div class="h-32 w-32 rounded-full bg-blue-800 flex items-center justify-center mb-6">
                        <i class="fas fa-user text-4xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Ing.Carlos García</h3>
                    <p class="text-blue-600 mb-4">"Puesto"</p>
                    <p class="text-gray-600 text-center mb-6">"Experiencia"</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-github text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-linkedin text-xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Students Section -->
<div class="bg-white py-24 sm:py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-16">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Estudiantes Investigadores</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">El Futuro de la Robótica</p>
            <p class="mt-6 text-lg leading-8 text-gray-600">Nuestros estudiantes son la próxima generación de innovadores en robótica móvil.</p>
        </div>

        <div class="grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-4">
            <!-- Student Profile Card -->
            <div class="relative bg-white p-6 shadow-sm ring-1 ring-gray-200 hover:ring-blue-500 hover:shadow-lg transition-all duration-300">
                <div class="flex flex-col items-center">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Daniel Lopez</h3>
                    <p class="text-blue-600 text-sm mb-3 text-center">Estudiante de Ingenieria en Ciencias de la Computación</p>
                    <p class="text-gray-600 text-sm text-center mb-4">"Experiencia"</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-github text-lg"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fas fa-envelope text-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection