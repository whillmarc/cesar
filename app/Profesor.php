<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = "profesors"; 
    protected $fillable = ['primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','cedula','telefono_local','telefono_movil','telefono_oficina','correo','estado'];
}