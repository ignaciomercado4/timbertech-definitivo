<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;

class InitialController extends Controller
{
    public function mostrarRegistrosExistentes() {
        return view('registrosExistentes');
    }

    public function mostrarHomepage() {
        return view('homepage');
    }

    public function mostrarCompletarRegistro() {
        return view('completarRegistro');
    }

    public function crearRegistro() {
        $registro = Registro::create(request()->all());

        return $registro;
    }
}
