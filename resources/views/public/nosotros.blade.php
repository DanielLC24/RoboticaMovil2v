@extends('layouts.public')

@section('titulo', 'Nosotros - Robótica Móvil')

@section('contenido')
<!-- Hero Section -->
<div class="relative bg-[#001233] py-24 sm:py-36 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-blue-950 to-blue-900 opacity-80"></div>
    <!-- Decorative elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-400 rounded-full filter blur-3xl"></div>
        <div class="absolute top-1/2 -right-24 w-80 h-80 bg-blue-600 rounded-full filter blur-3xl"></div>
    </div>
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl mb-6">Centro de Investigación en<br>Robótica Móvil</h1>
            <p class="mt-6 text-lg leading-8 text-blue-100 max-w-2xl mx-auto">Liderando la innovación en robótica móvil y sistemas autónomos desde hace más de una década, estableciendo estándares de excelencia en investigación y desarrollo tecnológico.</p>
        </div>
    </div>
</div>

<!-- Mission and Vision Section -->
<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Nuestra Identidad</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Misión y Visión</p>
            <div class="w-16 h-1 bg-blue-600 mx-auto my-4"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
            <!-- Mission Statement -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 flex flex-col h-full">
                <div class="mx-auto w-full text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-blue-600 mb-6">
                        <i class="fas fa-robot text-2xl text-white"></i>
                    </div>
                    <h2 class="text-xl font-semibold leading-7 text-blue-900">Nuestra Misión</h2>
                    <p class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Excelencia en Investigación y Desarrollo</p>
                    <div class="w-12 h-1 bg-blue-600 mx-auto my-4"></div>
                    <p class="mt-6 text-lg leading-8 text-gray-700">Nos dedicamos a la investigación avanzada en robótica móvil, formando la próxima generación de expertos y desarrollando soluciones tecnológicas que transforman la industria.</p>
                </div>
            </div>

            <!-- Vision Statement -->
            <div class="bg-gradient-to-br from-blue-700 to-blue-900 p-8 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 flex flex-col h-full">
                <div class="mx-auto w-full text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-blue-200 mb-6">
                        <i class="fas fa-microchip text-2xl text-blue-800"></i>
                    </div>
                    <h2 class="text-xl font-semibold leading-7 text-blue-100">Nuestra Visión</h2>
                    <p class="mt-2 text-2xl font-bold tracking-tight text-white sm:text-3xl">Liderando el Futuro de la Robótica</p>
                    <div class="w-12 h-1 bg-blue-200 mx-auto my-4"></div>
                    <p class="mt-6 text-lg leading-8 text-blue-100">Aspiramos a ser un referente mundial en innovación robótica, impulsando avances tecnológicos que transformen la sociedad y mejoren la vida de las personas a través de soluciones robóticas inteligentes y sostenibles.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Research Areas Section -->
<div class="bg-gradient-to-b from-gray-50 to-gray-100 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center mb-16">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Especialización</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Áreas de Investigación</p>
            <div class="w-16 h-1 bg-blue-600 mx-auto my-4"></div>
            <p class="mt-6 text-lg leading-8 text-gray-600 max-w-2xl mx-auto">Nuestras líneas de investigación principales están enfocadas en el desarrollo de tecnologías robóticas avanzadas</p>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl border-b-4 border-blue-600 transition-all duration-300 flex flex-col h-full">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <i class="fas fa-robot text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Navegación Autónoma</h3>
                <p class="text-gray-600 text-center">Desarrollo de sistemas avanzados de navegación y mapeo para entornos complejos y dinámicos.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl border-b-4 border-blue-600 transition-all duration-300 flex flex-col h-full">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <i class="fas fa-microchip text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Inteligencia Artificial</h3>
                <p class="text-gray-600 text-center">Implementación de sistemas de IA para optimización y toma de decisiones en tiempo real.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl border-b-4 border-blue-600 transition-all duration-300 flex flex-col h-full">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <i class="fas fa-network-wired text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Sistemas Multi-Robot</h3>
                <p class="text-gray-600 text-center">Investigación en coordinación y colaboración entre sistemas robóticos para tareas complejas.</p>
            </div>
        </div>
    </div>
</div>

