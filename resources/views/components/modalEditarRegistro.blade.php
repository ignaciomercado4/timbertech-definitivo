<div class="modal fade" id="modalEditarRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edite los datos de su registro:</h5>
        </div>
        <div class="modal-body">
          <form method="POST" action="" class="form-group">
            @csrf
            @method('post')

            <label for="operario">
                Nombre completo:
            </label>
            <input type="text" class="form-control w-100" placeholder="Ej.: José Pérez" name="operario" required>
            <label for="fecha">
                Fecha:
            </label>
            <input type="date" class="form-control w-100" name="fecha" required>
            <label for="turno">
                Turno:
            </label>
            <select name="turno" class="form-control w-100">
                <option value="Mañana">Mañana</option>
                <option value="Tarde">Tarde</option>
                <option value="Noche">Noche</option>
            </select>

            <label for="especie">
                Especie:
            </label>
            <input type="text" class="form-control w-100" name="especie" placeholder="Ej.: Timbó" required>

            <label for="cantidad_tablas">
                Cantidad de tablas:
            </label>
            <input type="number" class="form-control w-100" name="cantidad_tablas" id="cantidadTablas" placeholder="Ej.: 20" min="0" required>

            <label for="medidas">
                Medidas de las tablas:
            </label>
            <input type="number" name="alto" id="alto" class="form-control w-100" placeholder="Alto en pies" min="0" required>
            <input type="number" name="ancho" id="ancho" class="form-control w-100" placeholder="Ancho en pies" min="0" required>
            <input type="number" name="espesor" id="espesor" class="form-control w-100" placeholder="Espesor en pulgadas" min="0" required><br>
            <button>Guardar cambios</button>
            <button type="button" class="btn btn-secondary" onclick="jQuery('#modalEditarRegistro').modal('hide');">
              Cerrar
            </button>
          </div>
      </div>
    </div>
  </div>