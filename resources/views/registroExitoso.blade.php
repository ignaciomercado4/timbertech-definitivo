@extends('layouts.basicLayout')

@section('title', 'Registro exitoso!')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="title">
            <h1 class="mt-3 josefin">
                Su registro fue cargado <span class="fw-bolder">exitosamente</span>
            </h1>
        </div>
    </div>
    <div class="row-12 text-center">
        <div class="col-12">    
            <button class="btn btn-dark m-3 fs-3">
                Ver registros
            </button>
        </div>
        <div class="col-12">            
            <button class="btn btn-dark m-3 fs-3" onclick="window.location.href = '{{ url("completarRegistro") }}'"">
                Volver cargar un nuevo registro
            </button>
        </div>
    </div>
@endsection