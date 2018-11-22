<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentroFormacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centro__formacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path')->nullable();           
            $table->string('nombre');
            $table->string('rif');
            $table->string('correo');
            $table->string('contrasena');
            $table->string('banco');
            $table->string('cuenta');
            $table->string('condicion');
            $table->string('observaciones');
            $table->string('parroquia');
            $table->string('avenida');
            $table->string('tipo_casa');
            $table->string('numero_casa');
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
        Schema::drop('centro__formacions');
    }
}
