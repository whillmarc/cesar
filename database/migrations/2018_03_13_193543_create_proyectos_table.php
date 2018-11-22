<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('fecha_i');
            $table->string('fecha_f');
            $table->string('path')->nullable();
            $table->string('objetivo_p');
            $table->string('objetivo_s');            
            $table->float('presupuesto',15,2);
            $table->string('estado')->default('Inactivo');
            $table->timestamps();
        });
    }

/*  php artisan make:migration alter_profiles_table --table=profiles*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proyectos');
    }
}
