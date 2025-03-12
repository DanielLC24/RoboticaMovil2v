@extends('layouts.public')
@section('titulo', 'Contacto')
@section('contenido')

<div class="min-h-screen bg-white py-12 sm:py-16 md:py-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-8 sm:mb-12 md:mb-16">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-blue-900 mb-3 sm:mb-4">Contáctanos</h1>
            <p class="text-base sm:text-lg text-gray-600 max-w-xl sm:max-w-2xl mx-auto">Estamos aquí para ayudarte. Envíanos un mensaje y nos pondremos en contacto contigo lo antes posible.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12">
            <!-- Contact Form -->
            <div class="bg-white rounded-lg shadow-md p-6 sm:p-8">
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-blue-900">Nombre</label>
                        <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-blue-900">Email</label>
                        <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-blue-900">Asunto</label>
                        <input type="text" name="subject" id="subject" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-blue-900">Mensaje</label>
                        <textarea name="message" id="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required></textarea>
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Enviar Mensaje
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-8">
                <!-- Map -->
                <div class="bg-white rounded-lg shadow-md p-4 sm:p-6 h-[250px] sm:h-[300px] mb-6 sm:mb-8">
                
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.329784111405!2d-98.20699362525092!3d19.00518438218488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfbf58ad2399d1%3A0xb517171394a5208b!2sFacultad%20de%20Ciencias%20de%20la%20Computaci%C3%B3n%20-%20BUAP!5e0!3m2!1ses-419!2smx!4v1740633345509!5m2!1ses-419!2smx" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                <!-- Contact Info Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                    <div class="bg-white rounded-lg shadow-md p-6 transition-all duration-300 hover:border-blue-500 hover:shadow-blue-500/20 hover:-translate-y-1 border border-transparent">
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-100 rounded-full p-3">
                                <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-medium text-blue-900">Ubicación</h3>
                                <p class="text-gray-600">104-B, Avenida San Claudio, Blvrd 14 Sur, Cdad. Universitaria, 72592 Heroica Puebla de Zaragoza, Pue.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 transition-all duration-300 hover:border-blue-500 hover:shadow-blue-500/20 hover:-translate-y-1 border border-transparent">
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-100 rounded-full p-3">
                                <i class="fas fa-phone text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-medium text-blue-900">Teléfono</h3>
                                <p class="text-gray-600">+54 222 222 2222</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 transition-all duration-300 hover:border-blue-500 hover:shadow-blue-500/20 hover:-translate-y-1 border border-transparent">
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-100 rounded-full p-3">
                                <i class="fas fa-envelope text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-medium text-blue-900">Email</h3>
                                <p class="text-gray-600">info@roboticamovil.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 transition-all duration-300 hover:border-blue-500 hover:shadow-blue-500/20 hover:-translate-y-1 border border-transparent">
                        <div class="flex items-center space-x-4">
                            <div class="bg-blue-100 rounded-full p-3">
                                <i class="fas fa-clock text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-medium text-blue-900">Horario</h3>
                                <p class="text-gray-600">Lun-Vie: 9:00-17:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div class="bg-white/10 backdrop-blur-md rounded-lg shadow-xl p-4 sm:p-6 relative z-10" data-aos="fade-up">
                    <h3 class="text-lg font-medium text-blue-900 mb-4">Síguenos en redes sociales</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors duration-300">
                            <i class="fab fa-facebook text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors duration-300">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors duration-300">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors duration-300">
                            <i class="fab fa-linkedin text-2xl"></i>
                        </a>
                    </div>
                </div>
               
@endsection