<div class="modal fade" id="modalEditarRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editarModalLabel">
          {{-- Aca iría el ID del registo --}}
        </h5>
      </div>
      <div class="modal-body">
        <form method="POST" id="frmEditarRegistro" action="" class="form-group">
          @csrf
          @method('PUT')

          <label for="operario">
              Nombre completo:
          </label>
          <input type="text" id="datosRegistroEditarOperario" class="form-control w-100" placeholder="Ej.: José Pérez" name="operario" required>
            <label for="fecha">
              Fecha:
          </label>
          <input id="datosRegistroEditarFecha" type="date" class="form-control w-100" name="fecha" required>
          <label for="turno">
            Turno:
          </label>
          <select name="turno" class="form-control w-100" id="datosRegistroEditarTurno">
            <option value="Mañana">Mañana</option>
            <option value="Tarde">Tarde</option>
            <option value="Noche">Noche</option>
          </select>

          <label for="especie">
            Especie:
          </label>
          <input type="text" id="datosRegistroEditarEspecie" class="form-control w-100" name="especie" placeholder="Ej.: Timbó" required>

          <label for="cantidad_tablas">
            Cantidad de tablas:
          </label>
          <input type="number" id="datosRegistroEditarCantidadTablas" class="form-control w-100" name="cantidad_tablas" id="cantidadTablas" placeholder="Ej.: 20" min="0" required>

          <label for="medidas">
            Medidas de las tablas:
          </label>
          <input type="number" id="datosRegistroEditarAlto" name="alto" id="alto" class="form-control w-100" placeholder="Alto en pies" min="0" required>
          <input type="number" id="datosRegistroEditarAncho" name="ancho" id="ancho" class="form-control w-100" placeholder="Ancho en pies" min="0" required>
          <input type="number" id="datosRegistroEditarEspesor" name="espesor" id="espesor" class="form-control w-100" placeholder="Espesor en pulgadas" min="0" required><br>

          <label for="total_metros_cubicos" class="mt-2">
              Total en metros cúbicos:
          </label>
          <input type="number" step="0.0001" name="total_metros_cubicos" id="inputTotalMetrosCubicos" class="form-control w-100 mt-2" placeholder="Total metros cúbicos" required><br>
          <label for="total_pies_tablares">
              Total en pies tablares:
          </label>
          <input type="number" step="0.0001" name="total_pies_tablares" id="inputTotalPiesTablares" class="form-control w-100" placeholder="Total pies tablares" required><br>
          <hr>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" onclick="submitEdicionRegistro(this);">
            Actualizar totales y guardar cambios
          </button>
          <button type="button" class="btn btn-secondary" onclick="jQuery('#modalEditarRegistro').modal('hide');">
            Cerrar
          </button>
        </div>
      </div>
    </div>
  </div>
</div>