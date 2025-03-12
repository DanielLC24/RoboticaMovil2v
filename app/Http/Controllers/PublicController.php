<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function inicio(){
        return view('public.inicio');
    }

    public function nosotros(){
        return view('public.nosotros');
    }

    public function proyectos(){
        return view('public.proyectos');
    }

    public function equipo(){
        return view('public.equipo');
    }

    public function publicaciones(){
        return view('public.publicaciones');
    }

    public function eventos(){
        return view('public.eventos');
    }

    public function colaboraciones(){
        return view('public.colaboraciones');
    }

    public function contacto(){
        return view('public.contacto');
    }
}
