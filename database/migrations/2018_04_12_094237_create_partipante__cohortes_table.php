<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartipanteCohortesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partipante__cohortes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_partipante');
            $table->integer('id_cohorte');
            $table->string('estado')->default("0");
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
        Schema::drop('partipante__cohortes');
    }
}
