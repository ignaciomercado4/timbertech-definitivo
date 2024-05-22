@extends('layouts.basicLayout')

@section('title', 'Registro 2')

@section('content')
<div class="row text-center">
    <div class="col-12">
        <h1 class="h1">
            Hagamos tu registro más personalizado.
        </h1>    
    </div>
    <div class="col-12">
        <form method="POST" action="{{ route('crearRegistro') }}" class="form-group">
            @csrf
            @method('post')
            <label for="operario">
                Ingrese su nombre completo:
            </label>
            <input type="text" class="form-control w-25" placeholder="Ej.: José Pérez" name="operario" required>
            <label for="fecha">
                Ingrese la fecha de su producción:
            </label>
            <input type="date" class="form-control w-25" name="fecha" required>
            <label for="turno">
                Seleccione un turno a cargar:
            </label>
            <select name="turno" class="form-control w-25">
                <option value="default" selected>...</option>
                <option value="mañana">Mañana</option>
                <option value="tarde">Tarde</option>
                <option value="noche">Noche</option>
            </select>
            <button type="submit" class="btn btn-dark" id="submitButton">Crear registro</button>
        </form>
    </div>
</div>

<style>
    input, select {
        margin: auto;
        width: 50%;
        margin-bottom: 10px;
    }
</style>

<script>
    
</script>
@endsection