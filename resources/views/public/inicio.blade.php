@extends('layouts.public')

@section('titulo', 'Inicio - Robótica Móvil')

@section('contenido')
<style>
.text-shadow-glow {
    text-shadow: 0 0 10px rgba(230, 243, 255, 0.5);
}
.card-glow:hover {
    box-shadow: 0 0 25px rgba(0, 255, 255, 0.4);
}
@keyframes gradient-x {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
.animate-gradient-x {
    background-size: 200% 200%;
    animation: gradient-x 15s ease infinite;
}
.animate-fade-in {
    animation: fade-in 1s ease-out;
}
.animate-fade-in-up {
    animation: fade-in-up 1s ease-out;
    animation-fill-mode: both;
}
@keyframes fade-in {
    0% { opacity: 0; }
    100% { opacity: 1; }
}
@keyframes fade-in-up {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
#particles-js {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 1;
}
</style>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    particlesJS('particles-js', {
        particles: {
            number: { value: 100, density: { enable: true, value_area: 800 } },
            color: { value: ['#00FF00', '#00FFFF', '#FF00FF'] },
            shape: {
                type: ['circle', 'triangle', 'polygon'],
                polygon: { nb_sides: 6 }
            },
            opacity: {
                value: 0.6,
                random: true,
                anim: {
                    enable: true,
                    speed: 1,
                    opacity_min: 0.1,
                    sync: false
                }
            },
            size: {
                value: 4,
                random: true,
                anim: {
                    enable: true,
                    speed: 2,
                    size_min: 0.1,
                    sync: false
                }
            },
            line_linked: {
                enable: true,
                distance: 150,
                color: '#00FFFF',
                opacity: 0.4,
                width: 1,
                shadow: {
                    enable: true,
                    color: '#00FFFF',
                    blur: 5
                }
            },
            move: {
                enable: true,
                speed: 3,
                direction: 'none',
                random: true,
                straight: false,
                out_mode: 'bounce',
                bounce: true,
                attract: {
                    enable: true,
                    rotateX: 600,
                    rotateY: 1200
                }
            }
        },
        interactivity: {
            detect_on: 'canvas',
            events: {
                onhover: {
                    enable: true,
                    mode: ['grab', 'bubble']
                },
                onclick: {
                    enable: true,
                    mode: 'push'
                },
                resize: true
            },
            modes: {
                grab: {
                    distance: 140,
                    line_linked: {
                        opacity: 0.8
                    }
                },
                bubble: {
                    distance: 200,
                    size: 6,
                    duration: 2,
                    opacity: 0.8,
                    speed: 3
                },
                push: {
                    particles_nb: 4
                }
            }
        },
        retina_detect: true
    });
});
</script>
<!-- Hero Section with Clean Design -->
<div class="relative isolate overflow-hidden bg-gradient-to-br from-[#000033] via-[#000066] to-[#330066] min-h-screen animate-gradient-x">
    <div id="particles-js"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z" fill="rgba(255,255,255,0.07)"%3E%3C/path%3E%3C/svg%3E')] opacity-25"></div>
    
    <div class="relative z-10 mx-auto max-w-7xl px-6 pt-20 pb-24 sm:pb-32 lg:flex lg:px-8 lg:py-15">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">
            <div class="mt-24 sm:mt-32 lg:mt-16">
                <a href="#" class="inline-flex items-center space-x-6">
                    <span class="rounded-full bg-blue-100 px-3 py-1 text-sm font-semibold leading-6 text-blue-900">Últimas Novedades</span>
                </a>
            </div>
            <h1 class="mt-10 text-4xl font-bold tracking-tight text-[#E6F3FF] sm:text-6xl animate-fade-in text-shadow-glow">Robótica Móvil version 3<span id="typed-title" class="bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent animate-pulse">Avanzada</span></h1>
            <p class="mt-6 text-lg leading-8 text-[#B3E0FF]">Descubre el futuro de la robótica móvil. Exploramos las últimas tecnologías en robots autónomos, sistemas de navegación y control inteligente.</p>
            <div class="mt-10 flex items-center gap-x-6 animate-fade-in-up">
                <a href="#" class="rounded-md bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 transition-colors duration-300">
                    Comenzar Ahora
                </a>
                <a href="#" class="text-sm font-semibold leading-6 text-white hover:text-blue-400 transition-colors duration-300">
                    Saber más <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Feature Section with Clean Cards -->
