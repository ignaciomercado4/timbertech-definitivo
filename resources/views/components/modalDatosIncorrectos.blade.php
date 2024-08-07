<div class="modal fade" id="modalDatosIncorrectos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Datos incorrectos</h5>
        </div>
        <div class="modal-body">
            <p>Los datos ingresados no cumplen con las condiciones.</p>
            <p>Las contraseñas deben tener al menos 8 caracteres y contener al menos un número y una letra.</p>
        </div>
        <div class="modal-footer">
          <form method="POST" action="" id="frmEliminarRegistro">
            @csrf
            @method('delete')
            <button type="button" class="btn btn-secondary" onclick="jQuery('#modalDatosIncorrectos').modal('hide');">
              Cerrar
            </button>
          </form>
          </div>
      </div>
    </div>
  </div>