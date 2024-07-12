@extends('layouts.basicLayout')

@section('title', 'Iniciar registro')

@section('content')
    <div class="row-12 text-center">
        <div class="col-12">
            <h1 class="h1 josefin">
                Registros creados:
            </h1>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        @include('components.tablaRegistrosExistentes')    
    </div>
@endsection
