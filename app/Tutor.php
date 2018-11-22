<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = "tutors"; 
    protected $fillable = ['primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','cedula','empresa','cargo','telefono_local','telefono_movil','telefono_oficina','correo','estado'];
}

