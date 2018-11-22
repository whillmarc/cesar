<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Participant extends Model
{
	   protected $table = "participants";
	
   protected $fillable = [
        'primer_nombre', 'segundo_nombre', 'primer_apellido',  'segundo_apellido', 'nacionalidad', 'ced', 'cedula', 'fecha_nacimiento', 'lugar_nacimiento', 'estado_civil', 'sexo', 'parroquia', 'avenida', 'casa', 'numero_casa', 'telefono_local', 'telefono_movil1', 'telefono_movil2', 'telefono_familiar', 'otro_telefono', 'correo', 'hijos', 'persona_cargo', 'nivel_instruccion', 'situacion_actual_estudio', 'situacion_laboral_inicial', 'experiencia_laboral', 'contactado','estado', 'estatus', 'cohorte'
    ];
  
  public function setPathAttribute($path){
	if($path){	
      $name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['path'] = $name;
		\Storage::disk('local')->put($name, \File::get($path));
    }
      
  }
}
