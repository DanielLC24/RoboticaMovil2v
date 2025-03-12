@extends('layouts.public')

@section('titulo', 'Publicaciones - Robótica Móvil')

@section('contenido')
<!-- Hero Section with Clean Design -->
<div class="relative bg-[#001233] py-20 sm:py-32">
    <div class="absolute inset-0 bg-gradient-to-b from-blue-950 to-blue-900 opacity-80"></div>
    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl mb-6">Publicaciones Científicas</h1>
            <p class="mt-6 text-lg leading-8 text-blue-100">Centro de excelencia en investigación y desarrollo de robótica móvil.</p>
        </div>
    </div>
</div>

<!-- Featured Publications Section -->
<div class="bg-white py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-12">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Investigación de Alto Impacto</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Publicaciones Destacadas</p>
        </div>

        <!-- Featured Publications Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            <!-- Featured Publication 1 -->
            <div class="bg-white shadow-lg rounded-lg p-8 border border-gray-200 hover:border-blue-500 transition-colors duration-300">
                <div class="flex items-center justify-between mb-6">
                    <span class="px-4 py-2 bg-blue-50 rounded-full text-sm font-semibold text-blue-700">Nature Robotics</span>
                    <span class="text-blue-600">Impact Factor: 15.2</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Autonomous Navigation in Dynamic Social Environments</h3>
                <p class="text-gray-600 mb-6">A breakthrough in social-aware navigation algorithms for mobile robots using advanced deep learning techniques and real-time human behavior prediction.</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="flex -space-x-2">
                            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=John+Doe" alt="Author 1">
                            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=Jane+Smith" alt="Author 2">
                        </div>
                        <span class="text-gray-500">+3 authors</span>
                    </div>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Ver publicación →</a>
                </div>
            </div>

            <!-- Featured Publication 2 -->
            <div class="bg-white shadow-lg rounded-lg p-8 border border-gray-200 hover:border-blue-500 transition-colors duration-300">
                <div class="flex items-center justify-between mb-6">
                    <span class="px-4 py-2 bg-blue-50 rounded-full text-sm font-semibold text-blue-700">Science Robotics</span>
                    <span class="text-blue-600">Impact Factor: 12.8</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Swarm Intelligence in Multi-Robot Systems</h3>
                <p class="text-gray-600 mb-6">Revolutionary approach to distributed decision-making in robot swarms using quantum-inspired algorithms and emergent behavior patterns.</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="flex -space-x-2">
                            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=Maria+Garcia" alt="Author 1">
                            <img class="w-10 h-10 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=Carlos+Rodriguez" alt="Author 2">
                        </div>
                        <span class="text-gray-500">+4 authors</span>
                    </div>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Ver publicación →</a>
                </div>
            </div>
        </div>

        <!-- Publication Categories -->
        <div class="flex justify-center gap-4 mb-12">
            <button class="px-6 py-2 rounded-full bg-blue-600 text-white font-medium hover:bg-blue-700 transition-colors">Todos</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-gray-700 font-medium hover:bg-gray-200 transition-colors">Journals</button>
            <button class="px-6 py-2 rounded-full bg-gray-100 text-gray-700 font-medium hover:bg-gray-200 transition-colors">Conferencias</button>
        </div>

        <!-- Publications Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @for ($i = 1; $i <= 6; $i++)
            <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200 hover:border-blue-500 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-sm text-gray-500">{{ date('Y') - rand(0, 3) }}</span>
                    <span class="px-3 py-1 text-xs rounded-full bg-blue-50 text-blue-700 font-medium">Journal</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Título de la Publicación {{ $i }}</h3>
                <p class="text-gray-600 text-sm mb-4">Descripción breve de la publicación y sus principales hallazgos o contribuciones al campo de la robótica móvil.</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <img class="w-8 h-8 rounded-full border border-gray-200" src="https://ui-avatars.com/api/?name=Author+{{ $i }}" alt="Author">
                        <span class="text-sm text-gray-500">Autor Principal</span>
                    </div>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-medium text-sm">Leer más →</a>
                </div>
            </div>
            @endfor
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition-colors shadow-md">
                Cargar Más Publicaciones
            </button>
        </div>
    </div>
</div>

@endsection