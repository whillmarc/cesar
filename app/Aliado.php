<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Aliado extends Model
{
    protected $table = "aliados";
     protected $fillable = ['nombre','rif','correo','contrasena','tipo','rol','banco','cuenta','parroquia','avenida','tipo_casa','numero_casa','pagina_web','red_1','red_2','red_3','estado'];


    public function setPathAttribute($path){
		if($path){
            $name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['path'] = $name;
		\Storage::disk('local')->put($name, \File::get($path));
        }
	}


}
