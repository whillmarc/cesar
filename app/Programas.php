<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programas extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'estado',
    ];
}
