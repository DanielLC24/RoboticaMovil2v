@extends('layouts.public')

@section('titulo', 'Colaboraciones - Robótica Móvil')

@section('contenido')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
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

<div class="relative bg-gradient-to-br from-[#000033] via-[#000066] to-[#330066] animate-gradient py-24 sm:py-36 overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600 rounded-full filter blur-3xl"></div>
        <div class="absolute top-1/2 -right-24 w-80 h-80 bg-blue-400 rounded-full filter blur-3xl"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="w-full text-dark-navy flex flex-col relative bg-blue md:p-24 p-12 text-off-white">
            <h1 class="text-5xl md:text-6xl lg:text-9xl font-bold tracking-tight text-white mb-3"> <span class="text-blue-400">Nuestras</span></h1>
            <h1 class="text-5xl md:text-6xl lg:text-9xl font-bold tracking-tight text-white mb-6"> Colaboraciones</h1>
            <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">Construyendo el futuro de la robótica móvil a través de alianzas estratégicas con instituciones líderes.</p>
        </div>
    </div>
</div>

<div class="bg-[#000044] py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Nuestros Colaboradores</h2>
            <p class="mt-2 text-lg leading-8 text-blue-200">Instituciones que confían en nuestra experiencia</p>
        </div>
        
        <div id="news-slider" class="owl-carousel">
            <div class="bg-[#001133] p-8 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 mx-2 border border-blue-900 hover:border-blue-500">
                <img src="{{ asset('image/buap.png') }}" alt="Partner 1" class="h-24 w-auto mx-auto filter grayscale hover:grayscale-0 transition-all duration-300">
            </div>
            <div class="bg-[#001133] p-8 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 mx-2 border border-blue-900 hover:border-blue-500">
                <img src="{{ asset('image/esa.png') }}" alt="Partner 2" class="h-24 w-auto mx-auto filter grayscale hover:grayscale-0 transition-all duration-300">
            </div>
            <div class="bg-[#001133] p-8 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 mx-2 border border-blue-900 hover:border-blue-500">
                <img src="{{ asset('image/ieee.webp') }}" alt="Partner 3" class="h-24 w-auto mx-auto filter grayscale hover:grayscale-0 transition-all duration-300">
            </div>
            <div class="bg-[#001133] p-8 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 mx-2 border border-blue-900 hover:border-blue-500">
                <img src="{{ asset('image/erc.png') }}" alt="Partner 4" class="h-24 w-auto mx-auto filter grayscale hover:grayscale-0 transition-all duration-300">
            </div>
        </div>
    </div>
</div>

