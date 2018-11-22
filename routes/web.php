<?php

use App\Sectores;
use App\Partida;
use App\Cohorte;
use App\Programas;
use App\Proyectos;
use App\Participant;
use App\Partipante_Cohorte;
use App\Aliado;
use App\Centro_Formacion;
use App\Tutor;
use App\Profesor;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\AliadoRequest;
use App\Http\Requests\CohorteRequest;
use App\Http\Requests\ParticipanteRequest;
use App\Http\Requests\PartidaRequest;
use App\Http\Requests\ProfesorRequest;
use App\Http\Requests\ProgramasRequest;
use App\Http\Requests\ProyectoRequest;
use App\Http\Requests\SectorRequest;
use App\Http\Requests\TutorRequest;
use App\Http\Requests\CentroRequest;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/aliados','HomeController@aliados');
    Route::get('/centros','HomeController@centros');
    Route::get('/tutores','HomeController@tutores');
    Route::get('/profesores','HomeController@profesores');
  
  
    Route::get('/sectores', 'HomeController@sectores');
    Route::get('/addsector', 'HomeController@addsector');
   
    Route::get('/programas', 'HomeController@programas');
    Route::get('/addprogramas', 'HomeController@addprogramas'); 
  
    Route::get('/proyectos', 'HomeController@proyectos');    
    Route::get('/addproyecto', 'HomeController@addproyecto');
  
     Route::get('/cohortes', 'HomeController@cohortes');  
     Route::get('/addcohortes', 'HomeController@addcohortes');
   
   // Route::get('/perfilproyecto/addpartida', 'HomeController@addpartida');
  
  

  
  
  
    //Route::get('/perfilproyecto', 'HomeController@perfilproyecto');
  
  Route::get('/perfilproyecto/{id}', function ($id) {
  
    $idd = Proyectos::find($id);
    $idc = $idd->id;
    $partidas = DB::table('partidas')->where('id_proyecto', $idc)->get();
    $nombre = $idd->nombre;
    $cohortes = DB::table('cohortes')->where('proyecto', $nombre)->get();

    //DB::select('select * FROM cohortes where proyecto = ? ', [$nombre]);

    $ccc = Cohorte::where('proyecto', $nombre)->get(); 
          
    $par = DB::select('
        select * from cohortes inner join partipante__cohortes on cohortes.id = partipante__cohortes.id_cohorte inner join participants on partipante__cohortes.id_partipante = participants.id where cohortes.proyecto = ?', [$nombre]);
        
   
 return view('modulos.perfilproyecto', compact('idd','cohortes','par','partidas'));
});
    
  
    Route::any('/perfilparticipante/{id}', function ($id) {
    $idd = Participant::find($id);
      
  return view('modulos.perfilparticipante', compact('idd'));
});
  
  
  
   Route::post('/registersector', function (SectorRequest $request) {
     
     $flight = new Sectores;

        $flight->nombre = $request->nombre;
        $flight->descripcion = $request->descripcion;

        $flight->save();
        return redirect('/sectores')->with('message','El Sector ha sido registrado exitosamente');
});
  
    Route::post('/registrarproyecto', function (ProyectoRequest $request) {
     
     $proyecto = new Proyectos;

        $proyecto->nombre = $request->nombre;
        $proyecto->fecha_i = $request->fecha_i;
        $proyecto->fecha_f = $request->fecha_f;
        $proyecto->objetivo_p = $request->objetivo_p;
        $proyecto->objetivo_s = $request->objetivo_s;
        $proyecto->presupuesto = $request->presupuesto;
        $proyecto->path = $request->path;
        $proyecto->save();
        
        return redirect('/proyectos')->with('message','El Proyecto ha sido registrado exitosamente');
});
  
  //REGISTRO DE PROGRAMA
   Route::post('/registerprograma', function (ProgramasRequest $request) {
     
     $flight = new Programas;

        $flight->id_sector = $request->id_sector;
        $flight->nombre = $request->nombre;
        $flight->descripcion = $request->descripcion;

        $flight->save();
      return redirect('/programas')->with('message','El Programa ha sido registrado exitosamente');
});
  //FIN DEL REGISTRO DEL PROGRAMA
   //SECTORES
  //ACTIVAR SECTOR
   Route::get('/activesector/{id}', function ($id) {
     $flight = Sectores::find($id);
     $flight->estado = 'Activo';
     $flight->save();     
      return redirect('/sectores')->with('message','El Sector ha sido activado exitosamente');
});  
   //ACTIVAR SECTOR
   //EDITAR SECTOR
    Route::get('/editsector/{id}', function ($id) {
      $idd = Sectores::find($id);
      return view('modulos.editsector', compact('idd'));
}); 

  //EDITAR SECTOR
  //SUSPENDER SECTOR
  Route::get('/suspendersector/{id}', function ($id) {  
     $flight = Sectores::find($id);
     $flight->estado = 'Inactivo';
     $flight->save();          
      return redirect('/sectores')->with('message-error','El Sector ha sido desactivado exitosamente');
});
   //SUSPENDER SECTOR
   //MODIFICAR SECTOR
    Route::post('/modisector', function (SectorRequest $request) {    
     $id = $request['idc'];     
     $flight = Sectores::find($id);
     $flight->nombre = $request['nombre'];
     $flight->descripcion = $request['descripcion'];
     $flight->save();     
     return redirect('/sectores')->with('message','El Sector ha sido modificado exitosamente');
});
    //MODIFICAR SECTOR
    //FiN SECTORES

  //PROGRAMA
  //ACTIVAR PROGRAMA
   Route::get('/activeprograma/{id}', function ($id) {
     $flight = Programas::find($id);
     $flight->estado = 'Activo';
     $flight->save();     
      return redirect('/programas')->with('message','El Programa ha sido activado exitosamente');
});  
   //ACTIVAR PROGRAMA
   //EDITAR PROGRAMA
    Route::get('/editprograma/{id}', function ($id) {
      $sectores = Sectores::all();
      $idd = Programas::find($id);
      return view('modulos.editprograma', compact('idd','sectores'));
}); 
  //EDITAR PROGRAMA
  //SUSPENDER PROGRAMA
  Route::get('/suspenderprograma/{id}', function ($id) {  
     $flight = Programas::find($id);
     $flight->estado = 'Inactivo';
     $flight->save();          
      return redirect('/programas')->with('message-error','El Programa ha sido desactivado exitosamente');
});
   //SUSPENDER PROGRAMA
   //MODIFICAR PROGRAMA
    Route::post('/modiprograma', function (ProgramasRequest $request) {    
     $id = $request['idc'];     
     $flight = Programas::find($id);
     $flight->id_sector = $request['id_sector'];
     $flight->nombre = $request['nombre'];
     $flight->descripcion = $request['descripcion'];
     $flight->save();     
     return redirect('/programas')->with('message','El Programa ha sido modificado exitosamente');
});
    //MODIFICAR PROGRAMA
    //FIN PROGRAMA
  
  //INCIO COHORTES
  //ACTIVAR COHORTES
   //EDITAR COHORTES
    Route::get('/editcohorte/{id}', function ($id) {
      $idd = Cohorte::find($id);
      $proyectos = Proyectos::all();
      return view('modulos.editcohorte', compact('idd','proyectos'));
}); 
  
  Route::post('/modicohorte', function (CohorteRequest $request) {    
     $id = $request['idc'];     
     $cohorte = Cohorte::find($id);
    
        $cohorte->proyecto = $request->proyecto;
        $cohorte->numero = $request->numero;
        $cohorte->fecha_inicio = $request->fecha_inicio;
        $cohorte->fecha_culminacion = $request->fecha_culminacion;
        $cohorte->mes_inicio = $request->mes_inicio;
        $cohorte->mes_final = $request->mes_final;
        $cohorte->planillas_recibidas = $request->planillas_recibidas;
        $cohorte->personas_entrevistadas = $request->personas_entrevistadas;
        $cohorte->personas_seleccionadas = $request->personas_seleccionadas;
        $cohorte->localidad = $request->localidad;
    
        $cohorte->save();  
     return redirect('/cohortes')->with('message','El Cohorte ha sido modificado exitosamente');
});
   
  //COHORTE
  //ACTIVAR COHORTE
   Route::get('/activecohorte/{id}', function ($id) {
     $flight = Cohorte::find($id);
     $flight->estado = 'Activo';
     $flight->save();     
      return redirect('/cohortes')->with('message','El Cohorte ha sido activado exitosamente');
});  
  
  //COHORTE
  //SUSPENDER COHORTE
  Route::get('/suspendercohorte/{id}', function ($id) {  
     $flight = Cohorte::find($id);
     $flight->estado = 'Inactivo';
     $flight->save();          
      return redirect('/cohortes')->with('message-error','El Cohorte ha sido desactivado exitosamente');
});
  
  // REGISTRAR COHORTE
  Route::post('/addCohorte','HomeController@registrarCohorte');
  
  // INICIO DE PARTIDAS
  Route::get('/addpartida','HomeController@addpartida');
  
    
      Route::post('/perfilproyecto/addpartida', function(){
      $id = $_POST['idc'];
    return view('modulos.addpartida', compact('id'));
});
  // REGISTRO DE PARTIDA
  Route::post('/registropartida', function (Request $request) {
     
      $partida = new Partida;

       $partida->nombre = $request->nombre;
        $partida->monto = $request->monto;
        $partida->id_proyecto = $request->idc;
        
       $partida->save();
      
  return redirect('/proyectos')->with('message','El Cohorte ha sido desactivado exitosamente');
});
  

 Route::get('/participantes', function(){
        
       $participantes = Participant::all();
       $proyectos = Proyectos::all();
       $cohortes = Cohorte::all();
       return view('modulos.participantes', compact('participantes','proyectos','cohortes'));  

 });
Route::get('/upload', function(){
    
   return view('modulos.upload'); 
});
Route::post('/uploading','HomeController@uploading');
    
Route::get('/addParticipante', function(){
     return view('modulos.addparticipantes');
});

    
Route::get('/addListadoParticipante/{id}',function($id){
    $idd=$id;
        return view('modulos.addlistadoparticipante', compact('idd'));
});
    Route::any('/addListadoParticipantes','HomeController@cargarlistpart');
            
Route::post('/GuardarParticipante/','HomeController@guardarlistpart');

    Route::get('/ParticipanteListado/{id}',function($id){
       $idd = Cohorte::find($id);
        $id= $idd->id;
        $participantes = Participant::all();
        return view('modulos.participantelistado',compact('id','participantes'));
    });

Route::get('/editparticipante/{id}', function ($id) {
      $idd = Participant::find($id);
      return view('modulos.editparticipante', compact('idd'));
}); 

Route::get('/activeparticipante/{id}', function ($id) {
     $flight = participant::find($id);
     $flight->estado = 'Activo';
     $flight->save();     
      return redirect('/participantes')->with('message','El Participante ha sido activado exitosamente');
});  

Route::get('/suspenderparticipante/{id}', function ($id) {  
     $flight = Participant::find($id);
     $flight->estado = 'Inactivo';
     $flight->save();          
      return redirect('/participantes')->with('message-error','El Participante ha sido desactivado exitosamente');
});

Route::post('/registroparticipante', function (ParticipanteRequest $request) {
     
     $participante = new Participant;

  
        $participante->path = $request->path;
        $participante->primer_nombre = $request->primer_nombre;
        $participante->segundo_nombre = $request->segundo_nombre;
        $participante->primer_apellido = $request->primer_apellido;
        $participante->segundo_apellido = $request->segundo_apellido;
        $participante->nacionalidad = $request->nacionalidad;
        $participante->ced = $request->ced;
        if($participante->nacionalidad == "Venezolano(a)"){
        $participante->cedula = "V-".$participante->ced; 
        }
        if($participante->nacionalidad == "Extranjero(a)"){
          $participante->cedula = "E-".$request->ced; 
        }
        $participante->fecha_nacimiento = $request->fecha_nacimiento;
        $participante->lugar_nacimiento = $request->lugar_nacimiento;
        $participante->estado_civil = $request->estado_civil;
        $participante->sexo = $request->sexo;
        $participante->parroquia = $request->parroquia;
        $participante->avenida = $request->avenida;
        $participante->casa = $request->casa; 
        $participante->numero_casa = $request->numero_casa;
        $participante->telefono_local = $request->telefono_local;
        $participante->telefono_movil1 = $request->telefono_movil1;
        $participante->telefono_movil2 = $request->telefono_movil2;
        $participante->telefono_familiar = $request->telefono_familiar;
        $participante->otro_telefono = $request->otro_telefono;
        $participante->correo = $request->correo;
        $participante->facebook = $request->facebook;
        $participante->instagram = $request->instagram;
        $participante->twitter = $request->twitter;
        $participante->linkedin = $request->linkedin;
        $participante->otra_red = $request->otra_red;
        $participante->hijos = $request->hijos;
        $participante->persona_cargo = $request->persona_cargo;
        $participante->nivel_instruccion = $request->nivel_instruccion;
        $participante->situacion_actual_estudio = $request->situacion_actual_estudio;
        $participante->situacion_laboral_inicial = $request->situacion_laboral_inicial;
        $participante->experiencia_laboral = $request->experiencia_laboral;

        $participante->save();
      return redirect('/participantes')->with('message','El participante ha sido registrado exitosamente');
});
  
 Route::post('/modiparticipantes', function (ParticipanteRequest $request) {    
     $id = $request['idc'];     
     $participante = Participant::find($id);
        $participante->path = $request->path;
        $participante->primer_nombre = $request->primer_nombre;
        $participante->segundo_nombre = $request->segundo_nombre;
        $participante->primer_apellido = $request->primer_apellido;
        $participante->segundo_apellido = $request->segundo_apellido;
        $participante->nacionalidad = $request->nacionalidad;
        $participante->ced = $request->ced;
        if($participante->nacionalidad == "Venezolano(a)"){
        $participante->cedula = "V-".$participante->ced; 
        }
        if($participante->nacionalidad == "Extranjero(a)"){
          $participante->cedula = "E-".$request->ced; 
        }
        $participante->fecha_nacimiento = $request->fecha_nacimiento;
        $participante->lugar_nacimiento = $request->lugar_nacimiento;
        $participante->estado_civil = $request->estado_civil;
        $participante->sexo = $request->sexo;
        $participante->parroquia = $request->parroquia;
        $participante->avenida = $request->avenida;
        $participante->casa = $request->casa; 
        $participante->numero_casa = $request->numero_casa;
        $participante->telefono_local = $request->telefono_local;
        $participante->telefono_movil1 = $request->telefono_movil1;
        $participante->telefono_movil2 = $request->telefono_movil2;
        $participante->telefono_familiar = $request->telefono_familiar;
        $participante->otro_telefono = $request->otro_telefono;
        $participante->correo = $request->correo;
        $participante->hijos = $request->hijos;
        $participante->persona_cargo = $request->persona_cargo;
        $participante->nivel_instruccion = $request->nivel_instruccion;
        $participante->situacion_actual_estudio = $request->situacion_actual_estudio;
        $participante->situacion_laboral_inicial = $request->situacion_laboral_inicial;
        $participante->experiencia_laboral = $request->experiencia_laboral;
    
        $participante->save();  
     return redirect('/participantes')->with('message','El Participante ha sido modificado exitosamente');
});

// INICIA PROYECTOS
 Route::get('/editproyect/{id}', function ($id) {
      $idd = Proyectos::find($id);
      $programas = Programas::all();
      return view('modulos.editproyect', compact('idd','programas'));
}); 

Route::get('/activeproyect/{id}', function ($id) {
     $flight = Proyectos::find($id);
     $flight->estado = 'Activo';
     $flight->save();     
      return redirect('/proyectos')->with('message','El Proyecto ha sido activado exitosamente');
});  

Route::get('/suspenderproyect/{id}', function ($id) {  
     $flight = Proyectos::find($id);
     $flight->estado = 'Inactivo';
     $flight->save();          
      return redirect('/proyectos')->with('message-error','El Proyecto ha sido desactivado exitosamente');
});

Route::post('/modiproyecto', function (ProyectoRequest $request) {    
     $id = $request['idc'];     
     $proyecto = Proyectos::find($id);
    
        $proyecto->nombre = $request->nombre;
        $proyecto->fecha_i = $request->fecha_i;
        $proyecto->fecha_f = $request->fecha_f;
        $proyecto->objetivo_p = $request->objetivo_p;
        $proyecto->objetivo_s = $request->objetivo_s;
        $proyecto->presupuesto = $request->presupuesto;
        $proyecto->path = $request->path;

        $proyecto->save();
        return redirect('/proyectos')->with('message','El Proyecto ha sido modificado exitosamente');
});

Route::any('/p/{idp}',function($idp){
    
    $id = explode(" ", $idp); 
    $idparti = $id[0];
    $idcoho = $id[1];
    
    $participante = Participant::find($idparti);
    if($participante->contactado=='Si'){
        $participante->contactado = 'No';
        $participante->save();
    }else{
        $participante->contactado = 'Si';
        $participante->save();
    }
    
        $idd = Cohorte::find($idcoho);
        $id= $idd->id;
        $participantes = Participant::all();
    
    return view ('modulos.participantelistado',compact('id','participantes'));
});    
    
Route::get('/addParticipanteCorte/{id}', function($id){

      $cohortes = Cohorte::find($id);
      $coh = $cohortes->numero;

      $participantes = Participant::all();
   return view('modulos.participantes_cohorte',compact('id','participantes','coh'));
     //return $partiXcohorte;
});
    Route::get('/verParticipanteCorte/{id}', function($id){

      $cohortes = Cohorte::find($id);
      $coh = $cohortes->id;
       $nomcoh = $cohortes->proyecto;
        $fechaicoh = $cohortes->fecha_inicio;
        $fechafcoh = $cohortes->fecha_culminacion;

      $participantes = Participant::all();
   return view('modulos.verparticipantes_cohorte',compact('id','participantes','coh','nomcoh','fechaicoh','fechafcoh'));
     //return $partiXcohorte;
});

Route::post('/registroPC/{id}', function(Request $request, $id){
    $registrar = Participant::find($id);

    $registrar->estatus = "Asignado";
    $registrar->save();

    $registro = new Partipante_Cohorte;

    $registro->id_partipante = $request->idp;
    $registro->id_cohorte = $request->idc;
    $registro->estado = $request->cohorte;
    $registro->save();


    return redirect('/cohortes')->with('message','El Participante ha sido asociado al Cohorte exitosamente');

});

Route::post('/eliminarPC/{id}', function($id){

    $registrar = Participant::find($id);

    $registrar->estatus = "espera";
    $registrar->save();

    $a = $registrar->id;

    DB::delete('delete FROM  partipante__cohortes where id_partipante = ? ', [$a]);
  
     

     /*Participante --- id
     Participante_cohorte -- id_participante

     delete where $a = Participante_cohorte. id_participante*/

    return redirect('/cohortes')->with('message-error','El Participante ha sido desvinculado al Cohorte exitosamente');

});

 Route::get('/addaliado', function(){
     return view('modulos.addaliado');
 });

 Route::post('/registroaliado', function (AliadoRequest $request) {
     
     $aliado = new Aliado;

        $aliado->nombre = $request->nombre;
        $aliado->rif = $request->rif;
        $aliado->correo = $request->correo;
        $aliado->contrasena = $request->contrasena;
        $aliado->tipo = $request->tipo;
        $aliado->rol = $request->rol;
        $aliado->banco = $request->banco;
        $aliado->cuenta = $request->cuenta;
        $aliado->parroquia = $request->parroquia;
        $aliado->avenida = $request->avenida;
        $aliado->tipo_casa = $request->tipo_casa; 
        $aliado->numero_casa = $request->numero_casa;
        $aliado->pagina_web = $request->pagina_web;
        $aliado->red_1 = $request->red_1;
        $aliado->red_2 = $request->red_2;
        $aliado->red_3 = $request->red_3;
        $aliado->path = $request->path;

        $aliado->save();
      return redirect('/aliados')->with('message','El Aliado ha sido registrado exitosamente');
});
   
   // INICIA PROYECTOS
 Route::get('/editaliado/{id}', function ($id) {
      $idd = Aliado::find($id);
      return view('modulos.editaliado', compact('idd'));

});

 Route::post('/modialiado', function (AliadoRequest $request) {    
     $id = $request['idc'];     
     $aliado = Aliado::find($id);
    
        $aliado->path = $request->path;
        $aliado->nombre = $request->nombre;
        $aliado->rif = $request->rif;
        $aliado->correo = $request->correo;
        $aliado->contrasena = $request->contrasena;
        $aliado->tipo = $request->tipo;
        $aliado->rol = $request->rol;
        $aliado->banco = $request->banco;
        $aliado->cuenta = $request->cuenta;
        $aliado->parroquia = $request->parroquia;
        $aliado->avenida = $request->avenida;
        $aliado->tipo_casa = $request->tipo_casa; 
        $aliado->numero_casa = $request->numero_casa;
        $aliado->pagina_web = $request->pagina_web;
        $aliado->red_1 = $request->red_1;
        $aliado->red_2 = $request->red_2;
        $aliado->red_3 = $request->red_3;

        $aliado->save();
        return redirect('/aliados')->with('message','El Aliado ha sido modificado exitosamente');
});

 Route::get('/activealiado/{id}', function ($id) {
     $aliado = Aliado::find($id);
     $aliado->estado = 'Activo';
     $aliado->save();     
      return redirect('/aliados')->with('message','El Aliado ha sido activado exitosamente');
});  
  
  //COHORTE
  //SUSPENDER COHORTE
  Route::get('/suspenderaliado/{id}', function ($id) {  
     $aliado = Aliado::find($id);
     $aliado->estado = 'Inactivo';
     $aliado->save();          
      return redirect('/aliados')->with('message-error','El Aliado ha sido desactivado exitosamente');
});

Route::get('/perfilaliado/{id}', function ($id) {
    $idd = Aliado::find($id);
      
  return view('modulos.perfilaliado', compact('idd'));
});

Route::get('/addcentro', function(){
     return view('modulos.addcentro');
 }); 

Route::post('/registrarcentro', function (CentroRequest $request) {
     
     $centro = new Centro_Formacion;

        $centro->path = $request->path;
        $centro->nombre = $request->nombre;
        $centro->rif = $request->rif;
        $centro->correo = $request->correo;
        $centro->contrasena = $request->contrasena;
        $centro->banco = $request->banco;
        $centro->cuenta = $request->cuenta;
        $centro->condicion = $request->condicion;
        $centro->observaciones = $request->observaciones;
        $centro->parroquia = $request->parroquia;
        $centro->avenida = $request->avenida;
        $centro->tipo_casa = $request->tipo_casa;    
        $centro->numero_casa = $request->numero_casa;

        $centro->save();
      return redirect('/centros')->with('message','El Centro de Formacion ha sido registrado exitosamente');
});

 Route::get('/activecentro/{id}', function ($id) {
     $centro = Centro_Formacion::find($id);
     $centro->estado = 'Activo';
     $centro->save();     
      return redirect('/centros')->with('message','El Centro de Formacion ha sido activado exitosamente');
});  
  
  //COHORTE
  //SUSPENDER COHORTE
  Route::get('/suspendercentro/{id}', function ($id) {  
     $centro = Centro_Formacion::find($id);
     $centro->estado = 'Inactivo';
     $centro->save();          
      return redirect('/centros')->with('message-error','El Centro de Formacion ha sido desactivado exitosamente');
});

Route::get('/perfilcentro/{id}', function ($id) {
    $idd = Centro_Formacion::find($id);
      
  return view('modulos.perfilcentro', compact('idd'));
});

Route::get('/editcentro/{id}', function ($id) {
      $idd = Centro_Formacion::find($id);
      return view('modulos.editcentro', compact('idd'));

});

 Route::post('/modicentro', function (CentroRequest $request) {    
     $id = $request['idc'];     
     $centro = Centro_Formacion::find($id);

        $centro->path = $request->path;
        $centro->nombre = $request->nombre;
        $centro->rif = $request->rif;
        $centro->correo = $request->correo;
        $centro->contrasena = $request->contrasena;
        $centro->banco = $request->banco;
        $centro->cuenta = $request->cuenta;
        $centro->condicion = $request->condicion;
        $centro->observaciones = $request->observaciones;
        $centro->parroquia = $request->parroquia;
        $centro->avenida = $request->avenida;
        $centro->tipo_casa = $request->tipo_casa;    
        $centro->numero_casa = $request->numero_casa;

        $centro->save();
        return redirect('/centros')->with('message','El Centro de Formacion ha sido modificado exitosamente');
});

// TUTORES
 Route::get('/addtutor', function(){
     return view('modulos.addtutor');
 }); 

Route::post('/registrartutor', function (TutorRequest $request) {
     
     $tutor = new Tutor;

        $tutor->primer_nombre = $request->primer_nombre;
        $tutor->segundo_nombre = $request->segundo_nombre;
        $tutor->primer_apellido = $request->primer_apellido;
        $tutor->segundo_apellido = $request->segundo_apellido;
        $tutor->cedula = $request->cedula;
        $tutor->empresa = $request->empresa;
        $tutor->cargo = $request->cargo;
        $tutor->telefono_local = $request->telefono_local;
        $tutor->telefono_movil = $request->telefono_movil;
        $tutor->telefono_oficina = $request->telefono_oficina;
        $tutor->correo = $request->correo;    

        $tutor->save();
      return redirect('/tutores')->with('message','El Tutor ha sido registrado exitosamente');
});

 Route::get('/activetutor/{id}', function ($id) {
     $tutor = Tutor::find($id);
     $tutor->estado = 'Activo';
     $tutor->save();     
      return redirect('/tutores')->with('message','El Tutor ha sido activado exitosamente');
});  
  

  Route::get('/suspendertutor/{id}', function ($id) {  
     $tutor = Tutor::find($id);
     $tutor->estado = 'Inactivo';
     $tutor->save();          
      return redirect('/tutores')->with('message-error','El Tutor ha sido desactivado exitosamente');
});

Route::get('/perfiltutor/{id}', function ($id) {
    $idd = Tutor::find($id);
      
  return view('modulos.perfiltutor', compact('idd'));
});

Route::get('/edittutor/{id}', function ($id) {
      $idd = Tutor::find($id);
      return view('modulos.edittutor', compact('idd'));

});

 Route::post('/moditutor', function (TutorRequest $request) {    
     $id = $request['idc'];     
     $tutor = Tutor::find($id);

        $tutor->primer_nombre = $request->primer_nombre;
        $tutor->segundo_nombre = $request->segundo_nombre;
        $tutor->primer_apellido = $request->primer_apellido;
        $tutor->segundo_apellido = $request->segundo_apellido;
        $tutor->cedula = $request->cedula;
        $tutor->empresa = $request->empresa;
        $tutor->cargo = $request->cargo;
        $tutor->telefono_local = $request->telefono_local;
        $tutor->telefono_movil = $request->telefono_movil;
        $tutor->telefono_oficina = $request->telefono_oficina;
        $tutor->correo = $request->correo;    

        $tutor->save();
        return redirect('/tutores')->with('message','El Tutor ha sido modificado exitosamente');
});


// PROFESORES
 Route::get('/addprofesor', function(){
     return view('modulos.addprofesor');
 }); 

Route::post('/registrarprofesor', function (ProfesorRequest $request) {
     
     $profesor = new Profesor;

        $profesor->primer_nombre = $request->primer_nombre;
        $profesor->segundo_nombre = $request->segundo_nombre;
        $profesor->primer_apellido = $request->primer_apellido;
        $profesor->segundo_apellido = $request->segundo_apellido;
        $profesor->cedula = $request->cedula;
        $profesor->telefono_local = $request->telefono_local;
        $profesor->telefono_movil = $request->telefono_movil;
        $profesor->telefono_oficina = $request->telefono_oficina;
        $profesor->correo = $request->correo;    

        $profesor->save();
      return redirect('/profesores')->with('message','El Profesor ha sido registrado exitosamente');
});

 Route::get('/activeprofesor/{id}', function ($id) {
     $profesor = Profesor::find($id);
     $profesor->estado = 'Activo';
     $profesor->save();     
      return redirect('/profesores')->with('message','El Profesor ha sido activado exitosamente');
});  
  

  Route::get('/suspenderprofesor/{id}', function ($id) {  
     $profesor = Profesor::find($id);
     $profesor->estado = 'Inactivo';
     $profesor->save();          
      return redirect('/profesores')->with('message-error','El Profesor ha sido desactivado exitosamente');
});

Route::get('/perfilprofesor/{id}', function ($id) {
    $idd = Profesor::find($id);
      
  return view('modulos.perfilprofesor', compact('idd'));
});

Route::get('/editprofesor/{id}', function ($id) {
      $idd = Profesor::find($id);
      return view('modulos.editprofesor', compact('idd'));

});

 Route::post('/modiprofesor', function (ProfesorRequest $request) {    
     $id = $request['idc'];     
     $profesor = profesor::find($id);

        $profesor->primer_nombre = $request->primer_nombre;
        $profesor->segundo_nombre = $request->segundo_nombre;
        $profesor->primer_apellido = $request->primer_apellido;
        $profesor->segundo_apellido = $request->segundo_apellido;
        $profesor->cedula = $request->cedula;
        $profesor->telefono_local = $request->telefono_local;
        $profesor->telefono_movil = $request->telefono_movil;
        $profesor->telefono_oficina = $request->telefono_oficina;
        $profesor->correo = $request->correo;    

        $profesor->save();
        return redirect('/profesores')->with('message','El Profesor ha sido modificado exitosamente');
});

Route::get('/editpartida/{id}', function ($id) {
      $idd = Partida::find($id);
      return view('modulos.editpartida', compact('idd'));

});

Route::get('/activepartida/{id}', function ($id) {
     $partida = Partida::find($id);
     $partida->estado = 'Activo';
     $partida->save();     
      return redirect('/proyectos')->with('message','La Partida ha sido activada exitosamente');
});  
  

  Route::get('/suspenderpartida/{id}', function ($id) {  
     $partida = Partida::find($id);
     $partida->estado = 'Inactivo';
     $partida->save();          
      return redirect('/proyectos')->with('message-error','La Partida ha sido desactivada exitosamente');
});

Route::post('/modipartida', function (PartidaRequest $request) {    
     $id = $request['idc'];     
     $partida = Partida::find($id);
     
        $partida->nombre = $request->nombre;
        $partida->monto = $request->monto;

        $partida->save();
        return redirect('/proyectos')->with('message','La partida ha sido modificado exitosamente');
});

});