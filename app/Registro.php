<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//modelo principal de los registros del usuario
class Registro extends Model
{
    protected $fillable =  ['operario', 'fecha', 'turno', 'especie', 'cantidad_tablas', 'alto', 'ancho', 'espesor', 'total_metros_cubicos', 'total_pies_tablares'];
}
