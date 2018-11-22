<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('primer_nombre');          
            $table->string('segundo_nombre');          
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('cedula');
            $table->string('empresa');
            $table->string('cargo');
            $table->string('telefono_local');
            $table->string('telefono_movil');
            $table->string('telefono_oficina');
            $table->string('correo');
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
        Schema::drop('tutors');
    }
}
