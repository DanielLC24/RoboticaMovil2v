@extends('layouts.public')

@section('titulo', 'Publicaciones - Robótica Móvil')

@section('contenido')
<!-- Hero Section with Animated Gradient -->
<div class="relative bg-gradient-to-br from-[#000033] via-[#000066] to-[#330066] animate-gradient py-20 sm:py-32 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iZ3JpZCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNIDQwIDAgTCAwIDAgMCA0MCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMjkyNTI0IiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-10"></div>
    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl mb-6 glow-text">Publicaciones Científicas</h1>
            <p class="mt-6 text-lg leading-8 text-cyan-100 animate-fade-in">Centro de excelencia en investigación y desarrollo de robótica móvil.</p>
        </div>
    </div>
</div>

<!-- Featured Publications Section -->
<div class="relative bg-[#000044] py-24 sm:py-32 shadow-inner">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center mb-12 animate-fade-in">
            <h2 class="text-base font-semibold leading-7 text-cyan-400">Investigación de Alto Impacto</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl glow-text">Publicaciones Destacadas</p>
        </div>

        <!-- Featured Publications Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
            <!-- Featured Publication 1 -->
            <div class="bg-[#001133] shadow-xl rounded-lg p-8 border border-[#004466] hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300 hover:-translate-y-2 animate-fade-in-up">
                <div class="flex items-center justify-between mb-6">
                    <span class="px-4 py-2 bg-cyan-900/30 rounded-full text-sm font-semibold text-cyan-300">Nature Robotics</span>
                    <span class="text-cyan-400">Impact Factor: 15.2</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Autonomous Navigation in Dynamic Social Environments</h3>
                <p class="text-cyan-100 mb-6">A breakthrough in social-aware navigation algorithms for mobile robots using advanced deep learning techniques and real-time human behavior prediction.</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="flex -space-x-2">
                            <img class="w-10 h-10 rounded-full border-2 border-cyan-500" src="https://ui-avatars.com/api/?name=John+Doe" alt="Author 1">
                            <img class="w-10 h-10 rounded-full border-2 border-cyan-500" src="https://ui-avatars.com/api/?name=Jane+Smith" alt="Author 2">
                        </div>
                        <span class="text-cyan-300">+3 authors</span>
                    </div>
                    <a href="#" class="text-cyan-400 hover:text-cyan-300 font-medium group">Ver publicación <span class="group-hover:translate-x-1 inline-block transition-transform">→</span></a>
                </div>
            </div>

            <!-- Featured Publication 2 -->
            <div class="bg-[#000055] shadow-lg rounded-lg p-8 border border-cyan-500/30 hover:border-cyan-400 transition-all duration-300 hover:shadow-cyan-500/20 hover:shadow-xl transform hover:-translate-y-1">
                <div class="flex items-center justify-between mb-6">
                    <span class="px-4 py-2 bg-cyan-900/30 rounded-full text-sm font-semibold text-cyan-300">Science Robotics</span>
                    <span class="text-cyan-400">Impact Factor: 12.8</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Swarm Intelligence in Multi-Robot Systems</h3>
                <p class="text-cyan-100 mb-6">Revolutionary approach to distributed decision-making in robot swarms using quantum-inspired algorithms and emergent behavior patterns.</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="flex -space-x-2">
                            <img class="w-10 h-10 rounded-full border-2 border-cyan-500" src="https://ui-avatars.com/api/?name=Maria+Garcia" alt="Author 1">
                            <img class="w-10 h-10 rounded-full border-2 border-cyan-500" src="https://ui-avatars.com/api/?name=Carlos+Rodriguez" alt="Author 2">
                        </div>
                        <span class="text-cyan-300">+4 authors</span>
                    </div>
                    <a href="#" class="text-cyan-400 hover:text-cyan-300 font-medium group">Ver publicación <span class="group-hover:translate-x-1 inline-block transition-transform">→</span></a>
                </div>
            </div>
        </div>

        <!-- Publication Categories -->
        <div class="flex justify-center gap-4 mb-12">
            <button class="px-6 py-2 rounded-full bg-cyan-600 text-white font-medium hover:bg-cyan-500 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/20 transform hover:-translate-y-0.5">Todos</button>
            <button class="px-6 py-2 rounded-full bg-[#000066] text-cyan-300 font-medium hover:bg-[#000088] transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/20 transform hover:-translate-y-0.5">Journals</button>
            <button class="px-6 py-2 rounded-full bg-[#000066] text-cyan-300 font-medium hover:bg-[#000088] transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/20 transform hover:-translate-y-0.5">Conferencias</button>
        </div>

        <!-- Publications Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @for ($i = 1; $i <= 6; $i++)
            <div class="bg-[#000055] shadow-md rounded-lg p-6 border border-cyan-500/30 hover:border-cyan-400 transition-all duration-300 hover:shadow-cyan-500/20 hover:shadow-xl transform hover:-translate-y-1">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-sm text-cyan-300">{{ date('Y') - rand(0, 3) }}</span>
                    <span class="px-3 py-1 text-xs rounded-full bg-cyan-900/30 text-cyan-300 font-medium">Journal</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Título de la Publicación {{ $i }}</h3>
                <p class="text-cyan-100 text-sm mb-4">Descripción breve de la publicación y sus principales hallazgos o contribuciones al campo de la robótica móvil.</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <img class="w-8 h-8 rounded-full border border-cyan-500" src="https://ui-avatars.com/api/?name=Author+{{ $i }}" alt="Author">
                        <span class="text-sm text-cyan-300">Autor Principal</span>
                    </div>
                    <a href="#" class="text-cyan-400 hover:text-cyan-300 font-medium text-sm group">Leer más <span class="group-hover:translate-x-1 inline-block transition-transform">→</span></a>
                </div>
            </div>
            @endfor
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="px-8 py-3 bg-cyan-600 text-white font-semibold rounded-full hover:bg-cyan-500 transition-all duration-300 hover:shadow-lg hover:shadow-cyan-500/20 transform hover:-translate-y-0.5">
                Cargar Más Publicaciones
            </button>
        </div>
    </div>
</div>

<style>
.animate-gradient {
    background-size: 200% 200%;
    animation: gradient 15s ease infinite;
}

@keyframes gradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.glow-text {
    text-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
}

.animate-fade-in {
    animation: fadeIn 1s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

@endsection