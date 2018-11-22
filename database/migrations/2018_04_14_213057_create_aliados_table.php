<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path')->nullable();
            $table->string('nombre');
            $table->string('rif');
            $table->string('correo');
            $table->string('contrasena');
            $table->string('tipo');
            $table->string('rol');
            $table->string('banco');
            $table->string('cuenta');
            $table->string('parroquia');
            $table->string('avenida');
            $table->string('tipo_casa');
            $table->string('numero_casa');
            $table->string('pagina_web');
            $table->string('red_1')->nullable();
            $table->string('red_2')->nullable();
            $table->string('red_3')->nullable();
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
        Schema::drop('aliados');
    }
}
