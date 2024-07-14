<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;

class InitialController extends Controller
{
    public function mostrarRegistrosExistentes(Request $request) {
        $ordenarPor = $request->get('ordenarPor');
        
        if ($ordenarPor == 'masRecientesPrimero') {
            $registros = Registro::orderBy('fecha', 'desc')->get();
        } elseif ($ordenarPor == 'menosRecientesPrimero') {
            $registros = Registro::orderBy('fecha', 'asc')->get();
        } else {
            $registros = Registro::all();
        }

        return view('registrosExistentes', compact('registros'));
    }

    public function mostrarLogin() {
        return view('login');
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

    public function modificarRegistro($id) {
        $registroAEditar = Registro::findOrFail($id);
        
        $registroAEditar->update(request()->all());

        return redirect()->route('registrosExistentes');
    }
}

