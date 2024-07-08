<table class="table-bordered">
    <tr>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Turno</th>
        <th>Especie</th>
        <th>Cantidad de tablas</th>
        <th>Alto</th>
        <th>Ancho</th>
        <th>Espesor</th>
        <th>Total m3</th>
        <th>Total bf</th>
        <th>ID</th>
        <th>Acciones</th>
    </tr>
    @foreach($registros as $registro)
        <tr>
            <td>{{ $registro->operario }}</td>
            <td>{{ $registro->fecha }}</td>
            <td>{{ $registro->turno }}</td>
            <td>{{ $registro->especie }}</td>
            <td>{{ $registro->cantidad_tablas }}</td>
            <td>{{ $registro->alto }}</td>
            <td>{{ $registro->ancho }}</td>
            <td>{{ $registro->espesor }}</td>
            <td>{{ $registro->total_metros_cubicos }}</td>
            <td>{{ $registro->total_pies_tablares }}</td>
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