@extends('layouts.public')

@section('titulo', 'Colaboraciones - Robótica Móvil')

@section('contenido')
<div class="min-h-screen bg-white py-16 px-4 sm:px-6 lg:px-8">
    <!-- Header Section -->
    <div class="max-w-7xl mx-auto text-center mb-16">
        <h1 class="text-5xl font-bold text-navy-900 mb-6">Nuestras Colaboraciones</h1>
        <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
        <p class="text-xl text-navy-700 max-w-3xl mx-auto">Construyendo el futuro de la robótica móvil a través de alianzas estratégicas con instituciones líderes.</p>
    </div>

    <div class="max-w-7xl mx-auto">
        <!-- Current Collaborations -->
        <div class="mb-20">
            <h2 class="text-3xl font-semibold text-navy-900 mb-12 text-center">Colaboraciones Actuales</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Collaboration Card 1 -->
                <div class="bg-white shadow-lg rounded-lg p-8 transition-transform duration-300 hover:translate-y-[-4px] hover:shadow-blue-600/20 hover:shadow-xl border border-gray-100">
                    <div class="mb-6">
                        <i class="fa-solid fa-university text-4xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-4">Universidad Tecnológica</h3>
                    <p class="text-navy-700 mb-6">Investigación conjunta en sistemas de navegación autónoma</p>
                    <div class="inline-block px-4 py-2 bg-blue-600/10 rounded-full">
                        <span class="text-navy-900 font-medium">2023 - Presente</span>
                    </div>
                </div>

                <!-- Collaboration Card 2 -->
                <div class="bg-white shadow-lg rounded-lg p-8 transition-transform duration-300 hover:translate-y-[-4px] hover:shadow-blue-600/20 hover:shadow-xl border border-gray-100">
                    <div class="mb-6">
                        <i class="fa-solid fa-flask text-4xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-4">Instituto de Investigación</h3>
                    <p class="text-navy-700 mb-6">Desarrollo de algoritmos de IA para robótica móvil</p>
                    <div class="inline-block px-4 py-2 bg-blue-600/10 rounded-full">
                        <span class="text-navy-900 font-medium">2023 - Presente</span>
                    </div>
                </div>

                <!-- Collaboration Card 3 -->
                <div class="bg-white shadow-lg rounded-lg p-8 transition-transform duration-300 hover:translate-y-[-4px] hover:shadow-blue-600/20 hover:shadow-xl border border-gray-100">
                    <div class="mb-6">
                        <i class="fa-solid fa-robot text-4xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-4">Centro de Robótica Avanzada</h3>
                    <p class="text-navy-700 mb-6">Proyectos de innovación en robótica colaborativa</p>
                    <div class="inline-block px-4 py-2 bg-blue-600/10 rounded-full">
                        <span class="text-navy-900 font-medium">2024 - Presente</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Future Collaborations -->
        <div>
            <h2 class="text-3xl font-semibold text-navy-900 mb-12 text-center">Próximas Colaboraciones</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Future Collaboration 1 -->
                <div class="bg-white shadow-lg rounded-lg p-8 hover:shadow-blue-600/20 hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <i class="fa-solid fa-lightbulb text-3xl text-blue-600 mr-4"></i>
                        <h3 class="text-xl font-bold text-navy-900">Programa de Intercambio Internacional</h3>
                    </div>
                    <p class="text-navy-700 mb-6">Colaboración planificada con universidades internacionales para el intercambio de conocimientos en robótica móvil.</p>
                    <div class="flex items-center text-blue-600">
                        <i class="fa-regular fa-calendar mr-2"></i>
                        <span class="font-medium">Iniciando 2025</span>
                    </div>
                </div>

                <!-- Future Collaboration 2 -->
                <div class="bg-white shadow-lg rounded-lg p-8 hover:shadow-blue-600/20 hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <span class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm font-semibold">Alianza Industrial</span>
                        <span class="text-navy-900 font-medium">2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 mb-4">Alianza Industrial-Académica</h3>
                    <p class="text-navy-700 mb-6">Colaboración estratégica con empresas líderes del sector y centros de investigación para el desarrollo de proyectos innovadores.</p>
                    <a href="#" class="text-blue-600 hover:text-navy-900 font-medium transition-colors duration-300">Más información →</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Partnerships Section -->
<div class="bg-white py-24 sm:py-10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Alianzas Estratégicas</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Colaboración con instituciones líderes a nivel global</p>
        </div>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <div class="bg-gray-50 p-8 rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/20 hover:border-blue-500 hover:-translate-y-1 border border-transparent">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-university text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Universidades</h3>
                <p class="text-gray-600">Colaboración con instituciones académicas de prestigio internacional.</p>
            </div>

            <div class="bg-gray-50 p-8 rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/20 hover:border-blue-500 hover:-translate-y-1 border border-transparent">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-industry text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Industria</h3>
                <p class="text-gray-600">Alianzas estratégicas con líderes del sector tecnológico.</p>
            </div>

            <div class="bg-gray-50 p-8 rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/20 hover:border-blue-500 hover:-translate-y-1 border border-transparent">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-globe text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Centros de Investigación</h3>
                <p class="text-gray-600">Colaboración con centros de investigación internacionales.</p>
            </div>
        </div>
    </div>
</div>
@endsection