<!-- Faculty Directors Section -->
<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center mb-16">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Dirección Académica</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Liderazgo y Visión</p>
            <div class="w-16 h-1 bg-blue-600 mx-auto my-4"></div>
            <p class="mt-6 text-lg leading-8 text-gray-600 max-w-2xl mx-auto">Nuestros directores académicos lideran la innovación y el desarrollo en robótica móvil con experiencia y visión de futuro.</p>
        </div>

        <div class="flex justify-center">
            <!-- Director Profile Card - Centered and Enhanced -->
            <div class="group relative bg-gradient-to-br from-white to-blue-50 p-10 rounded-xl shadow-lg hover:shadow-2xl border-b-4 border-blue-600 transition-all duration-300 max-w-xl transform hover:-translate-y-2">
                <div class="flex flex-col items-center">
                    <div class="h-40 w-40 rounded-full bg-gradient-to-br from-blue-700 via-blue-800 to-blue-900 flex items-center justify-center mb-8 group-hover:scale-105 transition-transform duration-300 shadow-lg">
                        <i class="fas fa-user text-5xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Dr. Rubin</h3>
                    <div class="w-24 h-1 bg-blue-600 mx-auto my-3"></div>
                    <p class="text-blue-700 text-lg font-semibold mb-4">Director de Investigación</p>
                    <p class="text-gray-700 text-center mb-6 text-lg">Especialista en sistemas de navegación autónoma con más de 15 años de experiencia en el campo. Líder visionario en el desarrollo de tecnologías robóticas avanzadas.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors"><i class="fab fa-linkedin text-2xl"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors"><i class="fas fa-envelope text-2xl"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors"><i class="fas fa-globe text-2xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Engineers Section -->
<div class="bg-gradient-to-b from-gray-50 to-gray-100 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center mb-16">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Ingenieros Investigadores</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Experiencia y Conocimiento</p>
            <div class="w-16 h-1 bg-blue-600 mx-auto my-4"></div>
            <p class="mt-6 text-lg leading-8 text-gray-600 max-w-2xl mx-auto">Nuestros ingenieros son expertos en sus campos, dedicados a la investigación y desarrollo de tecnologías robóticas avanzadas.</p>
        </div>

        <div class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Engineer Profile Card -->
            <div class="group relative bg-white p-8 rounded-xl shadow-md hover:shadow-xl border-b-4 border-transparent hover:border-blue-600 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <div class="h-32 w-32 rounded-full bg-gradient-to-br from-blue-700 to-blue-800 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-user text-4xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Ing. Carlos García</h3>
                    <p class="text-blue-600 mb-4">Ingeniero de Sistemas Robóticos</p>
                    <p class="text-gray-600 text-center mb-6">Especialista en desarrollo de software para sistemas robóticos y algoritmos de control.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-github text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-linkedin text-xl"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Engineer Profile Card -->
            <div class="group relative bg-white p-8 rounded-xl shadow-md hover:shadow-xl border-b-4 border-transparent hover:border-blue-600 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <div class="h-32 w-32 rounded-full bg-gradient-to-br from-blue-700 to-blue-800 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-user text-4xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Ing. Laura Sánchez</h3>
                    <p class="text-blue-600 mb-4">Ingeniera de Hardware Robótico</p>
                    <p class="text-gray-600 text-center mb-6">Especializada en diseño y desarrollo de componentes electrónicos para sistemas robóticos avanzados.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-github text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-linkedin text-xl"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Engineer Profile Card -->
            <div class="group relative bg-white p-8 rounded-xl shadow-md hover:shadow-xl border-b-4 border-transparent hover:border-blue-600 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <div class="h-32 w-32 rounded-full bg-gradient-to-br from-blue-700 to-blue-800 flex items-center justify-center mb-6 group-hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-user text-4xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Ing. Miguel Rodríguez</h3>
                    <p class="text-blue-600 mb-4">Ingeniero de IA y Aprendizaje Automático</p>
                    <p class="text-gray-600 text-center mb-6">Desarrollador de algoritmos de aprendizaje profundo para sistemas de percepción robótica.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-github text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-linkedin text-xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Students Section -->