<div class="bg-[#000044] py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Current Collaborations -->
        <div class="mb-20">
            <h2 class="text-3xl font-semibold text-white mb-12 text-center">Colaboraciones Actuales</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Collaboration Card 1 -->
                <div class="bg-[#001133] shadow-lg rounded-lg p-8 transition-transform duration-300 hover:translate-y-[-4px] hover:shadow-blue-600/20 hover:shadow-xl border border-blue-900 hover:border-blue-500">
                    <div class="mb-6">
                        <i class="fa-solid fa-university text-4xl text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Universidad Tecnológica</h3>
                    <p class="text-blue-200 mb-6">Investigación conjunta en sistemas de navegación autónoma</p>
                    <div class="inline-block px-4 py-2 bg-blue-900/50 rounded-full">
                        <span class="text-blue-200 font-medium">2023 - Presente</span>
                    </div>
                </div>

                <!-- Collaboration Card 2 -->
                <div class="bg-[#001133] shadow-lg rounded-lg p-8 transition-transform duration-300 hover:translate-y-[-4px] hover:shadow-blue-600/20 hover:shadow-xl border border-blue-900 hover:border-blue-500">
                    <div class="mb-6">
                        <i class="fa-solid fa-flask text-4xl text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Instituto de Investigación</h3>
                    <p class="text-blue-200 mb-6">Desarrollo de algoritmos de IA para robótica móvil</p>
                    <div class="inline-block px-4 py-2 bg-blue-900/50 rounded-full">
                        <span class="text-blue-200 font-medium">2023 - Presente</span>
                    </div>
                </div>

                <!-- Collaboration Card 3 -->
                <div class="bg-[#001133] shadow-lg rounded-lg p-8 transition-transform duration-300 hover:translate-y-[-4px] hover:shadow-blue-600/20 hover:shadow-xl border border-blue-900 hover:border-blue-500">
                    <div class="mb-6">
                        <i class="fa-solid fa-robot text-4xl text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Centro de Robótica Avanzada</h3>
                    <p class="text-blue-200 mb-6">Proyectos de innovación en robótica colaborativa</p>
                    <div class="inline-block px-4 py-2 bg-blue-900/50 rounded-full">
                        <span class="text-blue-200 font-medium">2024 - Presente</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Future Collaborations -->
        <div>
            <h2 class="text-3xl font-semibold text-white mb-12 text-center">Próximas Colaboraciones</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Future Collaboration 1 -->
                <div class="bg-[#001133] shadow-lg rounded-lg p-8 hover:shadow-blue-600/20 hover:shadow-xl transition-all duration-300 border border-blue-900 hover:border-blue-500">
                    <div class="flex items-center mb-6">
                        <i class="fa-solid fa-lightbulb text-3xl text-blue-400 mr-4"></i>
                        <h3 class="text-xl font-bold text-white">Programa de Intercambio Internacional</h3>
                    </div>
                    <p class="text-blue-200 mb-6">Colaboración planificada con universidades internacionales para el intercambio de conocimientos en robótica móvil.</p>
                    <div class="flex items-center text-blue-400">
                        <i class="fa-regular fa-calendar mr-2"></i>
                        <span class="font-medium">Iniciando 2025</span>
                    </div>
                </div>

                <!-- Future Collaboration 2 -->
                <div class="bg-[#001133] shadow-lg rounded-lg p-8 hover:shadow-blue-600/20 hover:shadow-xl transition-all duration-300 border border-blue-900 hover:border-blue-500">
                    <div class="flex items-center justify-between mb-6">
                        <span class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm font-semibold">Alianza Industrial</span>
                        <span class="text-blue-200 font-medium">2024</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Alianza Industrial-Académica</h3>
                    <p class="text-blue-200 mb-6">Colaboración estratégica con empresas líderes del sector y centros de investigación para el desarrollo de proyectos innovadores.</p>
                    <a href="#" class="text-blue-400 hover:text-blue-300 font-medium transition-colors duration-300">Más información →</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Partnerships Section -->
<div class="bg-[#000033] py-24 sm:py-10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Alianzas Estratégicas</h2>
            <p class="mt-2 text-lg leading-8 text-blue-200">Colaboración con instituciones líderes a nivel global</p>
        </div>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <div class="bg-[#001133] p-8 rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/20 hover:border-blue-500 hover:-translate-y-1 border border-blue-900">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-university text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Universidades</h3>
                <p class="text-blue-200">Colaboración con instituciones académicas de prestigio internacional.</p>
            </div>

            <div class="bg-[#001133] p-8 rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/20 hover:border-blue-500 hover:-translate-y-1 border border-blue-900">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-industry text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Industria</h3>
                <p class="text-blue-200">Alianzas estratégicas con líderes del sector tecnológico.</p>
            </div>

            <div class="bg-[#001133] p-8 rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/20 hover:border-blue-500 hover:-translate-y-1 border border-blue-900">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-globe text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Centros de Investigación</h3>
                <p class="text-blue-200">Colaboración con centros de investigación internacionales.</p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
$(function() {
    $("#news-slider").owlCarousel({
        items :2,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:false,
        navigationText:["",""],
        pagination:true,
        autoPlay:true,
        autoplayTimeout:10000
    });
});
</script>
@endsection