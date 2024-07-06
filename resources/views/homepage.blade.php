@extends('layouts.basicLayout')

@section('title', 'Homepage')

@section('content')

<div class="row text-center josefin">
    <div class="col-12">
        <h1 class="h1 mt-4 fw-bolder josefin" style="font-size: 4.5rem">
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
    <button type="button" class="btn btn-dark m-4 fs-2" onclick="window.location.href = '{{ url("completarRegistro") }}'">
        Crear registro
    </button>
    <button type="button" class="btn btn-dark m-4 fs-2" onclick="window.location.href = '{{ url("registrosExistentes") }}'">
        Cargar registro
    </button>
</div>

@endsection

