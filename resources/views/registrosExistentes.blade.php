@extends('layouts.basicLayout')

@section('title', 'Iniciar registro')

@section('content')
<div class="row-12 text-center">
    <div class="col-12">
        <h1 class="h1">
            Registros creados:
        </h1>
    </div>
</div>
<div class="d-flex justify-content-center">
    <table class="table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Turno</th>
            <th>ID</th>
            <th>Acciones</th>
        </tr>
        @foreach($registros as $registro)
            <tr>
                <td>{{ $registro->operario }}</td>
                <td>{{ $registro->fecha }}</td>
                <td>{{ $registro->turno }}</td>
                <td>{{ $registro->id }}</td>
                <td>
                    <form method="POST" action="{{ route('registrosExistentes.delete', ['id' => $registro->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="
                        alert('Seguro que deseas eliminar el registro de la fecha ' + {{ $registro->fecha }} + ', turno ' + '{{ $registro->turno }}')
                        " class="btn btn-danger m-2 p-1">Eliminar registro</button>
                    </form>
                    <button class="btn btn-primary m-2 p-1">Modificar registro</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
