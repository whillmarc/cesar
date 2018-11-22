<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path')->nullable();
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('nacionalidad');
            $table->string('ced');
            $table->string('cedula');
            $table->string('fecha_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('estado_civil');
            $table->string('sexo');
            $table->string('parroquia');
            $table->string('avenida');
            $table->string('casa');
            $table->string('numero_casa');
            $table->string('telefono_local');
            $table->string('telefono_movil1')->nullable();
            $table->string('telefono_movil2')->nullable();
            $table->string('telefono_familiar')->nullable();
            $table->string('otro_telefono')->nullable();
            $table->string('correo');
            $table->integer('hijos');
            $table->string('persona_cargo');
            $table->string('nivel_instruccion');
            $table->string('situacion_actual_estudio');
            $table->string('situacion_laboral_inicial');
            $table->string('experiencia_laboral');
            $table->string('contactado');
            $table->string('estado')->default('Inactivo');
            $table->string('estatus')->default('espera');
            $table->string('cohorte')->default('0');
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
        Schema::drop('participants');
    }
}
