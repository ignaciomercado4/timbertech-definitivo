<form method="GET" action="{{ route('registrosExistentes') }}" class="m-3">
    <select name="ordenarPor" id="ordenarPor">
        <option value="masRecientesPrimero">Mas recientes primero</option>
        <option value="menosRecientesPrimero">Menos recientes primero</option>
    </select>
    <button class="btn btn-dark" type="submit">Aplicar filtros</button>
</form>