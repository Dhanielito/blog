<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return "Bienvenidos a al pagina de cursos";
    }

    public function create()
    {
        return "En esta pagina puedes crear cursos ";
    }
    public function show($curso)
    {
        return "Bienvenidos al curso: $curso";
    }
}