<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center mb-16">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Estudiantes Investigadores</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">El Futuro de la Robótica</p>
            <div class="w-16 h-1 bg-blue-600 mx-auto my-4"></div>
            <p class="mt-6 text-lg leading-8 text-gray-600 max-w-2xl mx-auto">Nuestros estudiantes son la próxima generación de innovadores en robótica móvil, aportando ideas frescas y perspectivas únicas.</p>
        </div>

        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Student Profile Card -->
            <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl border-b-4 border-transparent hover:border-blue-600 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-blue-700 rounded-full flex items-center justify-center mb-4 group-hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-user text-2xl text-white"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Daniel Lopez</h3>
                    <p class="text-blue-600 text-sm mb-3 text-center">Estudiante de Ingeniería en Ciencias de la Computación</p>
                    <p class="text-gray-600 text-sm text-center mb-4">Investigación en algoritmos de navegación para robots móviles en entornos dinámicos.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-github text-lg"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fas fa-envelope text-lg"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Student Profile Card -->
            <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl border-b-4 border-transparent hover:border-blue-600 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-blue-700 rounded-full flex items-center justify-center mb-4 group-hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-user text-2xl text-white"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Ana Martínez</h3>
                    <p class="text-blue-600 text-sm mb-3 text-center">Estudiante de Maestría en Robótica</p>
                    <p class="text-gray-600 text-sm text-center mb-4">Desarrollo de interfaces hombre-máquina para sistemas robóticos colaborativos.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-github text-lg"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fas fa-envelope text-lg"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Student Profile Card -->
            <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl border-b-4 border-transparent hover:border-blue-600 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-blue-700 rounded-full flex items-center justify-center mb-4 group-hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-user text-2xl text-white"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Ivan Cruz</h3>
                    <p class="text-blue-600 text-sm mb-3 text-center">Estudiante de Ingeniería en Ciencias de la Computación</p>
                    <p class="text-gray-600 text-sm text-center mb-4">Investigación en aprendizaje por refuerzo para sistemas robóticos autónomos.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-github text-lg"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fas fa-envelope text-lg"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Student Profile Card -->
            <div class="group bg-white p-6 rounded-xl shadow-md hover:shadow-xl border-b-4 border-transparent hover:border-blue-600 transition-all duration-300">
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-blue-700 rounded-full flex items-center justify-center mb-4 group-hover:scale-105 transition-transform duration-300">
                        <i class="fas fa-user text-2xl text-white"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Lucía Fernández</h3>
                    <p class="text-blue-600 text-sm mb-3 text-center">Estudiante de Ingeniería Electrónica</p>
                    <p class="text-gray-600 text-sm text-center mb-4">Diseño de circuitos para sensores avanzados en sistemas robóticos móviles.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fab fa-github text-lg"></i></a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors"><i class="fas fa-envelope text-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Achievements and Recognition Section -->
<div class="bg-gradient-to-b from-gray-50 to-gray-100 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center mb-16">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Excelencia e Innovación</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Logros y Reconocimientos</p>
            <div class="w-16 h-1 bg-blue-600 mx-auto my-4"></div>
            <p class="mt-6 text-lg leading-8 text-gray-600 max-w-2xl mx-auto">Nuestro centro ha sido reconocido por su excelencia en investigación y desarrollo de tecnologías robóticas innovadoras.</p>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Achievement Card 1 -->
            <div class="group bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl shadow-md hover:shadow-xl border-l-4 border-blue-600 transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-trophy text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Premio Nacional de Robótica</h3>
                </div>
                <p class="text-gray-700 mb-4">Reconocimiento a la excelencia en investigación y desarrollo de sistemas robóticos autónomos para entornos urbanos.</p>
                <div class="flex items-center text-blue-600">
                    <span class="text-sm font-semibold">2023</span>
                    <i class="fas fa-certificate ml-2"></i>
                </div>
            </div>

            <!-- Achievement Card 2 -->
            <div class="group bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl shadow-md hover:shadow-xl border-l-4 border-blue-600 transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-book text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Publicaciones Destacadas</h3>
                </div>
                <p class="text-gray-700 mb-4">Más de 50 artículos publicados en revistas científicas de alto impacto y conferencias internacionales en los últimos 5 años.</p>
                <div class="flex items-center text-blue-600">
                    <span class="text-sm font-semibold">2019-2024</span>
                    <i class="fas fa-chart-line ml-2"></i>
                </div>
            </div>

            <!-- Achievement Card 3 -->
            <div class="group bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl shadow-md hover:shadow-xl border-l-4 border-blue-600 transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-handshake text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Colaboración Internacional</h3>
                </div>
                <p class="text-gray-700 mb-4">Alianzas estratégicas con universidades y centros de investigación líderes en robótica de Europa, Asia y Norteamérica.</p>
                <div class="flex items-center text-blue-600">
                    <span class="text-sm font-semibold">Continuo</span>
                    <i class="fas fa-globe ml-2"></i>
                </div>
            </div>
        </div>

        <!-- Featured Achievement -->
        <div class="mt-16 bg-gradient-to-r from-blue-700 to-blue-900 rounded-xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="p-8 sm:p-10 lg:p-12">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-star text-2xl text-blue-800"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Proyecto Destacado</h3>
                    </div>
                    <h4 class="text-xl font-semibold text-blue-100 mb-4">Sistema de Navegación Autónoma para Entornos Dinámicos</h4>
                    <p class="text-blue-100 mb-6">Nuestro sistema de navegación autónoma ha sido implementado en aplicaciones reales, demostrando una eficiencia superior en entornos urbanos complejos y dinámicos.</p>
                    <div class="flex space-x-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-200 text-blue-800">
                            <i class="fas fa-award mr-1"></i> Patentado
                        </span>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-200 text-blue-800">
                            <i class="fas fa-industry mr-1"></i> Transferencia Tecnológica
                        </span>
                    </div>
                </div>
                <div class="bg-blue-800 p-8 flex items-center justify-center">
                    <div class="w-full max-w-md aspect-video bg-blue-700 rounded-lg flex items-center justify-center">
                        <i class="fas fa-robot text-6xl text-blue-200 opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Photo Gallery Section -->
