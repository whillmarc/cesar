<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partipante_Cohorte extends Model
{
    protected $table = "partipante__cohortes";
	
   protected $fillable = [
      'id_partipante','id_cohorte','estado'
    ];
}
