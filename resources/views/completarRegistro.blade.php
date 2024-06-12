@extends('layouts.basicLayout')

@section('title', 'Registro 2')

@section('content')
<div class="row text-center m-0 p-0">
    <div class="col-12">
        <h1 class="h1 m-3 josefin">
            Hagamos tu registro más personalizado.
        </h1>   
        <hr>
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
                <option value="Mañana">Mañana</option>
                <option value="Tarde">Tarde</option>
                <option value="Noche">Noche</option>
            </select>
            <label for="especie">Ingrese la especie que desee cargar:</label>
            <input type="text" class="form-control w-25" name="especie" placeholder="Ej.: Timbó" required>
            <label for="cantidad_tablas">Ingrese la cantidad de tablas:</label>
            <input type="number" class="form-control w-25" name="cantidad_tablas" placeholder="Ej.: 20" required>
            <label for="medidas">Ingrese las medidas de las tablas:</label>
            <input type="number" name="alto" class="form-control w-25" placeholder="Alto en pies" required>
            <input type="number" name="ancho" class="form-control w-25" placeholder="Ancho en pies" required>
            <input type="number" name="espesor" class="form-control w-25" placeholder="Espesor en pulgadas" required>
            <button type="submit" class="btn btn-dark" action="" id="submitButton">Crear registro</button>
        </form>
        <hr>
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