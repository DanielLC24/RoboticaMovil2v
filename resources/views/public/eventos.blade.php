@extends('layouts.public')

@section('titulo', 'Eventos - Robótica Móvil')

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

<!-- Hero Section with Animated Gradient -->
<div class="relative bg-gradient-to-br from-[#000033] via-[#000066] to-[#330066] animate-gradient py-24 sm:py-36 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iZ3JpZCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNIDQwIDAgTCAwIDAgMCA0MCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjkyNTI0IiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-10"></div>
    <!-- Decorative elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-400 rounded-full filter blur-3xl"></div>
        <div class="absolute top-1/2 -right-24 w-80 h-80 bg-blue-600 rounded-full filter blur-3xl"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center animate-fade-in">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl mb-6 glow-text">Eventos Institucionales</h1>
            <p class="mt-6 text-lg leading-8 text-cyan-100 max-w-2xl mx-auto">Centro de excelencia en investigación y desarrollo de robótica móvil, organizando eventos de vanguardia en el campo de la robótica.</p>
        </div>
    </div>
</div>


<!-- Upcoming Events Section -->
<div class="bg-[#000022] py-24 sm:py-32 shadow-inner">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-fade-in">
            <h2 class="text-base font-semibold leading-7 text-[#00FFFF]">Calendario Institucional</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl glow-text">Próximos Eventos</p>
            <div class="w-16 h-1 bg-[#00FFFF] mx-auto my-4"></div>
        </div>

        <!-- Event Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Event Card 1 -->
            <div class="bg-[#001133] shadow-xl rounded-lg overflow-hidden border border-[#004466] hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300 animate-fade-in-up">
                <div class="relative">
                    <div class="absolute top-0 right-0 bg-gradient-to-br from-blue-600 to-cyan-500 text-white px-4 py-2 rounded-bl-lg">
                        <div class="text-sm font-bold">ENE</div>
                        <div class="text-xl font-bold">15</div>
                    </div>
                    <div class="h-48 bg-[#000055] flex items-center justify-center">
                        <div class="w-24 h-24 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-full flex items-center justify-center transform hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-robot text-4xl text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2 justify-center">
                        <span class="px-2 py-1 bg-blue-900 text-cyan-300 text-xs font-semibold rounded">Conferencia</span>
                    </div>
                    <h3 class="text-xl font-semibold text-[#00FFFF] mb-3 text-center">Simposio Internacional de Robótica 2024</h3>
                    <p class="text-cyan-100 mb-4 text-center">Únete a expertos internacionales en una jornada de conferencias sobre los últimos avances en robótica móvil.</p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-cyan-200">
                            <i class="fas fa-clock mr-2 text-[#00FFFF]"></i> 09:00 AM - 06:00 PM
                        </div>
                        <div class="flex items-center text-sm text-cyan-200">
                            <i class="fas fa-map-marker-alt mr-2 text-[#00FFFF]"></i> Centro de Convenciones, CDMX
                        </div>
                        <div class="flex items-center text-sm text-cyan-200">
                            <i class="fas fa-users mr-2 text-[#00FFFF]"></i> Cupo limitado
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-[#004466]">
                        <a href="#" class="inline-flex items-center text-[#00FFFF] hover:text-cyan-300 transition-colors">
                            Más información <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Event Card 2 -->
            <div class="bg-[#001133] shadow-xl rounded-lg overflow-hidden border border-[#004466] hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.2s;">
                <div class="relative">
                    <div class="absolute top-0 right-0 bg-gradient-to-br from-blue-600 to-cyan-500 text-white px-4 py-2 rounded-bl-lg">
                        <div class="text-sm font-bold">MAR</div>
                        <div class="text-xl font-bold">20</div>
                    </div>
                    <div class="h-48 bg-[#000055] flex items-center justify-center">
                        <div class="w-24 h-24 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-full flex items-center justify-center transform hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-cogs text-4xl text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2 justify-center">
                        <span class="px-2 py-1 bg-blue-900 text-cyan-300 text-xs font-semibold rounded">Taller</span>
                    </div>
                    <h3 class="text-xl font-semibold text-[#00FFFF] mb-3 text-center">Taller de Programación de Robots</h3>
                    <p class="text-cyan-100 mb-4 text-center">Aprende las bases de la programación de robots móviles en este taller práctico con expertos del campo.</p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-cyan-200">
                            <i class="fas fa-clock mr-2 text-[#00FFFF]"></i> 10:00 AM - 02:00 PM
                        </div>
                        <div class="flex items-center text-sm text-cyan-200">
                            <i class="fas fa-map-marker-alt mr-2 text-[#00FFFF]"></i> Laboratorio de Robótica
                        </div>
                        <div class="flex items-center text-sm text-cyan-200">
                            <i class="fas fa-users mr-2 text-[#00FFFF]"></i> 20 participantes máximo
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-[#004466]">
                        <a href="#" class="inline-flex items-center text-[#00FFFF] hover:text-cyan-300 transition-colors">
                            Más información <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Event Card 3 -->
            <div class="bg-[#001133] shadow-xl rounded-lg overflow-hidden border border-[#004466] hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.4s;">
                <div class="relative">
                    <div class="absolute top-0 right-0 bg-gradient-to-br from-blue-600 to-cyan-500 text-white px-4 py-2 rounded-bl-lg">
                        <div class="text-sm font-bold">ABR</div>
                        <div class="text-xl font-bold">05</div>
                    </div>
                    <div class="h-48 bg-[#000055] flex items-center justify-center">
                        <div class="w-24 h-24 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-full flex items-center justify-center transform hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-laptop-code text-4xl text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2 justify-center">
                        <span class="px-2 py-1 bg-blue-900 text-cyan-300 text-xs font-semibold rounded">Hackathon</span>
                    </div>
                    <h3 class="text-xl font-semibold text-[#00FFFF] mb-3 text-center">Hackathon de Robótica 2024</h3>
                    <p class="text-cyan-100 mb-4 text-center">Compite en equipos para desarrollar soluciones innovadoras en robótica móvil durante 48 horas intensivas.</p>
                    <div class="space-y-2">
                        <div class="flex items-center text-sm text-cyan-200">
                            <i class="fas fa-clock mr-2 text-[#00FFFF]"></i> 48 horas continuas
                        </div>
                        <div class="flex items-center text-sm text-cyan-200">
                            <i class="fas fa-map-marker-alt mr-2 text-[#00FFFF]"></i> Campus Principal
                        </div>
                        <div class="flex items-center text-sm text-cyan-200">
                            <i class="fas fa-users mr-2 text-[#00FFFF]"></i> 15 equipos máximo
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-[#004466]">
                        <a href="#" class="inline-flex items-center text-[#00FFFF] hover:text-cyan-300 transition-colors">
                            Más información <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Past Events Section -->
<div class="bg-[#000044] py-24 sm:py-32 shadow-inner">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center mb-16 animate-fade-in">
            <h2 class="text-base font-semibold leading-7 text-[#00FFFF]">Historia Institucional</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl glow-text">Eventos Destacados</p>
            <div class="w-16 h-1 bg-[#00FFFF] mx-auto my-4"></div>
            <p class="mt-6 text-lg leading-8 text-cyan-100 max-w-2xl mx-auto">Revive los momentos más importantes en la historia de nuestro centro de investigación</p>
        </div>

        <!-- Past Events Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
            <!-- Event 1 -->
            <div class="bg-[#001133] shadow-xl rounded-lg p-8 border border-[#004466] hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300 hover:-translate-y-2 animate-fade-in-up">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <span class="px-2 py-1 bg-blue-900 text-cyan-300 text-xs font-semibold rounded mb-2 inline-block">Conferencia</span>
                        <h3 class="text-xl font-semibold text-[#00FFFF]">Congreso Nacional de Robótica 2023</h3>
                    </div>
                    <span class="text-sm text-cyan-400 font-medium">Nov 2023</span>
                </div>
                <p class="text-cyan-100 mb-4">Reunión anual de investigadores y profesionales en el campo de la robótica, presentando los últimos avances y desarrollos en robótica móvil.</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-cyan-200">
                        <i class="fas fa-map-marker-alt mr-2 text-[#00FFFF]"></i> Universidad Nacional Autónoma de México
                    </div>
                    <div class="flex items-center text-sm text-cyan-200">
                        <i class="fas fa-users mr-2 text-[#00FFFF]"></i> 200+ asistentes
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-[#004466]">
                    <a href="#" class="inline-flex items-center text-[#00FFFF] hover:text-cyan-300 transition-colors">
                        Más información <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="bg-[#001133] shadow-xl rounded-lg p-8 border border-[#004466] hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300 hover:-translate-y-2 animate-fade-in-up" style="animation-delay: 0.2s;">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <span class="px-2 py-1 bg-blue-900 text-cyan-300 text-xs font-semibold rounded mb-2 inline-block">Workshop</span>
                        <h3 class="text-xl font-semibold text-[#00FFFF]">Workshop de Inteligencia Artificial en Robótica</h3>
                    </div>
                    <span class="text-sm text-cyan-400 font-medium">Sep 2023</span>
                </div>
                <p class="text-cyan-100 mb-4">Sesión práctica sobre la implementación de algoritmos de IA en sistemas robóticos, con demostraciones en vivo y casos de estudio.</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-cyan-200">
                        <i class="fas fa-map-marker-alt mr-2 text-[#00FFFF]"></i> Instituto Tecnológico de Monterrey
                    </div>
                    <div class="flex items-center text-sm text-cyan-200">
                        <i class="fas fa-users mr-2 text-[#00FFFF]"></i> 50 participantes
                    </div>
                </div>
                <div class="mt-4 pt-4 border-t border-[#004466]">
                    <a href="#" class="inline-flex items-center text-[#00FFFF] hover:text-cyan-300 transition-colors">
                        Más información <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection