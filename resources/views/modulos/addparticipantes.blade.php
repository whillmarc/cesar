@extends('home')

@section('heads')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
@endsection

@section('content')

<!-- ############ PAGE START-->
<div class="padding">
  
  <div class="row">
      @include('alerts.request')
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h2>Agregar Participantes</h2>
          <small></small>
        </div>
        <div class="box-divider m-a-0"></div>
        <div class="box-body">
      <!--    <form role="form" action="{{url('/registroparticipante')}}" method="POST" files="true" enctype="multipart/form-data"> -->
            {!!Form::open(['url'=>'/registroparticipante', 'method'=>'POST', 'files' => true])!!}
             {!! csrf_field() !!}
 
               <div class="form-group">
            {!!Form::label('exampleInputEmail1','Foto')!!}
            {!!Form::file('path')!!}
              </div>
                        
            <div class="form-group">
              <label for="exampleInputEmail1">Primer Nombre</label>
              <input type="text" name="primer_nombre" class="form-control" placeholder="ingresa el primer nombre">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Segundo Nombre</label>
              <input type="text" name="segundo_nombre" class="form-control" placeholder="ingresa el segundo nombre">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Primer Apellido</label>
              <input type="text" name="primer_apellido" class="form-control" placeholder="ingresa el primer apellido">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Segundo Apellido</label>
              <input type="text" name="segundo_apellido" class="form-control" placeholder="ingresa el segundo apellido">
            </div>
            <div class="form-group">
              <label>Nacionalidad</label>
                 <select class="form-control" name="nacionalidad">
                   <option>Venezolano(a)</option>
                   <option>Extranjero(a)</option>
                 </select>
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Cedula</label>
              <input type="text" name="ced" class="form-control" placeholder="ingresa el numero de cedula">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Fecha de Nacimiento</label>
              <input type="text" id="datepicker" class="form-control" name="fecha_nacimiento">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Lugar de Nacimiento</label>
              <input type="text" name="lugar_nacimiento" class="form-control" placeholder="ingresa el lugar de nacimiento">
              </div>
              <div class="form-group">
                <label>Estado Civil</label>
                 <select class="form-control" name="estado_civil">
                   <option>Soltero(a)</option>
                   <option>Casado(a)</option>
                   <option>Divorciado(a)</option>
                   <option>Viudo(a)</option>
                   <option>Concubinato(a)</option>
                 </select>
            </div>
            <div class="form-group">
                 <label>Sexo</label>
                 <select class="form-control" name="sexo">
                   <option>Masculino</option>
                   <option>Femenino</option>
                 </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Parroquia, Municipio o Estado</label>
              <input type="text" name="parroquia" class="form-control" placeholder="ingresa la parroquia,municipio o estado">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Avenida o Calle</label>
              <input type="text" name="avenida" class="form-control" placeholder="ingresa la avenida o calle">
              </div>
              <div class="form-group">
                 <label>Edificio o Casa</label>
                 <select class="form-control" name="casa">
                   <option>Edificio</option>
                   <option>casa</option>
                 </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Numero de Departamento o Casa</label>
              <input type="number" name="numero_casa" class="form-control" placeholder="ingresa el numero de edificio o casa">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Telefono Local</label>
              <input type="text" name="telefono_local" class="form-control" placeholder="ingresa el numero local">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Telefono Movil 1</label>
              <input type="text" name="telefono_movil1" class="form-control" placeholder="ingresa el numero de telefono movil 1">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Telefono Movil 2</label>
              <input type="text" name="telefono_movil2" class="form-control" placeholder="ingresa el numero de telefono movil 2">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Telefono Familiar</label>
              <input type="text" name="telefono_familiar" class="form-control" placeholder="ingresa un numero de telefono familiar">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Otro Telefono</label>
              <input type="text" name="otro_telefono" class="form-control" placeholder="ingresa otro numero de telefono">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Correo Electónico</label>
              <input type="email" name="correo" class="form-control" placeholder="ingresa el correo electrónico">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Facebook</label>
              <input type="text" name="facebook" class="form-control" placeholder="ingresa tu facebook">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Instagram</label>
              <input type="text" name="instagram" class="form-control" placeholder="ingresa tu instagram">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Twitter</label>
              <input type="text" name="twitter" class="form-control" placeholder="ingresa tu twitter">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Linkedin</label>
              <input type="text" name="linkedin" class="form-control" placeholder="ingresa tu linkedin">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Otra Red</label>
              <input type="text" name="otra_red" class="form-control" placeholder="ingresa otra red">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Numero de Hijos</label>
              <input type="number" name="hijos" class="form-control" placeholder="ingresa tu o incrementa tu numero de hijos">
              </div>
               <div class="form-group">
              <label for="exampleInputEmail1">Personas a Cargo</label>
              <input type="number" name="persona_cargo" class="form-control" placeholder="ingresa o incrementa las personas a cargo">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Nivel de Instruccion</label>
              <input type="text" name="nivel_instruccion" class="form-control" placeholder="ingresa tu nivel de instruccion">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Situacion de Estudio Actual</label>
              <input type="text" name="situacion_actual_estudio" class="form-control" placeholder="ingresa tu situacion de estudio actual">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Situacion Laboral Inicial</label>
              <input type="text" name="situacion_laboral_inicial" class="form-control" placeholder="ingresa tu situacion laboral inicial">
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Experiencia Laboral</label>
              <input type="text" name="experiencia_laboral" class="form-control" placeholder="ingresa tu experiencia laboral">
              </div>
            <button type="submit" class="btn btn-warning btn-block">Agregar</button>
            <a type="button" href="{{url('/participantes')}}" class="btn btn-danger btn-block">Cancelar</a>
         <!-- </form> -->
           {!!Form::close()!!}
        </div>
      </div>
    </div>
    
  </div>
</div>
@endsection

@section('scripts')
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script> 
<script>
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>
@endsection