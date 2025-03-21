@extends('layouts.public')

@section('titulo', 'Inicio - Robótica Móvil')

@section('contenido')
<style>
@keyframes gradient-x {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
.animate-gradient-x {
    background-size: 200% 200%;
    animation: gradient-x 15s ease infinite;
}
.animate-fade-in {
    animation: fade-in 1s ease-out;
}
.animate-fade-in-up {
    animation: fade-in-up 1s ease-out;
    animation-fill-mode: both;
}
@keyframes fade-in {
    0% { opacity: 0; }
    100% { opacity: 1; }
}
@keyframes fade-in-up {
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
<!-- Hero Section with Clean Design -->
<div class="relative isolate overflow-hidden bg-gradient-to-br from-[#001233] via-[#001845] to-[#002855] min-h-screen animate-gradient-x">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z" fill="rgba(255,255,255,0.07)"%3E%3C/path%3E%3C/svg%3E')] opacity-25"></div>
    
    <div class="relative z-10 mx-auto max-w-7xl px-6 pt-20 pb-24 sm:pb-32 lg:flex lg:px-8 lg:py-15">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">
            <div class="mt-24 sm:mt-32 lg:mt-16">
                <a href="#" class="inline-flex items-center space-x-6">
                    <span class="rounded-full bg-blue-100 px-3 py-1 text-sm font-semibold leading-6 text-blue-900">Últimas Novedades</span>
                </a>
            </div>
            <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl animate-fade-in">Robótica Móvil <span id="typed-title" class="bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent animate-pulse">Avanzada</span></h1>
            <p class="mt-6 text-lg leading-8 text-gray-300">Descubre el futuro de la robótica móvil. Exploramos las últimas tecnologías en robots autónomos, sistemas de navegación y control inteligente.</p>
            <div class="mt-10 flex items-center gap-x-6 animate-fade-in-up">
                <a href="#" class="rounded-md bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 transition-colors duration-300">
                    Comenzar Ahora
                </a>
                <a href="#" class="text-sm font-semibold leading-6 text-white hover:text-blue-400 transition-colors duration-300">
                    Saber más <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Feature Section with Clean Cards -->
<div class="relative bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Tecnología Avanzada</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Todo lo que necesitas sobre <span class="text-blue-900">robótica móvil</span></p>
            <p class="mt-6 text-lg leading-8 text-gray-600">Explora nuestras áreas de especialización en robótica móvil y descubre cómo estamos transformando el futuro de la automatización.</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <!-- Feature Card 1 -->
                <div class="bg-white shadow-lg rounded-lg p-8 border border-gray-200 hover:border-blue-600 transition-colors duration-300">
                    <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                        <i class="fa-solid fa-robot text-blue-600 text-2xl"></i>
                        Robots Autónomos
                    </dt>
                    <dd class="mt-4 text-base leading-7 text-gray-600">
                        <p>Desarrollo de robots autónomos con capacidades avanzadas de navegación y toma de decisiones basadas en IA.</p>
                    </dd>
                </div>

                <!-- Feature Card 2 -->
                <div class="bg-white shadow-lg rounded-lg p-8 border border-gray-200 hover:border-blue-500 transition-colors duration-300">
                    <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                        <i class="fa-solid fa-microchip text-blue-600 text-2xl"></i>
                        Sistemas de Control
                    </dt>
                    <dd class="mt-4 text-base leading-7 text-gray-600">
                        <p>Implementación de sistemas de control inteligente con algoritmos avanzados de optimización.</p>
                    </dd>
                </div>

                <!-- Feature Card 3 -->
                <div class="bg-white shadow-lg rounded-lg p-8 border border-gray-200 hover:border-blue-500 transition-colors duration-300">
                    <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-gray-900">
                        <i class="fa-solid fa-code text-blue-600 text-2xl"></i>
                        Programación Avanzada
                    </dt>
                    <dd class="mt-4 text-base leading-7 text-gray-600">
                        <p>Desarrollo de software especializado con las últimas tecnologías en IA y machine learning.</p>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<!-- Projects Section with Clean Design -->
<div class="relative bg-gray-50 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Proyectos Destacados</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Descubre nuestros últimos proyectos en robótica móvil</p>
        </div>
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <!-- Project Card 1 -->
            <article class="bg-white rounded-lg shadow-lg overflow-hidden border border-transparent hover:border-blue-500 hover:shadow-[0_0_15px_rgba(59,130,246,0.5)] transition-all duration-300 hover:-translate-y-2 animate-fade-in-up">
                <div class="relative aspect-[16/9]">
                    <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="Robot Project 1" class="absolute inset-0 h-full w-full object-cover">
                </div>
                <div class="p-6">
                    <time datetime="2024-03-16" class="text-sm leading-6 text-blue-600">Mar 16, 2024</time>
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900">
                        Robot Explorador Autónomo
                    </h3>
                    <p class="mt-5 text-sm leading-6 text-gray-600">Desarrollo de un robot explorador con capacidades de mapeo y navegación autónoma en terrenos desconocidos.</p>
                    <div class="mt-4 flex gap-2">
                        <span class="rounded-full bg-blue-100 px-3 py-1.5 text-xs font-medium text-blue-600">Robótica</span>
                        <span class="rounded-full bg-blue-100 px-3 py-1.5 text-xs font-medium text-blue-600">IA</span>
                    </div>
                </div>
            </article>

            <!-- Project Card 2 -->
            <article class="bg-white rounded-lg shadow-lg overflow-hidden border border-transparent hover:border-blue-500 hover:shadow-[0_0_15px_rgba(59,130,246,0.5)] transition-all duration-300 hover:-translate-y-2 animate-fade-in-up">
                <div class="relative aspect-[16/9]">
                    <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="Robot Project 2" class="absolute inset-0 h-full w-full object-cover">
                </div>
                <div class="p-6">
                    <time datetime="2024-03-15" class="text-sm leading-6 text-blue-600">Mar 15, 2024</time>
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900">
                        Sistema de Control Inteligente
                    </h3>
                    <p class="mt-5 text-sm leading-6 text-gray-600">Implementación de un sistema de control basado en IA para optimización de movimientos robóticos.</p>
                    <div class="mt-4 flex gap-2">
                        <span class="rounded-full bg-blue-100 px-3 py-1.5 text-xs font-medium text-blue-600">Control</span>
                        <span class="rounded-full bg-blue-100 px-3 py-1.5 text-xs font-medium text-blue-600">ML</span>
                    </div>
                </div>
            </article>

            <!-- Project Card 3 -->
            <article class="bg-white rounded-lg shadow-lg overflow-hidden border border-transparent hover:border-blue-500 hover:shadow-[0_0_15px_rgba(59,130,246,0.5)] transition-all duration-300 hover:-translate-y-2 animate-fade-in-up">
                <div class="relative aspect-[16/9]">
                    <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="Robot Project 3" class="absolute inset-0 h-full w-full object-cover">
                </div>
                <div class="p-6">
                    <time datetime="2024-03-14" class="text-sm leading-6 text-blue-600">Mar 14, 2024</time>
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900">
                        Navegación Avanzada
                    </h3>
                    <p class="mt-5 text-sm leading-6 text-gray-600">Sistema de navegación avanzada utilizando sensores y algoritmos de planificación de rutas.</p>
                    <div class="mt-4 flex gap-2">
                        <span class="rounded-full bg-blue-100 px-3 py-1.5 text-xs font-medium text-blue-600">Navegación</span>
                        <span class="rounded-full bg-blue-100 px-3 py-1.5 text-xs font-medium text-blue-600">Sensores</span>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

@endsection