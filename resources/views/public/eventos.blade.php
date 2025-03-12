@extends('layouts.public')

@section('titulo', 'Eventos - Robótica Móvil')

@section('contenido')
<!-- Hero Section with Clean Design -->
<div class="relative bg-[#001233] py-20 sm:py-32">
    <div class="absolute inset-0 bg-gradient-to-b from-blue-950 to-blue-900 opacity-80"></div>
    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl mb-6">Eventos Institucionales</h1>
            <p class="mt-6 text-lg leading-8 text-blue-100">Centro de excelencia en investigación y desarrollo de robótica móvil.</p>
        </div>
    </div>
</div>


<!-- Upcoming Events Section -->
<div class="bg-white py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-12">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Calendario Institucional</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Próximos Eventos</p>
        </div>

        <!-- Event Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Event Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200 hover:border-blue-500 transition-colors duration-300">
                <div class="mb-4 text-blue-600"><i class="fas fa-calendar-alt text-xl"></i></div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Nombre_Evento 2025</h3>
                <p class="text-gray-600 mb-4">Descripción</p>
                <div class="flex items-center text-sm text-gray-500 mb-2">
                    <i class="fas fa-clock mr-2"></i> dia/mes/año
                </div>
                <div class="flex items-center text-sm text-gray-500">
                    <i class="fas fa-map-marker-alt mr-2"></i> Estado/Pais
                </div>
            </div>

            <!-- Event Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6 border border-gray-200 hover:border-blue-500 transition-colors duration-300">
                <div class="mb-4 text-blue-600"><i class="fas fa-robot text-xl"></i></div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Nombre_Evento 2025</h3>
                <p class="text-gray-600 mb-4">Descripción</p>
                <div class="flex items-center text-sm text-gray-500 mb-2">
                    <i class="fas fa-clock mr-2"></i> dia/mes/año
                </div>
                <div class="flex items-center text-sm text-gray-500">
                    <i class="fas fa-map-marker-alt mr-2"></i> Estado/Pais
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Past Events Section -->
<div class="bg-gray-50 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-12">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Historia Institucional</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Eventos Destacados</p>
        </div>

        <!-- Past Events Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <!-- Event 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg border-l-4 border-blue-600 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-blue-500">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">Nombre_Evento</h3>
                    <span class="text-sm text-blue-600 font-medium">mes/año</span>
                </div>
                <p class="text-gray-600 mb-2">Descripción</p>
                <div class="text-sm text-gray-500">Estado/Pais</div>
            </div>

            <!-- Event 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg border-l-4 border-blue-600 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:border-blue-500">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xl font-semibold text-gray-900">Nombre_Evento</h3>
                    <span class="text-sm text-blue-600 font-medium">mes/año</span>
                </div>
                <p class="text-gray-600 mb-2">Descripción</p>
                <div class="text-sm text-gray-500">Estado/Pais</div>
            </div>
        </div>
    </div>
</div>
@endsection