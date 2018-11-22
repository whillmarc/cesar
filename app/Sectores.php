<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sectores extends Model
{
   protected $fillable = [
        'nombre', 'descripcion', 'estado',
    ];
}
