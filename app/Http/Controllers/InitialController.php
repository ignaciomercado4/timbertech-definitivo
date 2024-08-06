<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class InitialController extends Controller 
{
    static public function auditarAccionesUsuario($texto) {
        $ruta = 'C:\Dev\log.txt';
        $fechaHora = now()->format('Y-m-d H:i:s');
        $usuario = Auth::user()->name;
        $email = Auth::user()->email;

        $linea = "Usuario: " . $usuario . " " . $email . " || Fecha: " . $fechaHora . " || Acción: " . $texto . PHP_EOL;

        $directorio = dirname($ruta);
        if (!File::isDirectory($directorio)) {
            File::makeDirectory($directorio, 0777, true, true);
        }

        File::append($ruta, $linea);
    }

    public function mostrarRegistrosExistentes(Request $request) {
        $ordenarPor = $request->get('ordenarPor');
        
        if ($ordenarPor == 'masRecientesPrimero') {
            $registros = Registro::orderBy('fecha', 'desc')->get();
        } elseif ($ordenarPor == 'menosRecientesPrimero') {
            $registros = Registro::orderBy('fecha', 'asc')->get();
        } else {
            $registros = Registro::all();
        }

        $this->auditarAccionesUsuario("Entró a ver los registros.");

        return view('registrosExistentes', compact('registros'));
    }

    public function mostrarLogin() {
        return view('login');
    }

    public function mostrarHomepage() {
        $this->auditarAccionesUsuario("Entró al home.");

        return view('homepage');
    }

    public function mostrarCompletarRegistro() {
        return view('completarRegistro');
    }

    public function crearRegistro() {
        Registro::create(request()->all());
        
        $this->auditarAccionesUsuario("Creó un registro.");

        return view('registroExitoso');
    }

    public function eliminarRegistro($id) {
        $registroAEliminar = Registro::findOrFail($id);
        $registroAEliminar->delete();
        
        $this->auditarAccionesUsuario("Eliminó un registro.");

        return redirect()->route('registrosExistentes');
    }

    public function modificarRegistro($id) {
        $registroAEditar = Registro::findOrFail($id);
        $registroAEditar->update(request()->all());

        $this->auditarAccionesUsuario("Modificó un registro.");

        return redirect()->route('registrosExistentes');
    }

    public function mostrarFormRegistro () {
        return view('registroUsuario');
    }
}