<div class="relative bg-[#000022] py-24 sm:py-32 shadow-inner">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-[#00FFFF]">Tecnología Avanzada</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Todo lo que necesitas sobre <span class="text-[#00FFFF]">robótica móvil</span></p>
            <p class="mt-6 text-lg leading-8 text-[#B3E0FF]">Explora nuestras áreas de especialización en robótica móvil y descubre cómo estamos transformando el futuro de la automatización.</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <!-- Feature Card 1 -->
                <div class="bg-[#001133] shadow-xl rounded-lg p-8 border border-[#004466] hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300">
                    <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-[#00FFFF]">
                        <i class="fa-solid fa-robot text-[#B388FF] text-2xl"></i>
                        Robots Autónomos
                    </dt>
                    <dd class="mt-4 text-base leading-7 text-gray-300">
                        <p>Desarrollo de robots autónomos con capacidades avanzadas de navegación y toma de decisiones basadas en IA.</p>
                    </dd>
                </div>

                <!-- Feature Card 2 -->
                <div class="bg-[#001133] shadow-xl rounded-lg p-8 border border-[#004466] hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300">
                    <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-[#00FFFF]">
                        <i class="fa-solid fa-microchip text-[#B388FF] text-2xl"></i>
                        Sistemas de Control
                    </dt>
                    <dd class="mt-4 text-base leading-7 text-gray-300">
                        <p>Implementación de sistemas de control inteligente con algoritmos avanzados de optimización.</p>
                    </dd>
                </div>

                <!-- Feature Card 3 -->
                <div class="bg-[#001133] shadow-xl rounded-lg p-8 border border-[#004466] hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300">
                    <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-[#00FFFF]">
                        <i class="fa-solid fa-code text-[#B388FF] text-2xl"></i>
                        Programación Avanzada
                    </dt>
                    <dd class="mt-4 text-base leading-7 text-gray-300">
                        <p>Desarrollo de software especializado con las últimas tecnologías en IA y machine learning.</p>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<!-- Projects Section with Clean Design -->
<div class="relative bg-[#000044] py-24 sm:py-32 shadow-inner">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Proyectos Destacados</h2>
            <p class="mt-2 text-lg leading-8 text-gray-300">Descubre nuestros últimos proyectos en robótica móvil</p>
        </div>
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <!-- Project Card 1 -->
            <article class="bg-[#001133] rounded-lg shadow-xl overflow-hidden border border-transparent hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300 hover:-translate-y-2 animate-fade-in-up">
                <div class="relative aspect-[16/9]">
                    <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="Robot Project 1" class="absolute inset-0 h-full w-full object-cover">
                </div>
                <div class="p-6">
                    <time datetime="2024-03-16" class="text-sm leading-6 text-blue-600">Mar 16, 2024</time>
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-[#00FFFF]">
                        Robot Explorador Autónomo
                    </h3>
                    <p class="mt-5 text-sm leading-6 text-gray-300">Desarrollo de un robot explorador con capacidades de mapeo y navegación autónoma en terrenos desconocidos.</p>
                    <div class="mt-4 flex gap-2">
                        <span class="rounded-full bg-[#1E1E1E] border border-[#00FFFF] px-3 py-1.5 text-xs font-medium text-[#00FFFF]">Robótica</span>
                        <span class="rounded-full bg-[#1E1E1E] border border-[#00FFFF] px-3 py-1.5 text-xs font-medium text-[#00FFFF]">IA</span>
                    </div>
                </div>
            </article>

            <!-- Project Card 2 -->
            <article class="bg-[#001133] rounded-lg shadow-xl overflow-hidden border border-transparent hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300 hover:-translate-y-2 animate-fade-in-up">
                <div class="relative aspect-[16/9]">
                    <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="Robot Project 2" class="absolute inset-0 h-full w-full object-cover">
                </div>
                <div class="p-6">
                    <time datetime="2024-03-15" class="text-sm leading-6 text-blue-600">Mar 15, 2024</time>
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-[#00FFFF]">
                        Sistema de Control Inteligente
                    </h3>
                    <p class="mt-5 text-sm leading-6 text-gray-300">Implementación de un sistema de control basado en IA para optimización de movimientos robóticos.</p>
                    <div class="mt-4 flex gap-2">
                        <span class="rounded-full bg-[#1E1E1E] border border-[#00FFFF] px-3 py-1.5 text-xs font-medium text-[#00FFFF]">Control</span>
                        <span class="rounded-full bg-[#1E1E1E] border border-[#00FFFF] px-3 py-1.5 text-xs font-medium text-[#00FFFF]">ML</span>
                    </div>
                </div>
            </article>

            <!-- Project Card 3 -->
            <article class="bg-[#001133] rounded-lg shadow-xl overflow-hidden border border-transparent hover:border-[#00FFFF] hover:shadow-[0_0_20px_rgba(0,255,255,0.4)] transition-all duration-300 hover:-translate-y-2 animate-fade-in-up">
                <div class="relative aspect-[16/9]">
                    <img src="{{ asset('image/ai-generated-8124241_1280.jpg') }}" alt="Robot Project 3" class="absolute inset-0 h-full w-full object-cover">
                </div>
                <div class="p-6">
                    <time datetime="2024-03-14" class="text-sm leading-6 text-blue-600">Mar 14, 2024</time>
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-[#00FFFF]">
                        Navegación Avanzada
                    </h3>
                    <p class="mt-5 text-sm leading-6 text-gray-300">Sistema de navegación avanzada utilizando sensores y algoritmos de planificación de rutas.</p>
                    <div class="mt-4 flex gap-2">
                        <span class="rounded-full bg-[#1E1E1E] border border-[#00FFFF] px-3 py-1.5 text-xs font-medium text-[#00FFFF]">Navegación</span>
                        <span class="rounded-full bg-[#1E1E1E] border border-[#00FFFF] px-3 py-1.5 text-xs font-medium text-[#00FFFF]">Sensores</span>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

@endsection