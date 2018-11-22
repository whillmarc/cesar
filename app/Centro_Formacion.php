<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Centro_Formacion extends Model
{
    protected $table = "centro__formacions"; 
    protected $fillable = ['nombre','rif','correo','contrasena','banco','cuenta','condicion','observaciones','parroquia','avenida','tipo_casa','numero_casa'];
  
    public function setPathAttribute($path){
		if($path){
            $name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['path'] = $name;
		\Storage::disk('local')->put($name, \File::get($path));
        }
	}


}
