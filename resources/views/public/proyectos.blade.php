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
<!-- TITULO sectionn -->
<div class="relative bg-gradient-to-br from-[#000033] via-[#000066] to-[#330066] animate-gradient py-24 sm:py-36 overflow-hidden">  
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-400 rounded-full filter blur-3xl"></div>
        <div class="absolute top-1/2 -right-24 w-80 h-80 bg-blue-600 rounded-full filter blur-3xl"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="w-full text-dark-navy flex flex-col relative bg-blue md:p-24 p-12 text-off-white">
            <h1 class="text-5xl md:text-6xl lg:text-9xl font-bold tracking-tight text-white mb-3"> <span class="text-blue-400">Nuestros</span></h1>
            <h1 class="text-5xl md:text-6xl lg:text-9xl font-bold tracking-tight text-white mb-6"> proyectos</h1>
        
            <p class="mt-4 sm:mt-6 text-base sm:text-lg leading-7 sm:leading-8 text-blue-100 max-w-2xl">Desarrollando soluciones innovadoras en robótica móvil que definen el futuro de la tecnología autónoma.</p>
        </div>
    </div>
</div>


<!-- Featured Projects Section -->
<div class="bg-[#000044] py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px=15">
        <!-- DESTACADOS -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl mb-2">DESTACADOS</h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto"></div>
        </div>

        <!-- Robotica Projects Carousel -->
        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-blue-400 mb-6 text-center">Proyectos de Robótica</h3>
            <div class="relative">
                <!-- Left Arrow Button -->
                <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-blue-900/50 hover:bg-blue-900/70 text-white rounded-full p-2 transition-all duration-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                
                <!-- Carousel Container -->
                <div id="carousel" class="mx-[50px] overflow-hidden mb-16">
                    <div class="carousel-track flex transition-transform duration-4000 ease-in-out">
                        @php
                            $roboticsProjects = [
                                ['title' => 'Robot Asistente Hospitalario', 'description' => 'Robot autónomo diseñado para asistir en entornos hospitalarios.'],
                                ['title' => 'Robot Industrial Colaborativo', 'description' => 'Sistema robótico para automatización de procesos industriales.'],
                                ['title' => 'Robot Explorador Terrestre', 'description' => 'Robot todo terreno para exploración y mapeo de entornos desconocidos.']
                            ];
                        @endphp

                        @foreach($roboticsProjects as $index => $project)
                            <div class="carousel-item flex-shrink-0 w-full px-4 opacity-0 translate-x-full transition-all duration-500 justify-center{{ $index === 0 ? 'opacity-100 translate-x-0' : '' }}">
                                <div class="bg-[#001133] rounded-lg shadow-xl p-8 border border-blue-900 hover:border-blue-500 h-full">
                                    <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="{{ $project['title'] }}" class="w-full h-64 object-cover rounded-lg mb-6">
                                    <h4 class="text-2xl font-semibold text-white mb-4 text-center">{{ $project['title'] }}</h4>
                                    <p class="text-blue-200 text-center text-lg">{{ $project['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            

                <!-- Right Arrow Button -->
                <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-blue-900/50 hover:bg-blue-900/70 text-white rounded-full p-2 transition-all duration-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
                
                
    
        <!-- Web Development Projects Carousel -->
        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-blue-400 mb-6 text-center">Proyectos de Desarrollo Web</h3>
            <div class="relative">
            <!-- Left Arrow Button -->
                <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-blue-900/50 hover:bg-blue-900/70 text-white rounded-full p-2 transition-all duration-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                
                <!-- Carousel Container -->
                <div id="carousel" class="mx-[50px] overflow-hidden mb-16">
                    <div class="carousel-track flex transition-transform duration-4000 ease-in-out">
                        @php
                            $webProjects = [
                                ['title' => 'Sistema de Gestión Empresarial', 'description' => 'Plataforma web integral para la gestión de recursos y procesos empresariales.'],
                                ['title' => 'E-commerce Avanzado', 'description' => 'Plataforma de comercio electrónico con características personalizadas y pagos seguros.'],
                                ['title' => 'CMS Personalizado', 'description' => 'Sistema de gestión de contenidos adaptado a necesidades específicas del cliente.']
                            ];
                        @endphp

                        @foreach($webProjects as $index => $project)
                            <div class="carousel-item flex-shrink-0 w-full px-4 opacity-0 translate-x-full transition-all duration-500 justify-center{{ $index === 0 ? 'opacity-100 translate-x-0' : '' }}">
                                <div class="bg-[#001133] rounded-lg shadow-xl p-8 border border-blue-900 hover:border-blue-500 h-full">
                                    <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="{{ $project['title'] }}" class="w-full h-64 object-cover rounded-lg mb-6">
                                    <h4 class="text-2xl font-semibold text-white mb-4 text-center">{{ $project['title'] }}</h4>
                                    <p class="text-blue-200 text-center text-lg">{{ $project['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            
            

                <!-- Right Arrow Button -->
                <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-blue-900/50 hover:bg-blue-900/70 text-white rounded-full p-2 transition-all duration-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>  
    </div>
</div>

<!-- Projects Grid -->



<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
$(function() {
    $("#news-slider").owlCarousel({
        items :1,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true,
        autoplayTimeout:10000
    });
});
        </script>
@endsection