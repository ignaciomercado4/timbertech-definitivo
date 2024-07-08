<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnsToRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registros', function (Blueprint $table) {
            $table->string('especie')->default('No especificado');
            $table->integer('cantidad_tablas')->default(0);
            $table->decimal('alto', 8, 2)->default(0);
            $table->decimal('ancho', 8, 2)->default(0);
            $table->decimal('espesor', 8, 2)->default(0);
            $table->decimal('total_metros_cubicos', 8, 2)->default(0);
            $table->decimal('total_pies_tablares', 8, 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registros', function (Blueprint $table) {
            $table->dropColumn('especie');
            $table->dropColumn('cantidad_tablas');
            $table->dropColumn('alto');
            $table->dropColumn('ancho');
            $table->dropColumn('espesor');
            $table->dropColumn('total_metros_cubicos');
            $table->dropColumn('total_pies_tablares');
        });
    }
}
