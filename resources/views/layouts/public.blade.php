<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - Robotica Movil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="flex flex-col min-h-full">

<header>
    <nav class="fixed top-0 left-0 right-0 z-50 bg-blue-800 shadow-lg">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <a href="{{ route('inicio') }}" class="text-xl font-semibold text-white tracking-tight group flex items-center hover:text-blue-200 transition-all duration-300">
                        <i class="fa-solid fa-robot transform group-hover:scale-115 transition-transform duration-300 mr-3"></i>
                        <span class="transform group-hover:scale-105 transition-transform duration-300">Robótica Móvil</span>
                    </a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" onclick="toggleMobileMenu()" class="text-gray-200 hover:text-white focus:outline-none focus:text-white">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>
                <!-- Desktop menu -->
                <div class="hidden md:flex items-center space-x-2 lg:space-x-6">
                    <a href="{{ route('inicio') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-colors">Inicio</a>
                    <a href="{{ route('nosotros') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-colors">Sobre Nosotros</a>
                    <a href="{{ route('proyectos') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-colors">Proyectos</a>
                    <a href="{{ route('publicaciones') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-colors">Publicaciones</a>
                    <a href="{{ route('eventos') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-colors">Eventos</a>
                    <a href="{{ route('colaboraciones') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-colors">Colaboraciones</a>
                    <a href="{{ route('contacto') }}" class="px-2 md:px-3 py-2 text-sm font-medium text-gray-200 hover:text-white transition-colors">Contacto</a>
                </div>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-blue-800 rounded-b-lg shadow-lg">
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

<footer class="bg-blue-900 text-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8">
            <div class="space-y-4">
                <h3 class="text-lg font-semibold">Robótica Móvil</h3>
                <p class="text-sm text-gray-300">Centro de Investigación en Robótica Móvil y Sistemas Autónomos</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors"><i class="fab fa-linkedin text-xl"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors"><i class="fab fa-twitter text-xl"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors"><i class="fab fa-github text-xl"></i></a>
                </div>
            </div>
            <div class="space-y-4">
                <h3 class="text-sm font-semibold">Enlaces Institucionales</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('inicio') }}" class="text-sm text-gray-300 hover:text-white transition-colors">Inicio</a></li>
                    <li><a href="{{ route('nosotros') }}" class="text-sm text-gray-300 hover:text-white transition-colors">Sobre Nosotros</a></li>
                    <li><a href="{{ route('proyectos') }}" class="text-sm text-gray-300 hover:text-white transition-colors">Proyectos</a></li>
                </ul>
            </div>
            <div class="space-y-4">
                <h3 class="text-sm font-semibold">Recursos</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('publicaciones') }}" class="text-sm text-gray-300 hover:text-white transition-colors">Publicaciones</a></li>
                    <li><a href="{{ route('eventos') }}" class="text-sm text-gray-300 hover:text-white transition-colors">Eventos</a></li>
                    <li><a href="{{ route('colaboraciones') }}" class="text-sm text-gray-300 hover:text-white transition-colors">Colaboraciones</a></li>
                </ul>
            </div>
            <div class="space-y-4">
                <h3 class="text-sm font-semibold">Contacto</h3>
                <ul class="space-y-3">
                    <li class="text-sm text-gray-300 flex items-center"><i class="fas fa-envelope mr-2"></i> info@roboticamovil.com</li>
                    <li class="text-sm text-gray-300 flex items-center"><i class="fas fa-phone mr-2"></i> +52 222 222 2222</li>
                    <li class="text-sm text-gray-300 flex items-center"><i class="fas fa-map-marker-alt mr-2"></i> Puebla, México</li>
                </ul>
            </div>
        </div>
        <div class="mt-8 pt-8 border-t border-blue-800">
            <p class="text-sm text-gray-300 text-center">© 2024 Centro de Investigación en Robótica Móvil. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
}
</script>
</body>
</html>