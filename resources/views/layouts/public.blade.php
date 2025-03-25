<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - Robotica Movil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
</head>
<body class="flex flex-col min-h-full">

<header>
    <nav class="fixed top-0 left-0 right-0 z-50 bg-blue-950/95 backdrop-blur-md shadow-[0_4px_30px_rgba(0,0,0,0.2)] border-b border-white/5">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <a href="{{ route('inicio') }}" class="text-xl font-semibold text-white tracking-tight group flex items-center hover:text-blue-200 transition-all duration-300">
                        <i class="fa-solid fa-robot transform group-hover:scale-115 transition-transform duration-300 mr-3 animate-pulse text-blue-400"></i>
                        <span class="transform group-hover:scale-105 transition-transform duration-300 bg-gradient-to-r from-blue-400 to-purple-500 text-transparent bg-clip-text">Robótica Móvil</span>
                    </a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" onclick="toggleMobileMenu()" class="text-gray-200 hover:text-white focus:outline-none focus:text-white">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>
                <!-- Desktop menu -->
                <div class="hidden md:flex items-center space-x-2 lg:space-x-6 relative">
                    <a href="{{ route('inicio') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-all duration-300 hover:bg-white/10 rounded-lg relative group overflow-hidden">Inicio</a>
                    <a href="{{ route('nosotros') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-all duration-300 hover:bg-white/10 rounded-lg relative group overflow-hidden">Sobre Nosotros</a>
                    <a href="{{ route('proyectos') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-all duration-300 hover:bg-white/10 rounded-lg relative group overflow-hidden">Proyectos</a>
                    <a href="{{ route('publicaciones') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-all duration-300 hover:bg-white/10 rounded-lg relative group overflow-hidden">Publicaciones</a>
                    <a href="{{ route('eventos') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-all duration-300 hover:bg-white/10 rounded-lg relative group overflow-hidden">Eventos</a>
                    <a href="{{ route('colaboraciones') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-all duration-300 hover:bg-white/10 rounded-lg relative group overflow-hidden">Colaboraciones</a>
                    <a href="{{ route('contacto') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-all duration-300 hover:bg-white/10 rounded-lg relative group overflow-hidden flex items-center"><i class="fas fa-envelope mr-2 group-hover:scale-110 transition-transform duration-300 text-blue-400"></i>Contacto</a>
                </div>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-blue-950 rounded-b-lg shadow-lg">
                    <a href="{{ route('inicio') }}" class="block px-3 py-2 text-base font-medium text-gray-200 hover:text-white transition-colors">Inicio</a>
                    <a href="{{ route('nosotros') }}" class="block px-3 py-2 text-base font-medium text-gray-200 hover:text-white transition-colors">Sobre Nosotros</a>
                    <a href="{{ route('proyectos') }}" class="block px-3 py-2 text-base font-medium text-gray-200 hover:text-white transition-colors">Proyectos</a>
                    <a href="{{ route('publicaciones') }}" class="block px-3 py-2 text-base font-medium text-gray-200 hover:text-white transition-colors">Publicaciones</a>
                    <a href="{{ route('eventos') }}" class="block px-3 py-2 text-base font-medium text-gray-200 hover:text-white transition-colors">Eventos</a>
                    <a href="{{ route('colaboraciones') }}" class="block px-3 py-2 text-base font-medium text-gray-200 hover:text-white transition-colors">Colaboraciones</a>
                    <a href="{{ route('contacto') }}" class="block px-3 py-2 text-base font-medium text-gray-200 hover:text-white transition-colors">Contacto</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<main class="flex-grow pt-16">
    @yield('contenido')
</main>

<footer class="bg-gradient-to-br from-blue-950/95 via-blue-900/95 to-blue-950/95 text-white relative overflow-hidden before:content-[''] before:absolute before:w-full before:h-full before:bg-[radial-gradient(circle_800px_at_100%_200px,rgba(29,78,216,0.05),transparent)] before:animate-pulse">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8">
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-blue-200">Robótica Móvil</h3>
                <p class="text-sm text-gray-400">Centro de Investigación en Robótica Móvil y Sistemas Autónomos</p>
                <div class="flex space-x-4 animate-float">
                    <a href="#" class="text-gray-400 hover:text-blue-300 transition-all duration-300 hover:scale-110 transform hover:rotate-6"><i class="fab fa-linkedin text-xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-blue-300 transition-all duration-300 hover:scale-110 transform hover:rotate-6"><i class="fab fa-twitter text-xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-blue-300 transition-all duration-300 hover:scale-110 transform hover:rotate-6"><i class="fab fa-github text-xl"></i></a>
                </div>
            </div>
            <div class="space-y-4">
                <h3 class="text-sm font-semibold text-blue-200">Enlaces Institucionales</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('inicio') }}" class="text-sm text-gray-400 hover:text-blue-300 transition-colors">Inicio</a></li>
                    <li><a href="{{ route('nosotros') }}" class="text-sm text-gray-400 hover:text-blue-300 transition-colors">Sobre Nosotros</a></li>
                    <li><a href="{{ route('proyectos') }}" class="text-sm text-gray-400 hover:text-blue-300 transition-colors">Proyectos</a></li>
                </ul>
            </div>
            <div class="space-y-4">
                <h3 class="text-sm font-semibold text-blue-200">Recursos</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('publicaciones') }}" class="text-sm text-gray-400 hover:text-blue-300 transition-colors">Publicaciones</a></li>
                    <li><a href="{{ route('eventos') }}" class="text-sm text-gray-400 hover:text-blue-300 transition-colors">Eventos</a></li>
                    <li><a href="{{ route('colaboraciones') }}" class="text-sm text-gray-400 hover:text-blue-300 transition-colors">Colaboraciones</a></li>
                </ul>
            </div>
            <div class="space-y-4">
                <h3 class="text-sm font-semibold text-blue-200">Contacto</h3>
                <ul class="space-y-3">
                    <li class="text-sm text-gray-400 flex items-center group hover:text-blue-300 transition-all duration-300">
                        <i class="fas fa-envelope mr-2 group-hover:scale-110 transition-transform duration-300 text-blue-400"></i>
                        info@roboticamovil.com
                    </li>
                    <li class="text-sm text-gray-400 flex items-center group hover:text-blue-300 transition-all duration-300">
                        <i class="fas fa-phone mr-2 group-hover:scale-110 transition-transform duration-300 text-blue-400"></i>
                        +52 222 222 2222
                    </li>
                    <li class="text-sm text-gray-400 flex items-center group hover:text-blue-300 transition-all duration-300">
                        <i class="fas fa-map-marker-alt mr-2 group-hover:scale-110 transition-transform duration-300 text-blue-400"></i>
                        Puebla, México
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-8 pt-8 border-t border-blue-800/30">
            <p class="text-sm text-gray-400 text-center">© 2024 Centro de Investigación en Robótica Móvil. Todos los derechos reservados.</p>
        </div>
    </div>
<style>
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
</style>
</footer>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
}
</script>
</body>
</html>