<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center mb-16">
            <h2 class="text-base font-semibold leading-7 text-blue-600">Galería de Fotos</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Nuestro Trabajo en Acción</p>
            <div class="w-16 h-1 bg-blue-600 mx-auto my-4"></div>
            <p class="mt-6 text-lg leading-8 text-gray-600 max-w-2xl mx-auto">Explora nuestra colección de imágenes que muestran nuestros proyectos, investigaciones y logros más recientes.</p>
        </div>

        <div class="relative overflow-hidden rounded-xl shadow-lg">
            <!-- Carousel Container -->
            <div id="carousel" class="flex transition-transform duration-500 ease-in-out">
                <!-- Image 1 -->
                <div class="w-full sm:w-1/2 md:w-1/3 flex-none px-1 sm:px-2">
                    <div class="aspect-[4/3] overflow-hidden rounded-xl bg-gray-100 shadow-md hover:shadow-lg transition-all duration-300">
                        <img src="/image/ai-generated-8124241_1280.jpg" alt="Imagen 1" class="h-full w-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <!-- Image 2 -->
                <div class="w-full sm:w-1/2 md:w-1/3 flex-none px-1 sm:px-2">
                    <div class="aspect-[4/3] overflow-hidden rounded-xl bg-gray-100 shadow-md hover:shadow-lg transition-all duration-300">
                        <img src="/image/ai-generated-8124241_1280.jpg" alt="Imagen 2" class="h-full w-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <!-- Image 3 -->
                <div class="w-full sm:w-1/2 md:w-1/3 flex-none px-1 sm:px-2">
                    <div class="aspect-[4/3] overflow-hidden rounded-xl bg-gray-100 shadow-md hover:shadow-lg transition-all duration-300">
                        <img src="/image/ai-generated-8124241_1280.jpg" alt="Imagen 3" class="h-full w-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <!-- Image 4 -->
                <div class="w-full sm:w-1/2 md:w-1/3 flex-none px-1 sm:px-2">
                    <div class="aspect-[4/3] overflow-hidden rounded-xl bg-gray-100 shadow-md hover:shadow-lg transition-all duration-300">
                        <img src="/image/ai-generated-8124241_1280.jpg" alt="Imagen 4" class="h-full w-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <!-- Image 5 -->
                <div class="w-full sm:w-1/2 md:w-1/3 flex-none px-1 sm:px-2">
                    <div class="aspect-[4/3] overflow-hidden rounded-xl bg-gray-100 shadow-md hover:shadow-lg transition-all duration-300">
                        <img src="/image/ai-generated-8124241_1280.jpg" alt="Imagen 5" class="h-full w-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 bg-white/90 p-3 rounded-r-lg shadow-md hover:bg-blue-50 transition-colors duration-300 focus:outline-none">
                <i class="fas fa-chevron-left text-blue-600 text-xl"></i>
            </button>
            <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 bg-white/90 p-3 rounded-l-lg shadow-md hover:bg-blue-50 transition-colors duration-300 focus:outline-none">
                <i class="fas fa-chevron-right text-blue-600 text-xl"></i>
            </button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('carousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = 0;
    const totalImages = carousel.children.length;
    
    // Responsive visible images
    function getVisibleImages() {
        if (window.innerWidth < 640) return 1; // Mobile
        if (window.innerWidth < 768) return 2; // Tablet
        return 3; // Desktop
    }
    
    function updateCarousel() {
        const visibleImages = getVisibleImages();
        const slideWidth = 100 / visibleImages;
        carousel.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
        
        // Update button states
        prevBtn.classList.toggle('opacity-50', currentIndex === 0);
        nextBtn.classList.toggle('opacity-50', currentIndex >= totalImages - visibleImages);
    }

    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });

    nextBtn.addEventListener('click', () => {
        const visibleImages = getVisibleImages();
        if (currentIndex < totalImages - visibleImages) {
            currentIndex++;
            updateCarousel();
        }
    });
    
    // Initial setup
    updateCarousel();
    
    // Update on resize
    window.addEventListener('resize', updateCarousel);
});
</script>
@endsection