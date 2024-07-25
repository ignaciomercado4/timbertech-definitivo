@extends('layouts.basicLayout')

@section('title', 'Homepage')

@section('content')

<div class="row text-center josefin" style="margin-top: 25vh">
    <div class="col-12">
        <h1 class="h1 fw-bolder josefin" style="font-size: 4.5rem">
            Timber<span class="fw-light">Tech</span>
        </h1>
    </div>
    <div class="col-12">
        <h4 class="h2 josefin">
            Virtualizador de inventarios para aserraderos.
        </h4>
    </div>
</div>
<div class="d-flex justify-content-center">
    <button type="button" class="btn btn-dark m-4 fs-4" onclick="window.location.href = '{{ url("completarRegistro") }}'">
        Crear registro
    </button>
    <button type="button" class="btn btn-dark m-4 fs-4" onclick="window.location.href = '{{ url("registrosExistentes") }}'">
        Ver registros
    </button>
</div>

@endsection

