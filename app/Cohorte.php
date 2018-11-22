<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cohorte extends Model
{
    protected $fillable = [
        'proyecto', 'numero', 'fecha_inicio', 'fecha_culminacion', 'mes_inicio', 'mes_final', 'planillas_recibidas', 'personas_entrevistadas' , 'personas_seleccionadas','localidad',
    ];
}
