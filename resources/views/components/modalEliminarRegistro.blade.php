<div class="modal fade" id="modalEliminarRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Seguro que deseas eliminar el siguiente registro?</h5>
        </div>
        <div class="modal-body">
            <label>ID:</label>
            <input type="text" id="datosRegistroEliminarId" class="form-control" readonly>
            <label class="mt-3">Fecha:</label>
            <input type="text" id="datosRegistroEliminarFecha" class="form-control" readonly>
            <label class="mt-3">Operario:</label>
            <input type="text" id="datosRegistroEliminarOperario" class="form-control" readonly>
            <label class="mt-3">Especie:</label>
            <input type="text" id="datosRegistroEliminarEspecie" class="form-control" readonly>
        </div>
        <div class="modal-footer">
          <form method="POST" action="" id="frmEliminarRegistro">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" onclick="">Eliminar</button>
            <button type="button" class="btn btn-secondary" onclick="jQuery('#modalEliminarRegistro').modal('hide');">
              Cerrar
            </button>
          </form>
          </div>
      </div>
    </div>
  </div>