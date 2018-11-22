<?php

namespace App\Http\Controllers;
use App\Sectores;
use App\Cohorte;
use App\Programas;
use App\Proyectos;
use App\User;
use App\Participant;
use App\Partipante_Cohorte;
use App\Http\Requests;
use App\Http\Requests\ParticipanteRequest;
use Illuminate\Http\Request;
use App\Aliado;
use App\Centro_Formacion;
use App\Tutor;
use App\Profesor;
use DB;
use App\Http\Requests\CohorteRequest;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


      
         $proyecto = Proyectos::all();
         $sector_activo = DB::table('sectores')->where('estado','Activo')->count();
         $usuarios = User::all();
         $participante_total = DB::table('participants')->count();
         $p_mujer = DB::table('participants')->where('sexo',"Femenino")->count();
         $p_hombre = DB::table('participants')->where('sexo',"Masculino")->count();
         $proyecto_total = DB::table('proyectos')->count();
         $usuarios_totales = DB::table('users')->count();
        return view('modulos.principal', compact('proyecto_total','proyecto','usuarios_totales','usuarios','participantes','p_mujer','p_hombre','participante_total','sector_activo'));
    } 
  
  public function aliados(){
       $aliados = Aliado::all();
       return view('modulos.aliados',compact('aliados'));
  }
  
  //SECTORES
  public function sectores()
    {    
    $sectores = Sectores::all();
        return view('modulos.sectores', compact('sectores'));
    } 
  
  public function addsector()
    {
        return view('modulos.addsector');
    }  
  
  //COHORTES
  public function cohortes()
    {    
    //$sectores = Sectores::all();
      //  return view('modulos.cohortes', compact('cohortes'));
     $cohortes = Cohorte::all();
     $participantes = Participant::all();
     $proyectos = Proyectos::all();
    return view('modulos.cohortes', compact('cohortes','participantes','proyectos'));
    } 
  
  public function addcohortes(){
    
    $proyectos = Proyectos::all();
    return view('modulos.addcohortes', compact('proyectos'));
  }
    
    
    
 
 
  
  //PROGRAMAS
    public function programas()
    {    
    $programa = Programas::all();
        return view('modulos.programas', compact('programa'));
    } 
  public function addprogramas()
    {
      $sectores = Sectores::all();
       return view('modulos.addprograma', compact('sectores'));
    } 
  //PROYECTOS
    public function proyectos()
    {    
    $proyectos = Proyectos::all();
        return view('modulos.proyectos', compact('proyectos'));
    } 
  public function addproyecto()
    {
      $programas = Programas::all();
       return view('modulos.addproyecto', compact('programas'));
    } 
  
  //Add Partida
  
  public function addpartida()
    {
       $proyectos = Proyectos::all();
       return view('modulos.addpartida',compact('proyectos'));
    } 
  
  public function registrarCohorte(CohorteRequest $request){
        $cohorte = new Cohorte;

        $cohorte->proyecto = $request['proyecto'];
        $cohorte->numero = $request['numero'];
        $cohorte->fecha_inicio = $request['fecha_inicio'];
        $cohorte->fecha_culminacion = $request['fecha_culminacion'];
        $cohorte->mes_inicio = $request['mes_inicio'];
        $cohorte->mes_final = $request['mes_final'];
        $cohorte->planillas_recibidas = $request['planillas_recibidas'];
        $cohorte->personas_entrevistadas = $request['personas_entrevistadas'];
        $cohorte->personas_seleccionadas = $request['personas_seleccionadas'];
        $cohorte->localidad = $request['localidad'];
      
        $cohorte->save();
      return redirect('/cohortes')->with('message','El Cohorte ha sido registrado exitosamente');
  }
  
  public function centros()
    {    
    $centros = Centro_formacion::all();
        return view('modulos.centros', compact('centros'));
    } 

    public function tutores()
    {    
    $tutores = Tutor::all();
        return view('modulos.tutores', compact('tutores'));
    } 

    public function profesores()
    {    
    $profesores = Profesor::all();
        return view('modulos.profesores', compact('profesores'));
    } 
    public function verlistpart(){
    $cohortes = Cohorte::all();
        return view('modulos.addlistadoparticipante', compact('cohortes'));
    }
    public function cargarlistpart(){
    
        
        
        $file = Input::file('archivo');
        $nombre = $file->getClientOriginalName();
        $x = $_POST['idcohorte'];
        
        $cohortes=Cohorte::all();
        $participante=Participant::all();
        $path = public_path($file->move('uploads',$nombre));
        //$content = utf8_encode(file_get_contents($path));
        
        $lines = file($path);
        
        $utf8_lines = array_map('utf8_encode', $lines);
        
        $array = array_map('str_getcsv', $utf8_lines);
        
        
        for ($i=1; $i<sizeof($array); $i++){
            
            $arrays[$i] = $array[$i];
            
        }
        return view('modulos.addlistadoparticipantes', compact('arrays','cohortes','path','x','participante'));
    }
    
    
    public function guardarlistpart(){

        
        $valor = $_POST['cohorte'];
        
        $x = $_POST['t'];
        $cohorte = explode(" ", $valor); 
        $guardar = $cohorte[0];
        $lines = file($x);
        $utf8_lines = array_map('utf8_encode', $lines);
        
        $array = array_map('str_getcsv', $utf8_lines);
        
        $participa = Participant::all();
        
        for ($i=1; $i<sizeof($array)-1; $i++){ 
     $encontro=0;
            foreach ($participa as $participan){
              
                if($participan->ced == $array[$i][5]){
                    $encontro = 1;
                    break;
                    
                }
                
            }
           if($encontro == 0){

               $participante = new Participant;
               
        $participante->primer_nombre = $array[$i][0];
        $participante->segundo_nombre = $array[$i][1];
        $participante->primer_apellido = $array[$i][2];
        $participante->segundo_apellido = $array[$i][3];
        $participante->nacionalidad = $array[$i][4];
        $participante->ced = $array[$i][5];
        if($participante->nacionalidad == "Venezolano(a)"){
        $participante->cedula = "V-".$participante->ced; 
        }
        else{
          $participante->cedula = "E-".$participante->ced;         
        }
               
        $participante->fecha_nacimiento = $array[$i][7];
        $participante->lugar_nacimiento = $array[$i][8];
        $participante->estado_civil = $array[$i][9];
        $participante->sexo = $array[$i][10];
        $participante->parroquia = $array[$i][11];
        $participante->avenida = $array[$i][12];
        $participante->casa = $array[$i][13]; 
        $participante->numero_casa = $array[$i][14];
        $participante->telefono_local = $array[$i][15];
        $participante->telefono_movil1 = $array[$i][16];
        $participante->telefono_movil2 = $array[$i][17];
        $participante->telefono_familiar = $array[$i][18];
        $participante->otro_telefono = $array[$i][19];
        $participante->correo = $array[$i][20];
               $hijos = settype($array[$i][21], "integer");
        $participante->hijos = $hijos;
        $participante->persona_cargo = $array[$i][22];
        $participante->nivel_instruccion = $array[$i][23];
        $participante->situacion_actual_estudio = $array[$i][24];
        $participante->situacion_laboral_inicial = $array[$i][25];
        $participante->experiencia_laboral = $array[$i][26];
        $participante->contactado = $array[$i][27];
        $participante->estado = 'Activo';
        $participante->estatus = 'Asignado';
        $participante->cohorte = $guardar;

        $participante->save();
        

        $registro = new Partipante_Cohorte;

        $registro->id_partipante = $participante->id;
        $registro->id_cohorte = $guardar;
        $registro->estado = 1;
        $registro->save(); 
               
           }
            
        }     
        return redirect('/participantes')->with('message','Los participantes han sido registrados exitosamente');
    
    }
    
    public function uploading(){
        
        $file = Input::file('archivo');
        $nombre = $file->getClientOriginalName();
        $file->move('uploads', $nombre);

    }
}
