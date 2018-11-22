<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Proyectos extends Model
{
 
	protected $table = "proyectos";
	
	 protected $fillable  = [ 'nombre', 'fecha_i', 'fecha_f', 'path', 'objetivo_p', 'objetivo_s', 'presupuesto'];

    public function setPathAttribute($path){
		if($path){
        $name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['path'] = $name;
		\Storage::disk('local')->put($name, \File::get($path));
        }
	}
}
