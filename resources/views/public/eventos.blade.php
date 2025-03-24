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

<!-- Calendario de Eventos Section -->
<div class="bg-[#000033] py-24 sm:py-32 shadow-inner">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center mb-16 animate-fade-in">
            <h2 class="text-base font-semibold leading-7 text-[#00FFFF]">Planifica tu Asistencia</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl glow-text">Calendario de Eventos</p>
            <div class="w-16 h-1 bg-[#00FFFF] mx-auto my-4"></div>
            <p class="mt-6 text-lg leading-8 text-cyan-100 max-w-2xl mx-auto">Consulta nuestro calendario completo y organiza tu agenda para no perderte ninguna actividad</p>
        </div>

        <!-- Calendar Grid -->
        <div class="bg-[#001133] shadow-xl rounded-lg overflow-hidden border border-[#004466] hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300 animate-fade-in-up">
            <div class="p-6 border-b border-[#004466]">
                <div class="flex justify-between items-center">
                    <button class="text-[#00FFFF] hover:text-cyan-300 transition-colors">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <h3 class="text-xl font-semibold text-white">Enero 2024</h3>
                    <button class="text-[#00FFFF] hover:text-cyan-300 transition-colors">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <!-- Days of Week -->
                <div class="grid grid-cols-7 gap-2 mb-4">
                    <div class="text-center text-sm font-medium text-cyan-400">Dom</div>
                    <div class="text-center text-sm font-medium text-cyan-400">Lun</div>
                    <div class="text-center text-sm font-medium text-cyan-400">Mar</div>
                    <div class="text-center text-sm font-medium text-cyan-400">Mié</div>
                    <div class="text-center text-sm font-medium text-cyan-400">Jue</div>
                    <div class="text-center text-sm font-medium text-cyan-400">Vie</div>
                    <div class="text-center text-sm font-medium text-cyan-400">Sáb</div>
                </div>
                <!-- Calendar Grid -->
                <div class="grid grid-cols-7 gap-2">
                    <!-- Previous Month -->
                    <div class="text-center py-2 text-gray-500">31</div>
                    <!-- Current Month -->
                    <div class="text-center py-2 text-gray-300">1</div>
                    <div class="text-center py-2 text-gray-300">2</div>
                    <div class="text-center py-2 text-gray-300">3</div>
                    <div class="text-center py-2 text-gray-300">4</div>
                    <div class="text-center py-2 text-gray-300">5</div>
                    <div class="text-center py-2 text-gray-300">6</div>
                    <div class="text-center py-2 text-gray-300">7</div>
                    <div class="text-center py-2 text-gray-300">8</div>
                    <div class="text-center py-2 text-gray-300">9</div>
                    <div class="text-center py-2 text-gray-300">10</div>
                    <div class="text-center py-2 text-gray-300">11</div>
                    <div class="text-center py-2 text-gray-300">12</div>
                    <div class="text-center py-2 text-gray-300">13</div>
                    <div class="text-center py-2 text-gray-300">14</div>
                    <div class="text-center py-2 rounded-full bg-gradient-to-br from-blue-600 to-cyan-500 text-white font-bold relative group">
                        15
                        <span class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-[#001133] text-[#00FFFF] text-xs rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Simposio Internacional</span>
                    </div>
                    <div class="text-center py-2 text-gray-300">16</div>
                    <div class="text-center py-2 text-gray-300">17</div>
                    <div class="text-center py-2 text-gray-300">18</div>
                    <div class="text-center py-2 text-gray-300">19</div>
                    <div class="text-center py-2 text-gray-300">20</div>
                    <div class="text-center py-2 text-gray-300">21</div>
                    <div class="text-center py-2 text-gray-300">22</div>
                    <div class="text-center py-2 text-gray-300">23</div>
                    <div class="text-center py-2 text-gray-300">24</div>
                    <div class="text-center py-2 text-gray-300">25</div>
                    <div class="text-center py-2 text-gray-300">26</div>
                    <div class="text-center py-2 text-gray-300">27</div>
                    <div class="text-center py-2 text-gray-300">28</div>
                    <div class="text-center py-2 text-gray-300">29</div>
                    <div class="text-center py-2 text-gray-300">30</div>
                    <div class="text-center py-2 text-gray-300">31</div>
                    <!-- Next Month -->
                    <div class="text-center py-2 text-gray-500">1</div>
                    <div class="text-center py-2 text-gray-500">2</div>
                    <div class="text-center py-2 text-gray-500">3</div>
                </div>
            </div>
            <div class="p-6 border-t border-[#004466] flex justify-center">
                <a href="#" class="inline-flex items-center text-[#00FFFF] hover:text-cyan-300 transition-colors">
                    Ver todos los eventos <i class="fas fa-calendar-alt ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Testimonios Section -->
<div class="bg-[#000055] py-24 sm:py-32 shadow-inner relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iZ3JpZCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNIDQwIDAgTCAwIDAgMCA0MCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjkyNTI0IiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-10"></div>
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-purple-400 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-1/2 -left-24 w-80 h-80 bg-blue-600 rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center mb-16 animate-fade-in">
            <h2 class="text-base font-semibold leading-7 text-[#00FFFF]">Experiencias Compartidas</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl glow-text">Testimonios de Participantes</p>
            <div class="w-16 h-1 bg-[#00FFFF] mx-auto my-4"></div>
            <p class="mt-6 text-lg leading-8 text-cyan-100 max-w-2xl mx-auto">Descubre lo que opinan quienes han asistido a nuestros eventos</p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-[#001133]/80 backdrop-blur-sm shadow-xl rounded-lg p-8 border border-[#004466] hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300 animate-fade-in-up relative overflow-hidden">
                <div class="absolute -top-6 -right-6 w-12 h-12 text-5xl text-[#00FFFF]/20">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="mb-6">
                    <div class="flex items-center space-x-1 mb-1">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>
                <p class="text-cyan-100 mb-6 italic">"El Simposio Internacional de Robótica superó todas mis expectativas. Las conferencias fueron de altísimo nivel y tuve la oportunidad de establecer contactos con investigadores de todo el mundo."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">MR</span>
                    </div>
                    <div>
                        <h4 class="text-[#00FFFF] font-semibold">Dr. Miguel Rodríguez</h4>
                        <p class="text-sm text-cyan-200">Investigador, Universidad de Barcelona</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-[#001133]/80 backdrop-blur-sm shadow-xl rounded-lg p-8 border border-[#004466] hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300 animate-fade-in-up relative overflow-hidden" style="animation-delay: 0.2s;">
                <div class="absolute -top-6 -right-6 w-12 h-12 text-5xl text-[#00FFFF]/20">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="mb-6">
                    <div class="flex items-center space-x-1 mb-1">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>
                <p class="text-cyan-100 mb-6 italic">"El taller de programación de robots fue una experiencia increíble. Los instructores eran expertos en la materia y el enfoque práctico me permitió aplicar inmediatamente lo aprendido en mi proyecto de investigación."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">LG</span>
                    </div>
                    <div>
                        <h4 class="text-[#00FFFF] font-semibold">Laura Gómez</h4>
                        <p class="text-sm text-cyan-200">Estudiante de Doctorado, UNAM</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-[#001133]/80 backdrop-blur-sm shadow-xl rounded-lg p-8 border border-[#004466] hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300 animate-fade-in-up relative overflow-hidden" style="animation-delay: 0.4s;">
                <div class="absolute -top-6 -right-6 w-12 h-12 text-5xl text-[#00FFFF]/20">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="mb-6">
                    <div class="flex items-center space-x-1 mb-1">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star-half-alt text-yellow-400"></i>
                    </div>
                </div>
                <p class="text-cyan-100 mb-6 italic">"El Hackathon de Robótica fue una experiencia transformadora. La energía del evento, la calidad de los mentores y la oportunidad de trabajar con tecnología de punta hicieron que valiera cada minuto de las 48 horas."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">JM</span>
                    </div>
                    <div>
                        <h4 class="text-[#00FFFF] font-semibold">Javier Méndez</h4>
                        <p class="text-sm text-cyan-200">Estudiante de Ingeniería, ITESM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection