<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::controller(PublicController::class)->group(function () {

    Route::get('/', 'inicio')->name('inicio');
    Route::get('/nosotros', 'nosotros')->name('nosotros');
    Route::get('/proyectos', 'proyectos')->name('proyectos');
    Route::get('/equipo', 'equipo')->name('equipo');
    Route::get('/publicaciones', 'publicaciones')->name('publicaciones');
    Route::get('/eventos', 'eventos')->name('eventos');
    Route::get('/colaboraciones', 'colaboraciones')->name('colaboraciones');
    Route::get('/contacto', 'contacto')->name('contacto');
});