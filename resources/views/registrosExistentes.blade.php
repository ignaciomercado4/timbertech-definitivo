@extends('layouts.basicLayout')

@section('title', 'Iniciar registro')

@section('content')
    <div class="row-12 text-center">
        <div class="col-12">
            <h1 class="h1 josefin">
                Registros creados:
            </h1>
            <form method="GET" action="{{ route('registrosExistentes') }}">
                <select name="ordenarPor" id="ordenarPor">
                    <option value="masRecientesPrimero">Mas recientes primero</option>
                    <option value="menosRecientesPrimero">Menos recientes primero</option>
                </select>
                <button class="btn btn-dark" type="submit">Aplicar filtros</button>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        @include('components.tablaRegistrosExistentes')    
    </div>
@endsection
