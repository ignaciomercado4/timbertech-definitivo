@extends('layouts.basicLayout')

@section('title', 'Completar Registro')

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

            <label for="especie">
                Ingrese la especie que desee cargar:
            </label>
            <input type="text" class="form-control w-25" name="especie" placeholder="Ej.: Timbó" required>

            <label for="cantidad_tablas">
                Ingrese la cantidad de tablas:
            </label>
            <input type="number" class="form-control w-25" name="cantidad_tablas" id="cantidadTablas" placeholder="Ej.: 20" required>

            <label for="medidas">
                Ingrese las medidas de las tablas:
            </label>
            <input type="number" name="alto" id="alto" class="form-control w-25" placeholder="Alto en pies" required>
            <input type="number" name="ancho" id="ancho" class="form-control w-25" placeholder="Ancho en pies" required>
            <input type="number" name="espesor" id="espesor" class="form-control w-25" placeholder="Espesor en pulgadas" required><br>
            <hr>

            <button type="button" class="btn btn-outline-dark" action="" id="calculateButton" onclick="calcularVolumenMetrosCubicos(); calcularVolumenPiesTablares()">
                Calcular totales
            </button><br>
            <input type="text" name="total_metros_cubicos" id="inputTotalMetrosCubicos" class="form-control w-25 mt-2" placeholder="Total metros cúbicos" required disabled><br>
            <input type="text" name="total_pies_tablares" id="inputTotalPiesTablares" class="form-control w-25" placeholder="Total pies tablares" required disabled><br>
            <hr>

            <button type="submit" class="btn btn-dark" action="" id="submitButton">
                Crear registro
            </button>
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

<script type="text/javascript">
    function calcularVolumenMetrosCubicos() {
        // referencias al DOM
        let altoInput = document.querySelector('#alto');
        let anchoInput = document.querySelector('#ancho');
        let espesorInput = document.querySelector('#espesor');
        let cantidadTablasInput = document.querySelector('#cantidadTablas');
        let totalMetrosCubicosInput = document.querySelector('#inputTotalMetrosCubicos');

        let alto = altoInput.value;
        let ancho = anchoInput.value;
        let espesor = espesorInput.value;
        let cantidadTablas = cantidadTablasInput.value;

        // convertir las medidas a metros
        const altoMetros = alto * 0.3048; // 1 pie = 0.3048 metros
        const anchoMetros = ancho * 0.3048; // 1 pie = 0.3048 metros
        const espesorMetros = espesor * 0.0254; // 1 pulgada = 0.0254 metros

        // calcular el volumen de una tabla en metros cúbicos
        const volumenTablaMetrosCubicos = altoMetros * anchoMetros * espesorMetros;

        // multiplicar por la cantidad de tablas
        let volumenTotalMetrosCubicos = volumenTablaMetrosCubicos * cantidadTablas;
        volumenTotalMetrosCubicos = volumenTotalMetrosCubicos.toFixed(4);

        totalMetrosCubicosInput.value = volumenTotalMetrosCubicos + " m³";
    }


    function calcularVolumenPiesTablares() {
        
        // referencias al DOM
        let altoInput = document.querySelector('#alto');
        let anchoInput = document.querySelector('#ancho');
        let espesorInput = document.querySelector('#espesor');
        let cantidadTablasInput = document.querySelector('#cantidadTablas');
        let totalPiesTablaresInput = document.querySelector('#inputTotalPiesTablares');

        let alto = altoInput.value;
        let ancho = anchoInput.value;
        let espesor = espesorInput.value / 12; // en un pie hay 12 pulgadas
        let cantidadTablas = cantidadTablasInput.value;

        // calcular el volumen de una tabla en pies tablares
        const volumenTablaMetrosCubicos = (alto * ancho * espesor) * 423.7760007; // 1 m³ = 423.7760007 bf   

        // multiplicar por la cantidad de tablas
        let volumenTotalPiesTablares = volumenTablaMetrosCubicos * cantidadTablas;
        volumenTotalPiesTablares = volumenTotalPiesTablares.toFixed(4);

        totalPiesTablaresInput.value = volumenTotalPiesTablares + " bf";
    }
</script>


@endsection