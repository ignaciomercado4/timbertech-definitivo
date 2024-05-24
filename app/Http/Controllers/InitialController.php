<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;

class InitialController extends Controller
{
    public function mostrarRegistrosExistentes() {
        $registros = Registro::all();
        return view('registrosExistentes', compact('registros'));
    }

    public function mostrarHomepage() {
        return view('homepage');
    }

    public function mostrarCompletarRegistro() {
        return view('completarRegistro');
    }

    public function crearRegistro() {
        Registro::create(request()->all());
        return view('registroExitoso');
    }

    public function eliminarRegistro($id) {
        $registroAEliminar = Registro::findOrFail($id);
        $registroAEliminar->delete();
        return redirect()->route('registrosExistentes');
    }

    public function modificarRegistro($id, Request $request) {
        // hacer logica de modificación acá
    }
}

