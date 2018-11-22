<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCohortesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cohortes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proyecto');
            $table->integer('numero');
            $table->string('fecha_inicio');
            $table->string('fecha_culminacion');
            $table->string('mes_inicio');
            $table->string('mes_final');
            $table->integer('planillas_recibidas');
            $table->integer('personas_entrevistadas');
            $table->integer('personas_seleccionadas');
            $table->string('localidad');
            $table->string('estado')->default('Inactivo');            
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
        Schema::drop('cohortes');
    }
}
