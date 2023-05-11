<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id_equipo');
            $table->string('n_serie_equipo');
            $table->string('marca_equipo');
            $table->string('modelo_equipo');
            $table->string('categoria_equipo');
            $table->string('accesorios_equipo');
            $table->string('color_equipo');
            $table->string('detalles_equipo');
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
        Schema::dropIfExists('equipos');
    }
}
