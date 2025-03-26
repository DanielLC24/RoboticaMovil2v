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
        <div class="absolute bottom-0 left-1/2 w-72 h-72 bg-purple-500 rounded-full filter blur-3xl"></div>
        <div class="absolute top-1/3 left-1/4 w-64 h-64 bg-cyan-400 rounded-full filter blur-3xl opacity-30"></div>
        <img src="{{ asset('image/circuit-pattern.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-5" alt="Background Pattern">
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




<!-- Partnerships Section -->
<div class="bg-[#000033] py-24 sm:py-10 relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_800px_at_100%_200px,rgba(29,78,216,0.15),transparent)] animate-pulse"></div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
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

<!-- Timeline Section -->
<div class="bg-[#000055] py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_800px_at_100%_200px,rgba(29,78,216,0.15),transparent)] animate-pulse"></div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
        <div class="mx-auto max-w-2xl lg:text-center mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Historia de Colaboraciones</h2>
            <p class="mt-2 text-lg leading-8 text-blue-200">Nuestro camino de innovación y cooperación</p>
        </div>
        
        <div class="relative">
            <!-- Timeline Line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-600"></div>
            
            <!-- Timeline Items -->
            <div class="space-y-16">
                <!-- Timeline Item 1 -->
                <div class="relative flex items-center justify-between">
                    <div class="w-5/12 pr-8 text-right animate-fade-in">
                        <h3 class="text-xl font-bold text-white mb-2">Inicio de Colaboración Internacional</h3>
                        <p class="text-blue-200">Primera colaboración con la ESA en proyectos de exploración espacial</p>
                        <span class="text-blue-400 font-medium">2020</span>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-blue-900"></div>
                    <div class="w-5/12 pl-8"></div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="relative flex items-center justify-between">
                    <div class="w-5/12 pr-8"></div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-blue-900"></div>
                    <div class="w-5/12 pl-8 animate-fade-in">
                        <h3 class="text-xl font-bold text-white mb-2">Expansión de Red Académica</h3>
                        <p class="text-blue-200">Establecimiento de programas de intercambio con universidades líderes</p>
                        <span class="text-blue-400 font-medium">2022</span>
                    </div>
                </div>
                
                <!-- Timeline Item 3 -->
                <div class="relative flex items-center justify-between">
                    <div class="w-5/12 pr-8 text-right animate-fade-in">
                        <h3 class="text-xl font-bold text-white mb-2">Premio a la Innovación</h3>
                        <p class="text-blue-200">Reconocimiento internacional por desarrollos en robótica móvil</p>
                        <span class="text-blue-400 font-medium">2023</span>
                    </div>
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-600 rounded-full border-4 border-blue-900"></div>
                    <div class="w-5/12 pl-8"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Image Gallery Section -->
<div class="bg-[#000044] py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-16">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Galería de Eventos</h2>
            <p class="mt-2 text-lg leading-8 text-blue-200">Momentos destacados de nuestras colaboraciones</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Gallery Item 1 -->
            <div class="group relative overflow-hidden rounded-lg bg-[#001133] p-2 hover:shadow-lg hover:shadow-blue-500/20 transition-all duration-300 border border-blue-900 hover:border-blue-500">
                <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="Evento 1" class="w-full h-64 object-cover rounded transform group-hover:scale-105 transition-transform duration-300">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-white mb-2">Conferencia Internacional 2023</h3>
                    <p class="text-blue-200 text-sm">Presentación de avances en robótica colaborativa</p>
                </div>
            </div>
            
            <!-- Gallery Item 2 -->
            <div class="group relative overflow-hidden rounded-lg bg-[#001133] p-2 hover:shadow-lg hover:shadow-blue-500/20 transition-all duration-300 border border-blue-900 hover:border-blue-500">
                <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="Evento 2" class="w-full h-64 object-cover rounded transform group-hover:scale-105 transition-transform duration-300">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-white mb-2">Workshop de Innovación</h3>
                    <p class="text-blue-200 text-sm">Sesión práctica con estudiantes internacionales</p>
                </div>
            </div>
            
            <!-- Gallery Item 3 -->
            <div class="group relative overflow-hidden rounded-lg bg-[#001133] p-2 hover:shadow-lg hover:shadow-blue-500/20 transition-all duration-300 border border-blue-900 hover:border-blue-500">
                <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="Evento 3" class="w-full h-64 object-cover rounded transform group-hover:scale-105 transition-transform duration-300">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-white mb-2">Simposio de Robótica 2024</h3>
                    <p class="text-blue-200 text-sm">Demostración de nuevas tecnologías</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Section -->


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