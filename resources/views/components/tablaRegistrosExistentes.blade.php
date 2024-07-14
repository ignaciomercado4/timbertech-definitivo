<table class="table-bordered">
    <tr class="text-center">
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Turno</th>
        <th>Especie</th>
        <th>Cantidad de tablas</th>
        <th>Alto</th>
        <th>Ancho</th>
        <th>Espesor</th>
        <th>Total metros cúbicos</th>
        <th>Total pies tablares</th>
        <th>ID</th>
        <th>Acciones</th>
    </tr>
    @foreach($registros as $registro)
        <tr class="text-center">
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
            <button 
                class="btn btn-danger" 
                onclick="mostrarModalEliminarRegistro(this);"
                data-registro-id="{{ $registro->id }}"
                data-operario="{{ $registro->operario }}"
                data-fecha="{{ $registro->fecha }}"
                data-especie="{{ $registro->especie }}">
                Eliminar
            </button>
                <button class="btn btn-primary"
                onclick="mostrarModalEditarRegistro(this);"
                data-registro-id="{{ $registro->id }}"
                data-operario="{{ $registro->operario }}"
                data-fecha="{{ $registro->fecha }}"
                data-turno="{{ $registro->turno }}"
                data-especie="{{ $registro->especie }}"
                data-cantidad-tablas="{{ $registro->cantidad_tablas }}"
                data-alto="{{ $registro->alto }}"
                data-ancho="{{ $registro->ancho }}"
                data-espesor="{{ $registro->espesor }}"
                data-total-metros-cubicos="{{ $registro->total_metros_cubicos }}"
                data-total-pies-tablares="{{ $registro->total_pies_tablares }}"
                >Editar</button>
                <button class="btn btn-info">PDF</button>
            </td>
        </tr>
        <style>
            th {
                padding: 5px;
            }

            td {
                padding: 5px;
            }
        </style>
    @endforeach
</table>

@include('components.modalEliminarRegistro')
@include('components.modalEditarRegistro')

@push('scripts')
    <script type="text/javascript">
        function mostrarModalEliminarRegistro(btn) {
            jQuery('#modalEliminarRegistro').modal('show');
            jQuery('#datosRegistroEliminarId').val(btn.dataset.registroId);
            jQuery('#datosRegistroEliminarFecha').val(btn.dataset.fecha);
            jQuery('#datosRegistroEliminarOperario').val(btn.dataset.operario);
            jQuery('#datosRegistroEliminarEspecie').val(btn.dataset.especie);

            let actionCorrecto = window.location.protocol + "//" + window.location.host + "/registroEliminado/" + btn.dataset.registroId;
            jQuery('#frmEliminarRegistro').attr('action', actionCorrecto);
        }

        function mostrarModalEditarRegistro(btn) {
            jQuery('#modalEditarRegistro').modal('show');
            jQuery('#headerRegistroId').text("Registro ID: " + btn.dataset.registroId);
            jQuery('#datosRegistroEditarOperario').val(btn.dataset.operario);
            jQuery('#datosRegistroEditarFecha').val(btn.dataset.fecha);
            jQuery('#datosRegistroEditarTurno').val(btn.dataset.turno);
            jQuery('#datosRegistroEditarEspecie').val(btn.dataset.especie);
            jQuery('#datosRegistroEditarCantidadTablas').val(btn.dataset.cantidadTablas);
            jQuery('#datosRegistroEditarAlto').val(btn.dataset.alto);
            jQuery('#datosRegistroEditarAncho').val(btn.dataset.ancho);
            jQuery('#datosRegistroEditarEspesor').val(btn.dataset.espesor);
        }
    </script>
@endpush