<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        echo 'apresentar a página inicial';
    }

    public function generateExercises(Request $request)
    {
        echo 'gerar exercícios';
    }

    public function printExercises()
    {
        echo 'imprimir exercícios';
    }

    public function exportExercises()
    {
        echo 'exportar exercícios';
    }
}
