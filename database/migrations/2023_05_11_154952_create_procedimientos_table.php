<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcedimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimientos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id_procedimiento');
            $table->string('cod_procedimiento');
            $table->string('tipo_procedimiento');
            $table->string('nombre_procedimiento');
            $table->string('descripcion_procedimiento');
            $table->string('valor_procedimiento');
            $table->string('recursos_necesarios_procedimiento');
            $table->string('tiempo_estimado_procedimiento');
            $table->string('encargado_procedimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedimientos');
    }
}
