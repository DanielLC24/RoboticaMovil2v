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
            <div class="relative w-full overflow-hidden">
            <!-- Left Arrow Button -->
                <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-blue-900/50 hover:bg-blue-900/70 text-white rounded-full p-2 transition-all duration-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                
                <!-- Carousel Container -->
                <div id="carousel" class="mx-[50px] overflow-hidden mb-16 ">
                    <div class="carousel-track flex w-full transition-transform duration-500 ease-in-out">
                        @php
                            $webProjects = [
                                ['title' => 'Sistema de Gestión Empresarial', 'description' => 'Plataforma web integral para la gestión de recursos y procesos empresariales.'],
                                ['title' => 'E-commerce Avanzado', 'description' => 'Plataforma de comercio electrónico con características personalizadas y pagos seguros.'],
                                ['title' => 'CMS Personalizado', 'description' => 'Sistema de gestión de contenidos adaptado a necesidades específicas del cliente.']
                            ];
                        @endphp

                        @foreach($webProjects as $index => $project)
                        <!-- <div class="carousel-item flex-shrink-0 w-full px-4 opacity-0 translate-x-full transition-all duration-500 justify-center{{ $index === 0 ? 'opacity-100 translate-x-0' : '' }}"> -->
                            <div class="carousel-item w-full flex-shrink-0 px-4  justify-center {{ $index === 0 ? 'opacity-100 translate-x-0' : '' }}">
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

<!-- Statistics Section -->
<div class="bg-[#000055] py-16 sm:py-24 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/20 to-purple-900/20 backdrop-blur-3xl"></div>
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-500/20 rounded-full filter blur-3xl"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-purple-500/20 rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl mb-2">Nuestro Impacto en Números</h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">
            <!-- Proyectos Completados -->
            <div class="bg-[#001144] rounded-xl p-6 transform hover:scale-105 transition-all duration-300 border border-blue-900/50 hover:border-blue-500/50 group">
                <div class="text-center">
                    <div class="inline-block p-4 rounded-full bg-blue-500/10 group-hover:bg-blue-500/20 transition-all duration-300 mb-4">
                        <i class="fas fa-check-circle text-3xl text-blue-400"></i>
                    </div>
                    <div class="counter text-4xl font-bold text-white mb-2" data-target="150">0</div>
                    <p class="text-blue-300">Proyectos Completados</p>
                </div>
            </div>

            <!-- Proyectos Activos -->
            <div class="bg-[#001144] rounded-xl p-6 transform hover:scale-105 transition-all duration-300 border border-blue-900/50 hover:border-blue-500/50 group">
                <div class="text-center">
                    <div class="inline-block p-4 rounded-full bg-purple-500/10 group-hover:bg-purple-500/20 transition-all duration-300 mb-4">
                        <i class="fas fa-cogs text-3xl text-purple-400"></i>
                    </div>
                    <div class="counter text-4xl font-bold text-white mb-2" data-target="45">0</div>
                    <p class="text-blue-300">Proyectos Activos</p>
                </div>
            </div>

            <!-- Clientes Satisfechos -->
            <div class="bg-[#001144] rounded-xl p-6 transform hover:scale-105 transition-all duration-300 border border-blue-900/50 hover:border-blue-500/50 group">
                <div class="text-center">
                    <div class="inline-block p-4 rounded-full bg-cyan-500/10 group-hover:bg-cyan-500/20 transition-all duration-300 mb-4">
                        <i class="fas fa-smile text-3xl text-cyan-400"></i>
                    </div>
                    <div class="counter text-4xl font-bold text-white mb-2" data-target="98">0</div>
                    <p class="text-blue-300">% Clientes Satisfechos</p>
                </div>
            </div>

            <!-- Reconocimientos -->
            <div class="bg-[#001144] rounded-xl p-6 transform hover:scale-105 transition-all duration-300 border border-blue-900/50 hover:border-blue-500/50 group">
                <div class="text-center">
                    <div class="inline-block p-4 rounded-full bg-green-500/10 group-hover:bg-green-500/20 transition-all duration-300 mb-4">
                        <i class="fas fa-award text-3xl text-green-400"></i>
                    </div>
                    <div class="counter text-4xl font-bold text-white mb-2" data-target="25">0</div>
                    <p class="text-blue-300">Reconocimientos</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Timeline Section -->
