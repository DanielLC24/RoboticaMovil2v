@extends('layouts.public')

@section('titulo', 'Proyectos - Robótica Móvil')

@section('contenido')


<style>
.glow-text {
    text-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
}
.animate-gradient {
    background-size: 200% 200%;
    animation: gradient 15s ease infinite;
}
.animate-fade-in {
    animation: fadeIn 1s ease-out;
}
.animate-fade-in-up {
    animation: fadeInUp 1s ease-out;
    animation-fill-mode: both;
}
@keyframes gradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-[#000033] via-[#000066] to-[#330066] animate-gradient py-24 sm:py-36 overflow-hidden">  
<div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-400 rounded-full filter blur-3xl"></div>
        <div class="absolute top-1/2 -right-24 w-80 h-80 bg-blue-600 rounded-full filter blur-3xl"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight text-white mb-4 sm:mb-6">Proyectos en Robótica</h1>
            <p class="mt-4 sm:mt-6 text-base sm:text-lg leading-7 sm:leading-8 text-blue-100">Desarrollando soluciones innovadoras en robótica móvil que definen el futuro de la tecnología autónoma.</p>
        </div>
    </div>
</div>

<!-- Project Categories -->
<div class="bg-white py-6 sm:py-8 border-b border-gray-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-2 sm:gap-4">
            <button class="px-4 py-2 text-sm font-medium text-blue-900 bg-blue-50 rounded-md hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500">Todos</button>
            <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-blue-900 hover:bg-blue-50 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">En Desarrollo</button>
            <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-blue-900 hover:bg-blue-50 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Completados</button>
            <button class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-blue-900 hover:bg-blue-50 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Próximamente</button>
        </div>
    </div>
</div>

<!-- Projects Grid -->
<div class="bg-gray-50 py-12 sm:py-16 md:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 sm:gap-6 md:gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Project Card 1 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-blue-500 border border-transparent">
                <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="Rover Explorer" class="w-full h-40 sm:h-48 object-cover">
                <div class="p-4 sm:p-6">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">Completado</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Rover Explorer</h3>
                    <p class="text-gray-600 mb-4">Robot explorador autónomo con capacidad de mapeo y navegación en terrenos irregulares.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="inline-flex items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-700">Arduino</span>
                        <span class="inline-flex items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-700">C++</span>
                        <span class="inline-flex items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-700">Sensores</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-blue-500 border border-transparent">
                <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="Dron Autónomo" class="w-full h-48 object-cover">
                <div class="p-4 sm:p-6">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800">Próximamente</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Dron Autónomo</h3>
                    <p class="text-gray-600 mb-4">Sistema de dron con inteligencia artificial para inspección y monitoreo ambiental.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="inline-flex items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-700">AI</span>
                        <span class="inline-flex items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-700">Computer Vision</span>
                        <span class="inline-flex items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-700">IoT</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden transition-all duration-300 hover:shadow-lg hover:border-blue-500 border border-transparent">
                <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="Cansac" class="w-full h-48 object-cover">
                <div class="p-4 sm:p-6">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">En Desarrollo</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Cansac</h3>
                    <p class="text-gray-600 mb-4">Sistema de navegación autónoma con mapeo en tiempo real y toma de decisiones basada en IA.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="inline-flex items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-700">ROS2</span>
                        <span class="inline-flex items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-700">Python</span>
                        <span class="inline-flex items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-700">SLAM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection