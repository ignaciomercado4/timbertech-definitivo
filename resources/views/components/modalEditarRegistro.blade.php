<div class="modal fade" id="modalEditarRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Seguro que deseas eliminar el siguiente registro?</h5>
        </div>
        <div class="modal-body">
            <label>ID:</label>
            <input type="text" id="datosRegistroEditarId" class="form-control" disabled>
            <label class="mt-3">Fecha:</label>
            <input type="text" id="datosRegistroEditarFecha" class="form-control" required>
            <label class="mt-3">Operario:</label>
            <input type="text" id="datosRegistroEditarOperario" class="form-control" required>
            <label class="mt-3">Especie:</label>
            <input type="text" id="datosRegistroEditarEspecie" class="form-control" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="jQuery('#modalEditarRegistro').modal('hide');">
            Cerrar
          </button>
          <form method="POST" action="" id="frmEditarRegistro">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-primary" onclick="">Editar</button>
          </form>
          </div>
      </div>
    </div>
  </div>