<div class="bg-[#000033] py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl mb-2">Línea del Tiempo de Proyectos</h2>
            <div class="w-24 h-1 bg-blue-500 mx-auto"></div>
        </div>

        <div class="relative">
            <!-- Timeline Line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-500"></div>

            <!-- Timeline Items -->
            <div class="space-y-16">
                @php
                    $timelineProjects = [
                        [
                            'year' => '2022',
                            'title' => 'Robot Asistente de Última Generación',
                            'description' => 'Desarrollo de un robot asistente avanzado con IA para entornos hospitalarios.',
                            'status' => 'En Desarrollo',
                            'image' => 'image/ai-generated-8124241_1280.jpg',
                            'position' => 'right'
                        ],
                        [
                            'year' => '2023',
                            'title' => 'Sistema de Navegación Autónoma',
                            'description' => 'Implementación de algoritmos avanzados de navegación para robots móviles.',
                            'status' => 'Completado',
                            'image' => 'image/ai-generated-8124241_1280.jpg',
                            'position' => 'left'
                        ],
                        [
                            'year' => '2024',
                            'title' => 'Plataforma IoT para Robótica',
                            'description' => 'Desarrollo de una plataforma integral para la gestión de robots conectados.',
                            'status' => 'Completado',
                            'image' => 'image/ai-generated-8124241_1280.jpg',
                            'position' => 'right'
                        ]
                    ];
                @endphp

                @foreach($timelineProjects as $project)
                    <div class="relative" data-aos="{{ $project['position'] === 'right' ? 'fade-left' : 'fade-right' }}" data-aos-duration="1000">
                        <div class="flex items-center justify-center">
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-blue-500 rounded-full z-10 shadow-glow"></div>
                        </div>
                        
                        <div class="flex {{ $project['position'] === 'right' ? 'justify-start pl-8 md:pl-[52%]' : 'justify-end pr-8 md:pr-[52%]' }}">
                            <div class="bg-[#001133] rounded-lg shadow-xl p-6 border border-blue-900 hover:border-blue-500 transition-all duration-300 w-full md:w-96 hover:shadow-[0_0_20px_rgba(0,255,255,0.2)]">
                                <div class="text-blue-400 text-sm font-semibold mb-2">{{ $project['year'] }}</div>
                                <h3 class="text-xl font-bold text-white mb-3">{{ $project['title'] }}</h3>
                                <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-48 object-cover rounded-lg mb-4">
                                <p class="text-blue-200 mb-4">{{ $project['description'] }}</p>
                                <div class="inline-block px-3 py-1 rounded-full {{ $project['status'] === 'Completado' ? 'bg-green-900/50 text-green-400' : 'bg-blue-900/50 text-blue-400' }} text-sm font-semibold">
                                    {{ $project['status'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Join Our Team Section -->
<div class="bg-gradient-to-br from-[#000033] via-[#000066] to-[#330066] py-24 relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-500/20 rounded-full filter blur-3xl"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-purple-500/20 rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold text-white mb-6 animate-fade-in">¡Únete a Nuestro Equipo!</h2>
        <p class="text-xl text-blue-200 mb-8 max-w-2xl mx-auto animate-fade-in-up">¿Tienes una propuesta innovadora o deseas ser parte de nuestro equipo? Estamos en búsqueda constante de talento apasionado por la robótica y la tecnología.</p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center animate-fade-in-up">
            <a href="{{ route('contacto') }}" class="inline-flex items-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg hover:shadow-blue-500/50 group">
                <span>Postula tu Propuesta</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
            <a href="{{ route('contacto') }}" class="inline-flex items-center px-8 py-4 border-2 border-blue-400 hover:border-blue-300 text-blue-400 hover:text-blue-300 font-semibold rounded-lg transition-all duration-300 transform hover:scale-105">
                Únete al Equipo
            </a>
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